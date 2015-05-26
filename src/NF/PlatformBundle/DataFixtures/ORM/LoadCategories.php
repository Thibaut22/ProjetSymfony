<?php

namespace NF\PlatFormBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use NF\PlatformBundle\Entity\Categories;

class LoadCategories implements FixtureInterface
{
	//Dans l'argument de la méthode load, l'objet$ $ manager est l'EntityManager
	public function load(ObjectManager $manager){

		//Liste des noms de catégories à ajouter
		$titles = array(
			'Transport',
			'Hébergement et repas',
			'Divers',
		);

		foreach ($titles as $title){
			//On crée la catégorie
			$categories = new Categories();
			$categories->setTitle($title);

			//On la persiste
			$manager->persist($categories);
		}

		//On déclenche l'enregistrement de toutes les catégories
		$manager->flush();
	}
}