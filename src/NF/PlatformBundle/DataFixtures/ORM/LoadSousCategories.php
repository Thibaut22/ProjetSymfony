<?php

namespace NF\PlatFormBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use NF\PlatformBundle\Entity\SousCategories;
use NF\PlatformBundle\Entity\Categories;

class LoadSousCategories implements FixtureInterface
{
	//Dans l'argument de la méthode load, l'objet$ $ manager est l'EntityManager
	public function load(ObjectManager $manager){

		//Liste des noms de catégories à ajouter
		$transports = array(
			'Kilomètre parcourus',
			'Remboursement des kilomètre',
			'Parking et péages',
			'Location de voiture',
			'Taxi/limousine',
			'Autre (train ou bus)',
			'Billets d\'avion'

		);

		$hebergements= array(
			'Hébergement',
			'Petit-déjeuner',
			'Déjeuner',
			'Dîner',
			'Collation',
			'Sous-total des repas'

		);
		$divers= array(
			'Fournitures',
			'Equipement',
			'Téléphone, télécopie, internet',
			'Autres',
			'Divertissements'
		);


		foreach ($transports as $transport){
			$categories = $manager->getRepository('NFPlatformBundle:Categories')->findOneBy(array('title' =>'Transport'));
			//On crée la catégorie
			$categoriesT = new SousCategories();
			$categoriesT->setTitle($transport);
			$categoriesT->setCategories($categories);

			//On la persiste
			$manager->persist($categoriesT);
		}


		foreach ($hebergements as $hebergement){
			$categories = $manager->getRepository('NFPlatformBundle:Categories')->findOneBy(array('title' =>'Hébergement et repas'));
			//On crée la catégorie
			$categoriesH = new SousCategories();
			$categoriesH->setTitle($hebergement);
			$categoriesH->setCategories($categories);

			//On la persiste
			$manager->persist($categoriesH);
		}

		foreach ($divers as $diver){
			$categories = $manager->getRepository('NFPlatformBundle:Categories')->findOneBy(array('title' =>'Divers'));
			//On crée la catégorie
			$categoriesD = new SousCategories();
			$categoriesD->setTitle($diver);
			$categoriesD->setCategories($categories);

			//On la persiste
			$manager->persist($categoriesD);
		}

		//On déclenche l'enregistrement de toutes les catégories
		$manager->flush();
	}
}