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
class Usuarios extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    protected $id;
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

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuarios
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Usuarios
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     * @return Usuarios
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Usuarios
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Usuarios
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set pais
     *
     * @param string $pais
     * @return Usuarios
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set empresa
     *
     * @param string $empresa
     * @return Usuarios
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return string 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set dni
     *
     * @param string $dni
     * @return Usuarios
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string 
     */
    public function getDni()
    {
        return $this->dni;
    }
}
