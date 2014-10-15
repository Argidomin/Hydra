<?php
/**
 * Nombre de la tabla: Productos.
 * Extiende de: Base.
 * Función: Almacena los datos de las caracteristicas de las entidades.
 * 
 */
namespace Argidomin\HotelBundle\Entity\Base;

use Doctrine\ORM\Mapping as ORM;

use Argidomin\HotelBundle\Entity\Base\Base;

/** @ORM\MappedSuperclass */
class CaracteristicasBase extends Base
{
}
