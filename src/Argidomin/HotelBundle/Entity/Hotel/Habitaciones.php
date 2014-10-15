<?php

namespace Argidomin\HotelBundle\Entity\Hotel;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Argidomin\HotelBundle\Entity\Base\ProductosBase as Productos;


/**
 * Habitaciones
 *
 * @ORM\Table()
 * @ORM\Entity()
 */
class Habitaciones extends Productos
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
     * @var integer
     *
     * @ORM\Column(name="superficieAproximada", type="string")
     */
    private $superficieAproximada;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoCama", type="string", length=255)
     */
    private $tipoCama;

    /**
     * @ORM\ManyToMany(targetEntity="Argidomin\HotelBundle\Entity\Hotel\Hoteles")
     * @ORM\JoinTable(name="Hotel_habitaciones",
     *      joinColumns={@ORM\JoinColumn(name="Hoteles_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="habitaciones_id", referencedColumnName="id", unique=true)}
     *      )
     **/
    private $hotel;

    /**
     * @ORM\ManyToMany(targetEntity="Argidomin\HotelBundle\Entity\Hotel\CaracteristicasHabitaciones")
     * @ORM\JoinTable(name="Habitaciones_caracteristicas",
     *      joinColumns={@ORM\JoinColumn(name="Habitaciones_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="caracteristicasHabitaciones_id", referencedColumnName="id", unique=true)}
     *      )
     **/
    private $caracteristicasHabitaciones;

       /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->hotel = new \Doctrine\Common\Collections\ArrayCollection();
        $this->caracteristicasHabitaciones = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set superficieAproximada
     *
     * @param string $superficieAproximada
     * @return Habitaciones
     */
    public function setSuperficieAproximada($superficieAproximada)
    {
        $this->superficieAproximada = $superficieAproximada;

        return $this;
    }

    /**
     * Get superficieAproximada
     *
     * @return string 
     */
    public function getSuperficieAproximada()
    {
        return $this->superficieAproximada;
    }

    /**
     * Set tipoCama
     *
     * @param string $tipoCama
     * @return Habitaciones
     */
    public function setTipoCama($tipoCama)
    {
        $this->tipoCama = $tipoCama;

        return $this;
    }

    /**
     * Get tipoCama
     *
     * @return string 
     */
    public function getTipoCama()
    {
        return $this->tipoCama;
    }

    /**
     * Add hotel
     *
     * @param \Argidomin\HotelBundle\Entity\Hotel\Hoteles $hotel
     * @return Habitaciones
     */
    public function addHotel(\Argidomin\HotelBundle\Entity\Hotel\Hoteles $hotel)
    {
        $this->hotel[] = $hotel;

        return $this;
    }

    /**
     * Remove hotel
     *
     * @param \Argidomin\HotelBundle\Entity\Hotel\Hoteles $hotel
     */
    public function removeHotel(\Argidomin\HotelBundle\Entity\Hotel\Hoteles $hotel)
    {
        $this->hotel->removeElement($hotel);
    }

    /**
     * Get hotel
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * Add caracteristicasHabitaciones
     *
     * @param \Argidomin\HotelBundle\Entity\Hotel\CaracteristicasHabitaciones $caracteristicasHabitaciones
     * @return Habitaciones
     */
    public function addCaracteristicasHabitacione(\Argidomin\HotelBundle\Entity\Hotel\CaracteristicasHabitaciones $caracteristicasHabitaciones)
    {
        $this->caracteristicasHabitaciones[] = $caracteristicasHabitaciones;

        return $this;
    }

    /**
     * Remove caracteristicasHabitaciones
     *
     * @param \Argidomin\HotelBundle\Entity\Hotel\CaracteristicasHabitaciones $caracteristicasHabitaciones
     */
    public function removeCaracteristicasHabitacione(\Argidomin\HotelBundle\Entity\Hotel\CaracteristicasHabitaciones $caracteristicasHabitaciones)
    {
        $this->caracteristicasHabitaciones->removeElement($caracteristicasHabitaciones);
    }

    /**
     * Get caracteristicasHabitaciones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCaracteristicasHabitaciones()
    {
        return $this->caracteristicasHabitaciones;
    }
}
