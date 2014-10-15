<?php

namespace Argidomin\HotelBundle\Entity\Hotel;

use Argidomin\HotelBundle\Entity\Base\PrincipalBase as Principal;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Hoteles
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CasaPortuguesa\GestionHotelBundle\Entity\Repositories\HotelesRepository")
  * @UniqueEntity("emailReservas")
 * 
 */
class Hoteles extends Principal
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
     * @ORM\Column(name="numeroEstrellas", type="string")
     * @Assert\Type(type="string", message="No se ha introducido un numero")
     */
    private $numeroEstrellas;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroHabitaciones", type="string")
     * @Assert\Type(type="string", message="No se ha introducido un numero")
     * 
     */
    private $numeroHabitaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="emailReservas", type="string", length=255)
     * @Assert\NotBlank(message="No puede dejar esta casilla en blanco")
     * @Assert\Email(
     *     message = "No se ha introducido un e-mail valido"
     * )
     */
    private $emailReservas;

    /**
     * @ORM\ManyToMany(targetEntity="Argidomin\HotelBundle\Entity\Hotel\CaracteristicasHotel")
     * @ORM\JoinTable(name="Hotel_caracteristicasHotel",
     *      joinColumns={@ORM\JoinColumn(name="Hoteles_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="caracteristicasHotel_id", referencedColumnName="id", unique=true)}
     *      )
     **/
    private $caracteristicasHotel;

    public function __construct()
    {
        parent::__construct();
        $this->caracteristicasHotel = new ArrayCollection();
        
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
     * Set numeroEstrellas
     *
     * @param integer $numeroEstrellas
     * @return Hoteles
     */
    public function setNumeroEstrellas($numeroEstrellas)
    {
        $this->numeroEstrellas =  $numeroEstrellas;

        return $this;
    }

    /**
     * Get numeroEstrellas
     *
     * @return integer 
     */
    public function getNumeroEstrellas()
    {
        return $this->numeroEstrellas;
    }

    /**
     * Set numeroHabitaciones
     *
     * @param integer $numeroHabitaciones
     * @return Hoteles
     */
    public function setNumeroHabitaciones($numeroHabitaciones)
    {
        $this->numeroHabitaciones =  $numeroHabitaciones;

        return $this;
    }

    /**
     * Get numeroHabitaciones
     *
     * @return integer 
     */
    public function getNumeroHabitaciones()
    {
        return $this->numeroHabitaciones;
    }

    /**
     * Set emailReservas
     *
     * @param string $emailReservas
     * @return Hoteles
     */
    public function setEmailReservas($emailReservas)
    {
        $this->emailReservas = $emailReservas;

        return $this;
    }

    /**
     * Get emailReservas
     *
     * @return string 
     */
    public function getEmailReservas()
    {
        return $this->emailReservas;
    }



    /**
     * Add caracteristicasHotel
     *
     * @param \Argidomin\HotelBundle\Entity\Hotel\CaracteristicasHotel $caracteristicasHotel
     * @return Hoteles
     */
    public function addCaracteristicasHotel(\Argidomin\HotelBundle\Entity\Hotel\CaracteristicasHotel $caracteristicasHotel)
    {
        $this->caracteristicasHotel[] = $caracteristicasHotel;

        return $this;
    }

    /**
     * Remove caracteristicasHotel
     *
     * @param \Argidomin\HotelBundle\Entity\Hotel\CaracteristicasHotel $caracteristicasHotel
     */
    public function removeCaracteristicasHotel(\Argidomin\HotelBundle\Entity\Hotel\CaracteristicasHotel $caracteristicasHotel)
    {
        $this->caracteristicasHotel->removeElement($caracteristicasHotel);
    }

    /**
     * Get caracteristicasHotel
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCaracteristicasHotel()
    {
        return $this->caracteristicasHotel;
    }
}
