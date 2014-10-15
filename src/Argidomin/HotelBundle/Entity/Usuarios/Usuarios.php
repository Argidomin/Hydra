<?php
/**
 * Nombre de la tabla: Usuarios.
 * Extiende de: BaseUser.
 * Función: Almacena los datos personales del usuario.
 * Campo unico: DNI.
 * 
 * Notas: Los datos del login se herendan de BaseUser, pero se almacenan en la misma tabla.
 * Si se quiere sobreescribir cualquier campo, simplemente añadirle una nueva propiedad al objeto usuarios.
 */
namespace Argidomin\HotelBundle\Entity\Usuarios;

use Doctrine\ORM\Mapping as ORM;

use FOS\UserBundle\Entity\User as BaseUser;

//Validación de datos:
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Usuarios
 *
 * @ORM\Table()
 * @UniqueEntity("dni")
 * @ORM\Entity(repositoryClass="Argidomin\HotelBundle\Entity\Usuarios\UsuariosRepository")
 */
class Usuarios
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
     * @ORM\Column(type="string", length=100, name="Nombre")
     * @Assert\NotNull()
     * 
     * @Assert\Length(
     *     min=3,
     *     minMessage="Tu nombre tiene que tener al menos {{ limit }} caracteres.",
     *     max=100,
     *     maxMessage="Tu nombre  no puede tener más de {{ limit }} caracteres.")
     */
    protected $nombre;

    /**
     * @ORM\Column(type="string", length=100, name="Apellidos")
     * @Assert\NotNull()
     * 
     * @Assert\Length(
     *     min=3,
     *     minMessage="Tus apellidos tiene que tener al menos {{ limit }} caracteres.",
     *     max=100,
     *     maxMessage="Tus apellidos  no puede tener más de {{ limit }} caracteres.")
     */
    protected $apellidos;

    /**
     * @ORM\Column(type="integer", name="Telefono")
     * @Assert\NotNull()
     */
    protected $telefono;

    /**
     * @ORM\Column(type="string", length=100, name="Direccion")
     * @Assert\NotNull()
     * 
     * @Assert\Length(
     *     min=3,
     *     minMessage="Tu direccion tiene que tener al menos {{ limit }} caracteres.",
     *     max=100,
     *     maxMessage="Tu direccion no puede tener más de {{ limit }} caracteres.")
     */
    protected $direccion;

    /**
     * @ORM\Column(type="string", length=100, name="Ciudad")
     * @Assert\NotNull()
     * 
     * @Assert\Length(
     *     min=3,
     *     minMessage="El nombre de tu ciudad tiene que tener al menos {{ limit }} caracteres.",
     *     max=100,
     *     maxMessage="El nombre de tu ciudad tiene no puede tener más de {{ limit }} caracteres.")
     */
    protected $ciudad;

    /**
     * @ORM\Column(type="string", length=100, name="Pais")
     * @Assert\NotNull()
     *
     * @Assert\Length(
     *     min=3,
     *     minMessage="El nombre de tu país tiene que tener al menos {{ limit }} caracteres.",
     *     max=100,
     *     maxMessage="El nombre de tu país no puede tener más de {{ limit }} caracteres.")
     */
    protected $pais;

    /**
     * @ORM\Column(type="string", length=100, name="Empresa", nullable=true)
     * @Assert\Length(
     *     min=3,
     *     minMessage="El nombre de tu empresa tiene que tener al menos {{ limit }} caracteres.",
     *     max=100,
     *     maxMessage="El nombre de tu empresa no puede tener más de {{ limit }} caracteres.")
     */
    protected $empresa;

    /**
     * @ORM\Column(type="string", length=9, name="DNI")
     * @Assert\NotNull()
     * 
     * @Assert\Length(
     *     max=9,
     *     maxMessage="El DNI no puede tener más de {{ limit }} caracteres.")
     */
    protected $dni;

    public function __toString()
    {
        return $this->getNombre() . ' ' .$this->getApellidos();
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
