<?php

class TiendaServicio {


    private ITiendaRepository $tiendaRepository;


    public function __construct() {
        $this->tiendaRepository = new TiendaRepository();
     
    }

    /* Get all tiendas */

    public function getTiendas(): array {

        $tiendas = $this->tiendaRepository->findAll();      

        return $tiendas;
    }

    // public function delete(int $id): bool{
    //     return $this->tiendaRepository->delete($id);
    // }

    public function findById(int $id){
        return $this->tiendaRepository->read($id);
    }

    public function update(Tienda $tienda){
        return $this->tiendaRepository->update($tienda);
    }
  
}

?>