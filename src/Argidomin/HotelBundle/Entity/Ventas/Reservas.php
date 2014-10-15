<?php

namespace Argidomin\HotelBundle\Entity\Ventas;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservas
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Argidomin\HotelBundle\Entity\Ventas\ReservasRepository")
 */
class Reservas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="idReserva", type="string", length=255)
     */
    private $idReserva;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255)
     */
    private $estado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="pagada", type="boolean")
     */
    private $pagada;

    /**
     * @var boolean
     *
     * @ORM\Column(name="editable", type="boolean")
     */
    private $editable;

    /**
     * @ORM\ManyToMany(targetEntity="Argidomin\HotelBundle\Entity\Hotel\ExtrasHotel")
     * @ORM\JoinTable(name="Reservas_extrasHotel",
     *      joinColumns={@ORM\JoinColumn(name="Paquetes_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="Extras_id", referencedColumnName="id", unique=false)}
     *      )
     **/
    private $extras;

    /**
     * @ORM\ManyToOne(targetEntity="Argidomin\HotelBundle\Entity\Hotel\Habitaciones")
     **/
    private $habitacion;

    /**
     * @ORM\ManyToOne(targetEntity="Argidomin\HotelBundle\Entity\Usuarios\Usuarios")
     **/
    private $usuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->extras = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idReserva = uniqid('HCP-');
    }

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
     * Set idReserva
     *
     * @param string $idReserva
     * @return Reservas
     */
    public function setIdReserva($idReserva)
    {
        $this->idReserva = $idReserva;

        return $this;
    }

    /**
     * Get idReserva
     *
     * @return string 
     */
    public function getIdReserva()
    {
        return $this->idReserva;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Reservas
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set pagada
     *
     * @param boolean $pagada
     * @return Reservas
     */
    public function setPagada($pagada)
    {
        $this->pagada = $pagada;

        return $this;
    }

    /**
     * Get pagada
     *
     * @return boolean 
     */
    public function getPagada()
    {
        return $this->pagada;
    }

    /**
     * Set editable
     *
     * @param boolean $editable
     * @return Reservas
     */
    public function setEditable($editable)
    {
        $this->editable = $editable;

        return $this;
    }

    /**
     * Get editable
     *
     * @return boolean 
     */
    public function getEditable()
    {
        return $this->editable;
    }

    /**
     * Add extras
     *
     * @param \Argidomin\HotelBundle\Entity\Hotel\ExtrasHotel $extras
     * @return Reservas
     */
    public function addExtra(\Argidomin\HotelBundle\Entity\Hotel\ExtrasHotel $extras)
    {
        $this->extras[] = $extras;

        return $this;
    }

    /**
     * Remove extras
     *
     * @param \Argidomin\HotelBundle\Entity\Hotel\ExtrasHotel $extras
     */
    public function removeExtra(\Argidomin\HotelBundle\Entity\Hotel\ExtrasHotel $extras)
    {
        $this->extras->removeElement($extras);
    }

    /**
     * Get extras
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * Set habitacion
     *
     * @param \Argidomin\HotelBundle\Entity\Hotel\Habitaciones $habitacion
     * @return Reservas
     */
    public function setHabitacion(\Argidomin\HotelBundle\Entity\Hotel\Habitaciones $habitacion = null)
    {
        $this->habitacion = $habitacion;

        return $this;
    }

    /**
     * Get habitacion
     *
     * @return \Argidomin\HotelBundle\Entity\Hotel\Habitaciones 
     */
    public function getHabitacion()
    {
        return $this->habitacion;
    }

    /**
     * Set usuario
     *
     * @param \Argidomin\HotelBundle\Entity\Usuarios\Usuarios $usuario
     * @return Reservas
     */
    public function setUsuario(\Argidomin\HotelBundle\Entity\Usuarios\Usuarios $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Argidomin\HotelBundle\Entity\Usuarios\Usuarios 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
