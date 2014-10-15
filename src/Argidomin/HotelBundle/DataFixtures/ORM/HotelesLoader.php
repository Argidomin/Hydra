<?php

namespace Argidomin\HotelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Argidomin\HotelBundle\Entity\Hotel\Hoteles;

class HotelesLoader extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
	private $container;

	public function setContainer(ContainerInterface $container = null)
	{
		$this->container = $container;
	}

	public function getOrder()
	{
		return 3;
	}

	public function load(ObjectManager $manager)
	{

		for ($i=1; $i <= 1; $i++) 
		{ 
			$hotel = new Hoteles();

			//Campos Base
			$hotel->setTitulo('Hotel '. $i);
			$hotel->setCuerpo('Descripción de principal '. $i . self::random_lipsum('1'));

			//Campos Principal
			$hotel->setDireccion('calle falsa 123');
			$hotel->setEmailContacto('hotel-'. $i . '@localhost.dev');
			$hotel->setTelefono('651'.rand(111111,999999));
			$hotel->setFax('651'.rand(111111,999999));
			$hotel->setCodigoPostal('36' . rand(111,999));
			$hotel->setPais('España');
			$hotel->setProvincia('Pontevedra');
			$hotel->setCiudad('Vigo');
			$hotel->setNombreResponsable('Paquito el Chocolatero');
			$hotel->setCifEmpresa(rand(1111,9999));
			

			//Campos propias del Hotel
			$hotel->setEmailReservas('reservas.hotel-'. $i . '@localhost.dev');
			$hotel->setNumeroEstrellas(rand(1,5));
			$hotel->setNumeroHabitaciones(rand(1,100));

			$manager->persist($hotel);


		}

		$manager->flush();


	}

	public static function random_lipsum($amount = 1, $what = 'paras', $start = 0)
	{
		return simplexml_load_file("http://www.lipsum.com/feed/xml?amount=$amount&what=$what&start=$start")->lipsum;
	}


}