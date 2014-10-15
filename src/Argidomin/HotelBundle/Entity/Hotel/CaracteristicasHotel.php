<?php

namespace Argidomin\HotelBundle\Entity\Hotel;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Argidomin\HotelBundle\Entity\Base\CaracteristicasBase as Caracteristicas;

/**
 * Habitaciones
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CasaPortuguesa\GestionHotelBundle\Entity\Repositories\CaracteristicasHotelRepository")
 */
class CaracteristicasHotel extends Caracteristicas
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }




}
