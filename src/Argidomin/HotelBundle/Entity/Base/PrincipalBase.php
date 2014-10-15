<?php
/**
 * Nombre de la tabla: Principales.
 * Extiende de: Base.
 * Función: Tabla base para las tiendas, hoteles y similares. Su funcion es la de almacenar los datos basicos y comunes a todas las empresas
 */
namespace Argidomin\HotelBundle\Entity\Base;

use Doctrine\ORM\Mapping as ORM;
use Argidomin\HotelBundle\Entity\Base\Base;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;




/** @ORM\MappedSuperclass 
  * @UniqueEntity("emailContacto")
 *  
 */
class PrincipalBase extends Base
{
    /**
     * @var string
     * @ORM\Column(name="direccion", type="text")
     * @Assert\NotBlank(message="No puede dejar esta casilla en blanco")
     * 
     */
    private $direccion;

    /**
     * @ORM\Column(name="emailContacto", type="text")
     * @Assert\Email(
     *     message = "No se ha introducido un e-mail valido",
     * )
     */
    private $emailContacto;

    /**
     * @ORM\Column(name="telefono", type="string")
     * @Assert\NotBlank(message="No puede dejar esta casilla en blanco")
     * @Assert\Type(type="string", message="No se ha introducido un numero")
     * 
     */
    private $telefono;

    /**
     * @ORM\Column(name="fax", type="string", nullable=true)
     * @Assert\Type(type="string", message="No se ha introducido un numero")
     * 
     */
    private $fax;

    /**
     * @var string
     * @ORM\Column(name="codigoPostal", type="string")
     * @Assert\NotBlank(message="No puede dejar esta casilla en blanco")
     * 
     */
    private $codigoPostal;

    /**
     * @var string
     * @ORM\Column(name="pais", type="text")
     * @Assert\NotBlank(message="No puede dejar esta casilla en blanco")
     * 
     */
    private $pais;

    /**
     * @var string
     * @ORM\Column(name="ciudad", type="text")
     * @Assert\NotBlank(message="No puede dejar esta casilla en blanco")
     * 
     */
    private $ciudad;

    /**
     * @var string
     * @ORM\Column(name="provincia", type="text")
     * @Assert\NotBlank(message="No puede dejar esta casilla en blanco")
     * 
     */
    private $provincia;

    /**
     * @var string
     * @ORM\Column(name="cifEmpresa", type="text")
     * @Assert\NotBlank(message="No puede dejar esta casilla en blanco")
     * 
     */
    private $cifEmpresa;

    /**
     * @var string
     * @ORM\Column(name="nombreResponsable", type="text")
     * @Assert\NotBlank(message="No puede dejar esta casilla en blanco")
     * 
     */
    private $nombreResponsable;

    /*
     * @var string
     * @ORM\Column(name="direccion", type="text")
     * @Assert\NotBlank(message="No puede dejar esta casilla en blanco")
     * 
     */
    private $logo;


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
     * Set direccion
     *
     * @param string $direccion
     * @return Principales
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
     * Set emailContacto
     *
     * @param string $emailContacto
     * @return Principales
     */
    public function setEmailContacto($emailContacto)
    {
        $this->emailContacto = $emailContacto;

        return $this;
    }

    /**
     * Get emailContacto
     *
     * @return string 
     */
    public function getEmailContacto()
    {
        return $this->emailContacto;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     * @return Principales
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
     * Set fax
     *
     * @param integer $fax
     * @return Principales
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return integer 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set codigoPostal
     *
     * @param integer $codigoPostal
     * @return Principales
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return integer 
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set pais
     *
     * @param string $pais
     * @return Principales
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
     * Set ciudad
     *
     * @param string $ciudad
     * @return Principales
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
     * Set provincia
     *
     * @param string $provincia
     * @return Principales
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set cifEmpresa
     *
     * @param string $cifEmpresa
     * @return Principales
     */
    public function setCifEmpresa($cifEmpresa)
    {
        $this->cifEmpresa = $cifEmpresa;

        return $this;
    }

    /**
     * Get cifEmpresa
     *
     * @return string 
     */
    public function getCifEmpresa()
    {
        return $this->cifEmpresa;
    }

    /**
     * Set nombreResponsable
     *
     * @param string $nombreResponsable
     * @return Principales
     */
    public function setNombreResponsable($nombreResponsable)
    {
        $this->nombreResponsable = $nombreResponsable;

        return $this;
    }

    /**
     * Get nombreResponsable
     *
     * @return string 
     */
    public function getNombreResponsable()
    {
        return $this->nombreResponsable;
    }
}
