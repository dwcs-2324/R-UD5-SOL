<?php
class Tienda 
{

    use ViewData;

    
    private ?int $id = null;
    private ?string $nombre= null;
    private ?string $tlf= null;

    // public function __construct(?int $id, ?string $nombre, ?string $tlf=null) {
    //     $this->id = $id;
    //     $this->nombre=$nombre;
    //     $this->tlf=$tlf;
 
    // }



    /**
     * Get the value of id
     *
     * @return ?int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param ?int $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     *
     * @return ?string
     */
    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @param ?string $nombre
     *
     * @return self
     */
    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of tlf
     *
     * @return ?string
     */
    public function getTlf(): ?string
    {
        return $this->tlf;
    }

    /**
     * Set the value of tlf
     *
     * @param ?string $tlf
     *
     * @return self
     */
    public function setTlf(?string $tlf): self
    {
        $this->tlf = $tlf;

        return $this;
    }
}
