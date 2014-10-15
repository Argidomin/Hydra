<?php
/**
 * Nombre de la tabla: Productos.
 * Extiende de: Base.
 * Función: Almacena los datos del producto.
 * 
 */
namespace Argidomin\HotelBundle\Entity\Base;

use Doctrine\ORM\Mapping as ORM;
use Argidomin\HotelBundle\Entity\Base\Base;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/** @ORM\MappedSuperclass */
class ProductosBase extends Base
{

    /**
     * @ORM\Column(name="precio", type="string", nullable=true)
     * @Assert\Type(type="string", message="No se ha introducido un numero")
     * 
     */
    private $precio;

    /**
     * @ORM\Column(name="stock", type="string", nullable=true)
     * @Assert\Type(type="string", message="No se ha introducido un numero")
     * 
     */
    private $stock;




    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     * @return Productos
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Productos
     */
    public function setStock( $stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }
}
