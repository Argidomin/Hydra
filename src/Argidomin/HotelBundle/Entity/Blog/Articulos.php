<?php
/**
 * Nombre de la tabla: Articulos.
 * Extiende de: BaseUser.
 * Función: Almacena los articulos y textos de la web.
 * Campo unico: titulo.
 * 
 * Notas: Los datos del login se herendan de BaseUser, pero se almacenan en la misma tabla.
 * Si se quiere sobreescribir cualquier campo, simplemente añadirle una nueva propiedad al objeto usuarios.
 */
namespace Argidomin\HotelBundle\Entity\Blog;

use Doctrine\ORM\Mapping as ORM;
use Argidomin\HotelBundle\Entity\Base\Base;




/**
 * Articulos
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Argidomin\HotelBundle\Entity\Blog\ArticulosRepository")
 * 
 */
class Articulos extends Base 
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /*
     * @Gedmo\Locale
     */
    private $locale;
 
    public function setTranslatableLocale($locale)
    {
        $this->locale = $locale;
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

}
