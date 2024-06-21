<?php


class TiendaRepository extends BaseRepository implements ITiendaRepository
{

    public function __construct()
    {
        parent::__construct();
        $this->table_name = "tiendas";
        $this->pk_name = "id";
        $this->class_name = "Tienda";
        $this->default_order_column = "nombre";
    }



    public function create($object)
    {
        //TODO
        return true;

    }
    public function update($tienda): bool
    {

        $stmt = $this->conn->prepare("UPDATE $this->table_name 
        SET nombre = ?, tlf = ? WHERE id = ?");

        $stmt->bindValue(1, $tienda->getNombre());
        $stmt->bindValue(2, $tienda->getTlf());
        $stmt->bindValue(3, $tienda->getId());
        return  $stmt->execute();





    }





}
