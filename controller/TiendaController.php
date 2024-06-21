<?php

class TiendaController {

    public $page_title;
    public $view;
    private TiendaServicio $tiendaServicio;
    
    const VIEW_FOLDER='tienda';

    public function __construct() {
        $this->view = self::VIEW_FOLDER.DIRECTORY_SEPARATOR.'list_tienda';
        $this->page_title = '';
        $this->tiendaServicio = new TiendaServicio();
    }

    /* List all tiendas */

    public function list() {
        $this->page_title = 'Listado de tiendas';
        return $this->tiendaServicio->getTiendas();
    }



    public function edit() {
        $tienda = new Tienda();
        $this->page_title = 'Editar Tienda';
        $this->view =self::VIEW_FOLDER.DIRECTORY_SEPARATOR.'edit_tienda';
        /* Id can from get param or method param */
        if (isset($_GET["id"])) {
            $id = $_GET["id"];

            $tienda = $this->tiendaServicio->findById($id);
        }
        return $tienda;
    }

    /* Update note */

    public function save() {

        try {

            $this->view = self::VIEW_FOLDER . DIRECTORY_SEPARATOR . 'edit_tienda';

            $this->page_title = 'Editar tienda';

            if (isset($_POST["id"]) && trim($_POST["id"]) !== "" && is_numeric($_POST["id"])) {
                $id = (int) $_POST["id"];
            } else {
                $id = null;
            }

            if (isset($_POST["nombre"])) {
                $nombre = $_POST["nombre"];
            }
            if (isset($_POST["tlf"])) {
                $tlf = $_POST["tlf"];
            }

            $tienda = new Tienda();
            $tienda->setNombre($nombre);
            $tienda->setTlf($tlf);
            $tienda->setId($id);

            if( $this->tiendaServicio->update($tienda)){
                header("Location: FrontController.php?controller=Tienda&action=list");
                exit;
            }
            else{
                SessionManager::iniciarSesion();
                $_SESSION["error"]= "Ha surgido un error y no se han podido guardar los cambios";
                return $tienda;
            }
        }
        catch(Exception $ex){
            SessionManager::iniciarSesion();
            $_SESSION["error"]= "Ha surgido un error y no se han podido guardar los cambios";

        }
       
    }

}

?>