<?php

namespace Argidomin\HotelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Argidomin\HotelBundle\Entity\Usuarios\Usuarios;

class UsuariosLoader extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
	private $container;

	public function setContainer(ContainerInterface $container = null)
	{
		$this->container = $container;
	}

	public function getOrder()
	{
		return 1;
	}

	public function load(ObjectManager $manager)
	{

		for ($i=0; $i < 10; $i++) 
		{ 
			$usuario = new Usuarios();

			$usuario->setUsername('Usuario'. $i);
			$usuario->setEmail('usuario'.$i.'@localhost.lan');
			$usuario->setRoles(array('ROLE_USUARIO'));
			$usuario->setPassword($this->getPassword($usuario));

			$usuario->setNombre($this->getNombre());
			$usuario->setApellidos($this->getApellidos());
			$usuario->setDireccion('Calle falsa 123');
			$usuario->setTelefono('651'.rand(111111,999999));
			$usuario->setCiudad('Vigo');
			$usuario->setPais('España');
			$usuario->setDni(rand(11111111,99999999).'a');

			$usuario->setEnabled(true);

			$manager->persist($usuario);
		}

		$usuario = new Usuarios();

		$usuario->setUsername('Admin');
		$usuario->setEmail('Admin'.'@localhost.lan');
		$usuario->setRoles(array('ROLE_ADMIN'));
		$usuario->setPassword($this->getPassword($usuario));

		$usuario->setNombre($this->getNombre());
		$usuario->setApellidos($this->getApellidos());
		$usuario->setDireccion('Calle falsa 123');
		$usuario->setTelefono('651'.rand(111111,999999));
		$usuario->setCiudad('Vigo');
		$usuario->setPais('España');
		$usuario->setDni(rand(11111111,99999999).'a');

		$usuario->setEnabled(true);

		$manager->persist($usuario);

		$manager->flush();

	}

	public function getPassword($usuario)
	{
		$encoder = $this->container->get('security.encoder_factory')
			->getEncoder($usuario);

		return $encoder->encodePassword($usuario->getUsername(), 
										$usuario->getSalt());
	}

   /**
	* Generador aleatorio de nombres de personas.
	* Aproximadamente genera un 50% de hombres y un 50% de mujeres.
	*
	* @return string Nombre aleatorio generado para el usuario.
	*/
	private function getNombre()
	{
		// Los nombres más populares en España según el INE
		// Fuente: http://www.ine.es/daco/daco42/nombyapel/nombyapel.htm
		$hombres = array(
		'Antonio', 'José', 'Manuel', 'Francisco', 'Juan', 'David',
		'José Antonio', 'José Luis', 'Jesús', 'Javier', 'Francisco Javier',
		'Carlos', 'Daniel', 'Miguel', 'Rafael', 'Pedro', 'José Manuel',
		'Ángel', 'Alejandro', 'Miguel Ángel', 'José María', 'Fernando',
		'Luis', 'Sergio', 'Pablo', 'Jorge', 'Alberto','Gonzalo','Celso','Marcos'
		);
		$mujeres = array(
		'María Carmen', 'María', 'Carmen', 'Josefa', 'Isabel', 'Ana María',
		'María Dolores', 'María Pilar', 'María Teresa', 'Ana', 'Francisca',
		'Laura', 'Antonia', 'Dolores', 'María Angeles', 'Cristina', 'Marta',
		'María José', 'María Isabel', 'Pilar', 'María Luisa', 'Concepción',
		'Lucía', 'Mercedes', 'Manuela', 'Elena', 'Rosa María','Ana Isabel'
		);

		if (rand() % 2) 
		{
			return $hombres[array_rand($hombres)];
		} else {
			return $mujeres[array_rand($mujeres)];
		}
	}
	
	/**
	* Generador aleatorio de apellidos de personas.
	*
	* @return string Apellido aleatorio generado para el usuario.
	*/
	private function getApellidos()
	{
	// Los apellidos más populares en España según el INE
	// Fuente: http://www.ine.es/daco/daco42/nombyapel/nombyapel.htm
		$apellidos = array(
		'García', 'González', 'Rodríguez', 'Fernández', 'López', 'Martínez',
		'Sánchez', 'Pérez', 'Gómez', 'Martín', 'Jiménez', 'Ruiz',
		'Hernández', 'Díaz', 'Moreno', 'Álvarez', 'Muñoz', 'Romero',
		'Alonso', 'Gutiérrez', 'Navarro', 'Torres', 'Domínguez', 'Vázquez',
		'Ramos', 'Gil', 'Ramírez', 'Serrano', 'Blanco', 'Suárez', 'Molina',
		'Morales', 'Ortega', 'Delgado', 'Castro', 'Ortíz', 'Rubio', 'Marín',
		'Sanz', 'Iglesias', 'Nuñez', 'Medina', 'Garrido','Gude','Crespo'
		);
		
		return $apellidos[array_rand($apellidos)].' '.$apellidos[array_rand($apellidos)];
	}
}