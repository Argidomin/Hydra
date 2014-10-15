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
class PaquetesHotel extends Productos
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
     * @ORM\ManyToMany(targetEntity="Argidomin\HotelBundle\Entity\Hotel\ExtrasHotel")
     * @ORM\JoinTable(name="Paquetes_extrasHotel",
     *      joinColumns={@ORM\JoinColumn(name="Paquetes_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="Extras_id", referencedColumnName="id", unique=false)}
     *      )
     **/
    private $extras;

    /**
     * @ORM\ManyToOne(targetEntity="Argidomin\HotelBundle\Entity\Hotel\Habitaciones")
     **/
    private $habitaciones;



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->extras = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add extras
     *
     * @param \Argidomin\HotelBundle\Entity\Hotel\ExtrasHotel $extras
     * @return PaquetesHotel
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
     * Set habitaciones
     *
     * @param \Argidomin\HotelBundle\Entity\Hotel\Habitaciones $habitaciones
     * @return PaquetesHotel
     */
    public function setHabitaciones(\Argidomin\HotelBundle\Entity\Hotel\Habitaciones $habitaciones = null)
    {
        $this->habitaciones = $habitaciones;

        return $this;
    }

    /**
     * Get habitaciones
     *
     * @return \Argidomin\HotelBundle\Entity\Hotel\Habitaciones 
     */
    public function getHabitaciones()
    {
        return $this->habitaciones;
    }
}
