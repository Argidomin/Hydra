<?php

namespace Argidomin\HotelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Argidomin\HotelBundle\Entity\Hotel\Hoteles;
use Argidomin\HotelBundle\Entity\Hotel\CaracteristicasHotel;

class HotelesCaracteristicasLoader extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
	private $container;

	public function setContainer(ContainerInterface $container = null)
	{
		$this->container = $container;
	}

	public function getOrder()
	{
		return 4;
	}

	public function load(ObjectManager $manager)
	{


			for ($i=1; $i <= 10 ; $i++) 
			{ 
				$caracteristicasHotel = new CaracteristicasHotel();

				$caracteristicasHotel->setTitulo('Caracteristica ' . $i);
				$caracteristicasHotel->setCuerpo('Descripción de la caracteristica '. $i . self::random_lipsum('1'));		

				$manager->persist($caracteristicasHotel);
			}



		$manager->flush();


	}

	public static function random_lipsum($amount = 1, $what = 'paras', $start = 0)
	{
		return simplexml_load_file("http://www.lipsum.com/feed/xml?amount=$amount&what=$what&start=$start")->lipsum;
	}


}