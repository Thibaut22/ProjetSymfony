<?php

namespace NF\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse; 
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\SecurityContext;
use NF\PlatformBundle\Entity\Activities;
use NF\PlatformBundle\Entity\SousCategories;
use NF\PlatformBundle\Entity\Categories;
use NF\PlatformBundle\Entity\User;
use NF\PlatformBundle\Entity\Excel;
use NF\PlatformBundle\Entity\MontantJour;
use NF\PlatformBundle\Entity\MontantSousCategorie;
use NF\PlatformBundle\Entity\MontantTotalJour;
use NF\PlatformBundle\Entity\MontantSemaine;
use NF\PlatformBundle\Entity\MontantCategorie;
use NF\PlatformBundle\Form\ActivitiesType;
use NF\PlatformBundle\Form\ActivitiesEditType;
use NF\PlatformBundle\Form\ExcelType;
use NF\PlatformBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;



class ActivitiesController extends Controller{
	

	public function indexAction($year,$month,$day,$param,$id,Request $request){
		$em = $this->getDoctrine()->getManager();
		$user=$this->get('security.context')->getToken()->getUser();
		if($id != NULL){
			$user = $em->getRepository('NFPlatformBundle:User')->find($id);
		}
		$today = new \DateTime();
		
		$current = new \DateTime($year."-".$month."-".$day);

		$listSousCats=$em->getRepository('NFPlatformBundle:SousCategories')->findAll();
		$listCats=$em->getRepository('NFPlatformBundle:Categories')->findAll();

		$excel = new Excel();
		$form = $this->createForm(new ExcelType(),$excel);
		if($form->handleRequest($request)->isValid()){
			$this->loadExcelAction($excel,$current,$user,$listSousCats,$listCats);
			$request->getSession()->getFlashBag()->add('notice','Tableau rempli par le fichier.');

		}

		if($param != NULL){
			$current->modify('friday '.$param);
		}
		if($current->format('D')=="Sun"){
			$current->modify('-1 day');
		}
		
		$period = $this->generateWeek($current);
		//Date limite de la semaine 
		foreach ($period as $date) {
			if($date->format('D')=="Mon"){
				$debut = $date;
			}
			if($date->format('D')=="Sun"){
				$fin = $date;
			}
		}
		
		//Récupération des activités
		$activities= $em->getRepository('NFPlatformBundle:Activities')->findBy(array(
			'user'=>$user));

		//Montant par jour
		foreach ($listCats as $categorie) {
			foreach ($period as $date) {
				$montantJourTemp=$em->getRepository('NFPlatformBundle:MontantJour')->findOneBy(array(
					'user'=>$user,
					'date'=>$date,
					'categories'=>$categorie));
				if($montantJourTemp==NULL){
					$montantJour = new MontantJour();
					$montantJour->setUser($user);
					$montantJour->setNumSemaine($current->format('W'));
					$montantJour->setDate($date);
					$montantJour->setCategories($categorie);
				}else{
					$montantJour = $montantJourTemp;
				}
				$montant=0;
				foreach ($listSousCats as $sousCat) {
					if($sousCat->getCategories() == $categorie){
						foreach ($activities as $activite) {
							if($activite->getSousCategories()==$sousCat && $activite->getDate()==$date){
								if($sousCat->getTitle() !='Kilomètre parcourus'){
									$montant+=$activite->getMontant();
								}			
								
							}
						}
					}
					
				}
				$montantJour->setMontant($montant);
				if($montantJourTemp==NULL){
					$em->persist($montantJour);
				}
			}
		}
		//Montant par sous catégorie 
		foreach ($listCats as $categorie) {
			$montantCategorieTemp = $em->getRepository('NFPlatformBundle:MontantCategorie')->findOneBy(array(
					'user'=>$user,
					'numSemaine'=>$current->format('W'),
					'categories'=>$categorie));
			if ($montantCategorieTemp == NULL) {
				$montantCategorie = new MontantCategorie();
				$montantCategorie->setUser($user);
				$montantCategorie->setNumSemaine($current->format('W'));
				$montantCategorie->setAnnee($current->format('Y'));
				$montantCategorie->setCategories($categorie);
				
			}else{
				$montantCategorie = $montantCategorieTemp;
			}

			$montantCat=0;
			foreach ($listSousCats as $sousCat) {
				if($sousCat->getCategories() == $categorie){
				$montantSousCatTemp=$em->getRepository('NFPlatformBundle:MontantSousCategorie')->findOneBy(array(
					'user'=>$user,
					'numSemaine'=>$current->format('W'),
					'sousCategories'=>$sousCat));
				if($montantSousCatTemp == NULL){
					$montantSousCat = new MontantSousCategorie();
					$montantSousCat->setUser($user);
					$montantSousCat->setNumSemaine($current->format('W'));
					$montantSousCat->setAnnee($current->format('Y'));
					$montantSousCat->setSousCategories($sousCat);
				}else{
					$montantSousCat = $montantSousCatTemp;
				}
				
				$montant=0;
				foreach ($period as $date) {
					
						foreach ($activities as $activite) {
							if($activite->getDate()==$date && $activite->getSousCategories()==$sousCat){
								$montant+=$activite->getMontant();
							}
						}
					}

					$montantSousCat->setMontant($montant);
					if($montantSousCatTemp == NULL){
						$em->persist($montantSousCat);
					}
					if($sousCat->getTitle() !='Kilomètre parcourus'){
						$montantCat+=$montant;
					}
					
				}

				$montantCategorie->setMontant($montantCat);
				if($montantCategorieTemp == NULL){
					$em->persist($montantCategorie);
				}
			}
		}


		$em->flush();
		$montantsJour= $em->getRepository('NFPlatformBundle:MontantJour')->findBy(array(
			'user'=>$user,
			'numSemaine'=>$current->format('W')));
		$montantSemaineTemp = $em->getRepository('NFPlatformBundle:MontantSemaine')->findOneby(array(
			'user'=>$user,
			'numSemaine'=>$current->format('W')));

		//Montant semaine et totalJour
		if($montantSemaineTemp == NULL){
			$montantSemaine = new MontantSemaine();
			$montantSemaine->setUser($user);
			$montantSemaine->setNumSemaine($current->format('W'));
			$montantSemaine->setAnnee($current->format('Y'));
		}else{
			$montantSemaine = $montantSemaineTemp;
		}
		$montantS = 0;
		//Montant total des jours
		foreach ($period as $date) {

			$montantTotalJourTemp =$em->getRepository('NFPlatformBundle:MontantTotalJour')->findOneBy(array(
				'user'=>$user,
				'date'=>$date));
			if($montantTotalJourTemp == NULL){
				$montantTotalJour = new MontantTotalJour();
				$montantTotalJour->setUser($user);
				$montantTotalJour->setNumSemaine($current->format('W'));
				$montantTotalJour->setDate($date);
			}else{
				$montantTotalJour = $montantTotalJourTemp;
			}
			$montant=0;
			foreach ($montantsJour as $montantJ) {
				if($montantJ->getDate()== $date){
					foreach ($listCats as $categorie){
						if($categorie == $montantJ->getCategories()){
							$montant += $montantJ->getMontant();
						}
					}
				}
				
			}
			$montantS+= $montant;
			$montantTotalJour->setMontant($montant);		
			if($montantTotalJourTemp == NULL){
				$em->persist($montantTotalJour);
			}
		}
		$montantSemaine->setMontant($montantS);
		if($montantSemaineTemp == NULL){
			$em->persist($montantSemaine);
		}
		$em->flush();

		$montantsTotalJour = $em->getRepository('NFPlatformBundle:MontantTotalJour')->findBy(array(
			'user'=>$user,
			'numSemaine'=>$current->format('W')));

		$montantsSousCat = $em->getRepository('NFPlatformBundle:MontantSousCategorie')->findBy(array(
			'user'=>$user,
			'numSemaine'=>$current->format('W')));

		$montantsCategorie = $em->getRepository('NFPlatformBundle:MontantCategorie')->findBy(array(
			'user'=>$user,
			'numSemaine'=>$current->format('W')));

		return $this->render('NFPlatformBundle:Activities:index.html.twig',array(
			'period'=>$period,
			'current'=>$current,
			'today'=>$today,
			'debut'=>$debut,
			'fin'=>$fin,
			'user'=>$user,
			'activities'=>$activities,
			'listSousCats'=>$listSousCats,
			'listCats'=>$listCats,
			'import'=>$form->createView(),
			'montantsJour'=>$montantsJour,
			'montantsSousCat'=>$montantsSousCat,
			'montantsCategorie'=>$montantsCategorie,
			'montantsTotalJour'=>$montantsTotalJour,
			'montantSemaine'=>$montantSemaine
			));

	}

	public function addAction($id,Request $request){
		$em = $this->getDoctrine()->getManager();
		$user=$this->get('security.context')->getToken()->getUser();
		if($id != NULL){
			$user = $em->getRepository('NFPlatformBundle:User')->find($id);
		}
		$act = new Activities();
		$add = true;
		$form = $this->createForm(new ActivitiesType(),$act);

		if($form->handleRequest($request)->isValid()){
			$em = $this->getDoctrine()->getManager();
			$actTemp = $em->getRepository('NFPlatformBundle:Activities')->findOneBy(array(
			'date'=>$act->getDate(),
			'user'=>$user,
			'sousCategories'=>$act->getSousCategories()));
			if($actTemp == NULL){
				$act->setUser($user);
				$week = $act->getDate()->format('W');
				$act->setNumSemaine($week);
				$em->persist($act);
				$em->flush();
	
				$request->getSession()->getFlashBag()->add('notice','Activité bien enregistrée.');
				return $this->redirect($this->generateUrl('nf_platform_home'));
			}else{
				$request->getSession()->getFlashBag()->add('notice','Activité déjà existante, 
					veuillez utiliser l\'édition ou sélectionner une autre sous catégorie');
			}
		}

		return $this->render('NFPlatformBundle:Activities:add.html.twig',array(
			'form'=>$form->createView(),
			'add'=>$add,
			'user'=>$user));

	}

	public function editAction($id,Request $request){
		$user=$this->get('security.context')->getToken()->getUser();
		$em = $this->getDoctrine()->getManager();
		$act = $em->getRepository('NFPlatformBundle:Activities')->find($id);
		$user = $act->getUser();
		$add=false;
		if (null === $act) {
          throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }

		$form = $this->createForm(new ActivitiesEditType(),$act);

		if($form->handleRequest($request)->isValid()){
			$date=$act->getDate();
			$em->flush();
			$year= $date->format('Y');
			$month= $date->format('m');
			$day= $date->format('d');

			$request->getSession()->getFlashBag()->add('notice','Activité bien modifiée.');
			return $this->redirect($this->generateUrl('nf_platform_home',array(
				'year'=>$year,
				'month'=>$month,
				'day'=>$day
				)));
		}

		return $this->render('NFPlatformBundle:Activities:edit.html.twig',array(
			'form'=>$form->createView(),
			'add'=>$add,
			'user'=>$user,
			'activite'=>$act
			));

	}

	public function deleteAction($id,Request $request){

		$em=$this->getDoctrine()->getManager();
		$act=$em->getRepository('NFPlatformBundle:Activities')->find($id);
		$user = $act->getUser();
		
   		    $em->remove($act);
   		    $em->flush();
   		   
   		    //message flash de confirmation
   		   $request->getSession()->getFlashBag()->add('notice','Activité supprimée.');
      		
   		    return $this->redirect($this->generateUrl('nf_platform_home',array(
   		    	'param'=>'this week',
   		    	'id'=>$user->getId())));
   		
	}

	public function loginAction(Request $request){
		// Si le visiteur est déjà identifié, on le redirige vers l'accueil
   		if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
   		  return $this->redirect($this->generateUrl('nf_platform_accueil'));
   		}

   		$session = $request->getSession();

   		// On vérifie s'il y a des erreurs d'une précédente soumission du formulaire
   		if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
   		  $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
   		} else {
   		  $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
   		  $session->remove(SecurityContext::AUTHENTICATION_ERROR);
   		}

   		return $this->render('NFPlatformBundle:Security:login.html.twig', array(
   		  // Valeur du précédent nom d'utilisateur entré par l'internaute
   		  'last_username' => $session->get(SecurityContext::LAST_USERNAME),
   		  'error'         => $error,
    	));
	}

  	/**
   	* @Security("has_role('ROLE_ADMIN')")
   	*/
	public function addUserAction(Request $request){
		$em = $this->getDoctrine()->getManager();
		$user = new User();

		$form = $this->createForm(new UserType(),$user);
		if($form->handleRequest($request)->isValid()){
			$user->setSalt('');
			if($user->getAdmin() == true ){
				$user->setRoles(array('ROLE_ADMIN'));
			}else{
				$user->setRoles(array('ROLE_USER'));
			}
			$em->persist($user);
      		$em->flush();

      		$request->getSession()->getFlashBag()->add('notice','Utilisateur ajouté.');
      		return $this->redirect($this->generateUrl('nf_platform_all_user'));
		}

      	return $this->render('NFPlatformBundle:Activities:addUser.html.twig',array(
      		'form'=>$form->createView()
      		));

	}
	public function editUserAction($id,Request $request){
		$em = $this->getDoctrine()->getManager();
		$user = $em->getRepository('NFPlatformBundle:User')->find($id);
		$form = $this->createForm(new UserType(),$user);
		
		if($form->handleRequest($request)->isValid()){
			if($user->getAdmin() == true ){
				$user->setRoles(array('ROLE_ADMIN'));
			}else{
				$user->setRoles(array('ROLE_USER'));
			}
			$em->flush();

      		$request->getSession()->getFlashBag()->add('notice','Utilisateur modifié.');
      		if ($this->get('security.context')->isGranted('ROLE_ADMIN')){
      			return $this->redirect($this->generateUrl('nf_platform_all_user'));
      		}else{
      			return $this->redirect($this->generateUrl('nf_platform_home'));
      		}
      		
		}
		return $this->render('NFPlatformBundle:Activities:editUser.html.twig',array(
      		'form'=>$form->createView(),
      		'user'=>$user
      		));

	}

 	/**
   	* @Security("has_role('ROLE_ADMIN')")
   	*/
	public function deleteUserAction($id,Request $request){
		//em a cet endroit
   		$em = $this->getDoctrine()->getManager();
   		$user= $em->getRepository('NFPlatformBundle:User')->find($id);
   		$form = $this->createFormBuilder()->getForm();
   
   		if($form->handleRequest($request)->isValid()){
   		    $em->remove($user);
   		    $em->flush();
   		    //message flash de confirmation
   		   $request->getSession()->getFlashBag()->add('notice','Utilisateur supprimé.');
   		    return $this->redirect($this->generateUrl('nf_platform_all_user'));
   		}
   
   		return $this->render('NFPlatformBundle:Activities:deleteUser.html.twig',array(
   		    'user'=>$user,
   		    'form'=>$form->createView()
   		    ));
	}

  	/**
  	 * @Security("has_role('ROLE_ADMIN')")
  	 */
	public function allUserAction(Request $request){
		$user=$this->get('security.context')->getToken()->getUser();
		$em = $this->getDoctrine()->getManager();


		$users = $em->getRepository('NFPlatformBundle:User')->findAll();

		return $this->render('NFPlatformBundle:Activities:viewAllUser.html.twig',array(
			'users'=>$users
			));
	}

 	/**
 	 * @Security("has_role('ROLE_ADMIN')")
 	 */
	public function comparaisonAction($week,Request $request){
		$today = new \DateTime();
		if($week == NULL){

			$week = $today->format('W');
		}
		$em = $this->getDoctrine()->getManager();
		$users = $em->getRepository('NFPlatformBundle:User')->findAll();
		$listSousCats=$em->getRepository('NFPlatformBundle:SousCategories')->findAll();
		$listCats=$em->getRepository('NFPlatformBundle:Categories')->findAll();
		$montantsCategorie=$em->getRepository('NFPlatformBundle:MontantCategorie')->findBy(array(
			'numSemaine'=>$week));
		$montantsSousCat = $em->getRepository('NFPlatformBundle:MontantSousCategorie')->findBy(array(
			'numSemaine'=>$week));
		$montantsSemaine = $em->getRepository('NFPlatformBundle:MontantSemaine')->findBy(array(
			'numSemaine'=>$week));

		return $this->render('NFPlatformBundle:Activities:comparaison.html.twig',array(
			'users'=>$users,
			'listCats'=>$listCats,
			'listSousCats'=>$listSousCats,
			'montantsCategorie'=>$montantsCategorie,
			'montantsSousCat'=>$montantsSousCat,
			'montantsSemaine'=>$montantsSemaine,
			'week'=>$week
			));
	}

	public function downloadExcelAction($id){
		$em = $this->getDoctrine()->getManager();
		$user=$this->get('security.context')->getToken()->getUser();
		if($id != NULL){
			$user = $em->getRepository('NFPlatformBundle:User')->find($id);
		}
		$workbook =$this->generateExcel($user);
		
		$datetime = new \DateTime();
		$writer = new \PHPExcel_Writer_Excel2007($workbook);
		//Nom du fichier
		$fichier = 'Notes_de_frais_'.$user->getLastname().
		'_semaine_'.$datetime->format('W').'.xlsx';
		$records = $this->getUploadRootDir().'/'.$fichier;
		// Sauvegarde du de l'excel dans le fichier 
		$writer->save($records);
		//Telechargement
		$response = new Response();
      	$response->setContent(file_get_contents($records));
      	$response->headers->set('Content-disposition', 'filename=' . $fichier);
      	$response->headers->set(
           'Content-Type',
           'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
       	); 
       	
 		
 		$response->send();
       return $response;
	
	}

	public function loadExcelAction($excel,$current,$user,$listSousCats,$listCats){
		$em = $this->getDoctrine()->getManager();
		$excel->setNumSemaine($current->format('W'));
		$excel->setUser($user);
		$em->persist($excel);
		$em->flush();
		// Lecteur pour excel
		$objet = new \PHPExcel_Reader_Excel2007();
		// Le Excel importé
		$excelImporte = $objet->load($excel->getWebPath());
		$sheet = $excelImporte->getActiveSheet();
		$dateJ=substr($sheet->getCell('G6')->getValue(), 0,-8);
		$dateM=substr($sheet->getCell('G6')->getValue(), 3,-5);
		$dateY=substr($sheet->getCell('G6')->getValue(), 6);
		$dateNote = new \DateTime($dateJ."-".$dateM."-".$dateY);

		$period=$this->generateWeek($current);
		$i=10;
		foreach ($listCats as $categorie) {
			foreach ($listSousCats as $sousCat){
				if ($categorie==$sousCat->getCategories()){
					$i++;
					foreach ($period as $date){
						switch ($date->format('D')) {
							case 'Mon':
								if($sheet->getCell('B'.$i)->getValue() != 0){
									$presentAct = $em
											->getRepository('NFPlatformBundle:Activities')
											->findOneBy(array(
												'date'=>$date,
												'numSemaine'=>$date->format('W'),
												'user'=>$user,
												'sousCategories'=>$sousCat));
									if($presentAct == NULL){
										$tempAct = new Activities();
										$tempAct->setDate($date);
										$tempAct->setNumSemaine($date->format('W'));
										$tempAct->setMontant($sheet->getCell('B'.$i)->getValue());
										$tempAct->setComent('B'.$i);
										$tempAct->setSousCategories($sousCat);
										$tempAct->setUser($user);
										$em->persist($tempAct);
										
									}else{
										$presentAct->setMontant($sheet->getCell('B'.$i)->getValue());
										
									}
								}
								break;
							case 'Tue':
								if($sheet->getCell('C'.$i)->getValue() != 0){
									$presentAct = $em
											->getRepository('NFPlatformBundle:Activities')
											->findOneBy(array(
												'date'=>$date,
												'numSemaine'=>$date->format('W'),
												'user'=>$user,
												'sousCategories'=>$sousCat));
									if($presentAct == NULL){
										$tempAct = new Activities();
										$tempAct->setDate($date);
										$tempAct->setNumSemaine($date->format('W'));
										$tempAct->setMontant($sheet->getCell('C'.$i)->getValue());
										$tempAct->setComent('C'.$i);
										$tempAct->setSousCategories($sousCat);
										$tempAct->setUser($user);
										$em->persist($tempAct);
										
									}else{
										$presentAct->setMontant($sheet->getCell('C'.$i)->getValue());
										
									}
								}
								break;
							case 'Wed':
								if($sheet->getCell('D'.$i)->getValue() != 0){
									$presentAct = $em
											->getRepository('NFPlatformBundle:Activities')
											->findOneBy(array(
												'date'=>$date,
												'numSemaine'=>$date->format('W'),
												'user'=>$user,
												'sousCategories'=>$sousCat));
									if($presentAct == NULL){
										$tempAct = new Activities();
										$tempAct->setDate($date);
										$tempAct->setNumSemaine($date->format('W'));
										$tempAct->setMontant($sheet->getCell('D'.$i)->getValue());
										$tempAct->setComent('D'.$i);
										$tempAct->setSousCategories($sousCat);
										$tempAct->setUser($user);
										$em->persist($tempAct);
										
									}else{
										$presentAct->setMontant($sheet->getCell('D'.$i)->getValue());
										
									}
								}
								break;
							case 'Thu':
								if($sheet->getCell('E'.$i)->getValue() != 0){
									$presentAct = $em
											->getRepository('NFPlatformBundle:Activities')
											->findOneBy(array(
												'date'=>$date,
												'numSemaine'=>$date->format('W'),
												'user'=>$user,
												'sousCategories'=>$sousCat));
									if($presentAct == NULL){
										$tempAct = new Activities();
										$tempAct->setDate($date);
										$tempAct->setNumSemaine($date->format('W'));
										$tempAct->setMontant($sheet->getCell('E'.$i)->getValue());
										$tempAct->setComent('E'.$i);
										$tempAct->setSousCategories($sousCat);
										$tempAct->setUser($user);
										$em->persist($tempAct);
										
									}else{
										$presentAct->setMontant($sheet->getCell('E'.$i)->getValue());
										
									}
								}
								break;
							case 'Fri':
								if($sheet->getCell('F'.$i)->getValue() != 0){
									$presentAct = $em
											->getRepository('NFPlatformBundle:Activities')
											->findOneBy(array(
												'date'=>$date,
												'numSemaine'=>$date->format('W'),
												'user'=>$user,
												'sousCategories'=>$sousCat));
									if($presentAct == NULL){
										$tempAct = new Activities();
										$tempAct->setDate($date);
										$tempAct->setNumSemaine($date->format('W'));
										$tempAct->setMontant($sheet->getCell('F'.$i)->getValue());
										$tempAct->setComent('F'.$i);
										$tempAct->setSousCategories($sousCat);
										$tempAct->setUser($user);
										$em->persist($tempAct);
										
									}else{
										$presentAct->setMontant($sheet->getCell('F'.$i)->getValue());
										
									}
								}
								break;
							case 'Sat':
								if($sheet->getCell('G'.$i)->getValue() != 0){
									$presentAct = $em
											->getRepository('NFPlatformBundle:Activities')
											->findOneBy(array(
												'date'=>$date,
												'numSemaine'=>$date->format('W'),
												'user'=>$user,
												'sousCategories'=>$sousCat));
									if($presentAct == NULL){
										$tempAct = new Activities();
										$tempAct->setDate($date);
										$tempAct->setNumSemaine($date->format('W'));
										$tempAct->setMontant($sheet->getCell('G'.$i)->getValue());
										$tempAct->setComent('G'.$i);
										$tempAct->setSousCategories($sousCat);
										$tempAct->setUser($user);
										$em->persist($tempAct);
										
									}else{
										$presentAct->setMontant($sheet->getCell('G'.$i)->getValue());
										
									}
								}
								break;
							case 'Sun':
								if($sheet->getCell('H'.$i)->getValue() != 0){
									$presentAct = $em
											->getRepository('NFPlatformBundle:Activities')
											->findOneBy(array(
												'date'=>$date,
												'numSemaine'=>$date->format('W'),
												'user'=>$user,
												'sousCategories'=>$sousCat));
									if($presentAct == NULL){
										$tempAct = new Activities();
										$tempAct->setDate($date);
										$tempAct->setNumSemaine($date->format('W'));
										$tempAct->setMontant($sheet->getCell('H'.$i)->getValue());
										$tempAct->setComent('H'.$i);
										$tempAct->setSousCategories($sousCat);
										$tempAct->setUser($user);
										$em->persist($tempAct);
										
									}else{
										$presentAct->setMontant($sheet->getCell('H'.$i)->getValue());
										
									}
								}
								break;
							
							default:
								# code...
								break;
						}
					}
				}
			}
			$i=$i+3;
		}
		$em->flush();

	}

	public function getUploadDir(){
        // On retourne le chemin relatif vers l'image pour un navigateur (relatif au repartoire)
        return 'uploads/excel';
    }

    protected function getUploadRootDir(){

        // On retourne le chemin relatif vers l'image pour notre code PHP
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    public function generateExcel($user){
		//Date
		$datetime = new \DateTime();
		$period = $this->generateWeek($datetime);
		$lastSunday = clone $datetime;
		if(!$lastSunday->format('D')=='Sun'){
			$lastSunday->modify('next sunday');
		}
		
		
		//Excel 
		$workbook = new \PHPExcel();
		$sheet = $workbook->getActiveSheet();
		$styleA1= $sheet->getStyle('A1');
		$styleFont=$styleA1->getFont();
		$styleFont->setSize(28);

		//En-tete
		$sheet->setCellValue('A1','Note de frais');
		$sheet->setCellValue('A4','Employé :');
		$sheet->setCellValue('B4',$user->getLastname()." ".$user->getFirstname());
		$sheet->setCellValue('A6','Fin de la semaine :');
		$sheet->setCellValue('B6',$lastSunday->format('d/m/Y'));
		$sheet->setCellValue('F6','Date :');
		$sheet->setCellValue('G6',$datetime->format('d/m/Y'));
		$sheet->setCellValue('F7','Semaine :');
		$sheet->setCellValue('G7',$datetime->format('W'));

		$sheet->getColumnDimension('A')->setWidth(30);
		$sheet->getColumnDimension('B')->setWidth(16);
		$sheet->getColumnDimension('C')->setWidth(16);
		$sheet->getColumnDimension('D')->setWidth(16);
		$sheet->getColumnDimension('E')->setWidth(16);
		$sheet->getColumnDimension('F')->setWidth(16);
		$sheet->getColumnDimension('G')->setWidth(16);
		$sheet->getColumnDimension('H')->setWidth(16);
		$sheet->getColumnDimension('I')->setWidth(16);
		$styleArray = array(
			'borders' => array(
				'allborders' => array(
					'style' => \PHPExcel_Style_Border::BORDER_THIN ,
					'color' => array('argb' => '000'),
					),
				),
			);
		//Variable temporaire
		$tempLun;
		$tempMar;
		$tempMer;
		$tempJeu;
		$tempVen;
		$tempSam;
		$tempDim;

		
		$i=9;
		foreach ($period as $date) {
			switch ($date->format('D')) {
				case 'Mon':
					$tempLun=$date->format('d/m/Y');
					$sheet->setCellValue('B'.$i,'Lun '.$tempLun);
					break;
				case 'Tue':
					$tempMar=$date->format('d/m/Y');
					$sheet->setCellValue('C'.$i,'Mar '.$tempMar);
					break;
				case 'Wed':
					$tempMer=$date->format('d/m/Y');
					$sheet->setCellValue('D'.$i,'Mer '.$tempMer);
					break;
				case 'Thu':
					$tempJeu=$date->format('d/m/Y');
					$sheet->setCellValue('E'.$i,'Jeu '.$tempJeu);
					break;
				case 'Fri':
					$tempVen=$date->format('d/m/Y');
					$sheet->setCellValue('F'.$i,'Ven '.$tempVen);
					break;
				case 'Sat':
					$tempSam=$date->format('d/m/Y');
					$sheet->setCellValue('G'.$i,'Sam '.$tempSam);
					break;
				case 'Sun':
					$tempDim=$date->format('d/m/Y');
					$sheet->setCellValue('H'.$i,'Dim '.$tempDim);
					break;
			}

		}	
		$sheet->setCellValue('I'.$i,'Totaux');
		
		
		//information en base
		$em = $this->getDoctrine()->getManager();
		$activities= $em->getRepository('NFPlatformBundle:Activities')->findBy(array(
			'user'=>$user));
		$listSousCats=$em->getRepository('NFPlatformBundle:SousCategories')->findAll();
		$listCats=$em->getRepository('NFPlatformBundle:Categories')->findAll();
		$i++;
		foreach ($listCats as $categorie ) {
			$style = $sheet->getStyle('A'.$i);
			$styleCat=$styleA1->getFont();
			$styleFont->setSize(13);
			$sheet->setCellValue('A'.$i,$categorie->getTitle());
			foreach ($listSousCats as $sousCat) {
				if ($categorie==$sousCat->getCategories()) {
					$i++;
					$sheet->setCellValue('A'.$i,$sousCat->getTitle());

					foreach ($activities as $activite) {
						if ($sousCat == $activite->getSousCategories()) {
							
						switch ($activite->getDate()->format('d/m/Y')) {
							case $tempLun:
								$sheet->setCellValue('B'.$i,$activite->getMontant());
								break;
							case $tempMar:
								$sheet->setCellValue('C'.$i,$activite->getMontant());
								break;
							case $tempMer:
								$sheet->setCellValue('D'.$i,$activite->getMontant());
								break;
							case $tempJeu:
								$sheet->setCellValue('E'.$i,$activite->getMontant());
								break;
							case $tempVen:
								$sheet->setCellValue('F'.$i,$activite->getMontant());
								break;
							case $tempSam:
								$sheet->setCellValue('G'.$i,$activite->getMontant());
								break;
							case $tempDim:
								$sheet->setCellValue('H'.$i,$activite->getMontant());
								break;
							
							default:
								# code...
								break;
							}
						}

					}
					$montantSousCat = $em->getRepository('NFPlatformBundle:MontantSousCategorie')->findOneBy(array(
					'user'=>$user,
					'numSemaine'=>$datetime->format('W'),
					'sousCategories'=>$sousCat));
					$sheet->setCellValue('I'.$i,$montantSousCat->getMontant());
				}

			}	
			$i++;
			$sheet->setCellValue('A'.$i,'Total');
			foreach ($period as $date) {
				$montantJour = $em->getRepository('NFPlatformBundle:MontantJour')->findOneBy(array(
					'user'=>$user,
					'date'=>$date,
					'categories'=>$categorie));
				if(!$montantJour == NULL){
				switch ($date->format('D')) {
					case 'Mon':
						$tempLun=$date->format('d/m/Y');
						$sheet->setCellValue('B'.$i,$montantJour->getMontant());
						break;
					case 'Tue':
						$tempMar=$date->format('d/m/Y');
						$sheet->setCellValue('C'.$i,$montantJour->getMontant());
						break;
					case 'Wed':
						$tempMer=$date->format('d/m/Y');
						$sheet->setCellValue('D'.$i,$montantJour->getMontant());
						break;
					case 'Thu':
						$tempJeu=$date->format('d/m/Y');
						$sheet->setCellValue('E'.$i,$montantJour->getMontant());
						break;
					case 'Fri':
						$tempVen=$date->format('d/m/Y');
						$sheet->setCellValue('F'.$i,$montantJour->getMontant());
						break;
					case 'Sat':
						$tempSam=$date->format('d/m/Y');
						$sheet->setCellValue('G'.$i,$montantJour->getMontant());
						break;
					case 'Sun':
						$tempDim=$date->format('d/m/Y');
						$sheet->setCellValue('H'.$i,$montantJour->getMontant());
						break;
					
					default:
						# code...
						break;
				}}

		}
			$montantCategorie =$em->getRepository('NFPlatformBundle:MontantCategorie')->findOneBy(array(
				'user'=>$user,
				'numSemaine'=>$datetime->format('W'),
				'categories'=>$categorie));
				$sheet->setCellValue('I'.$i,$montantCategorie->getMontant());

			$i=$i+2;
		}
		$sheet->setCellValue('A'.$i,'Total');
		foreach ($period as $date) {
				$montantTotalJour = $em->getRepository('NFPlatformBundle:MontantTotalJour')->findOneBy(array(
					'user'=>$user,
					'date'=>$date
					));
				if(!$montantTotalJour == NULL){
				switch ($date->format('D')) {
					case 'Mon':
						$tempLun=$date->format('d/m/Y');
						$sheet->setCellValue('B'.$i,$montantTotalJour->getMontant());
						break;
					case 'Tue':
						$tempMar=$date->format('d/m/Y');
						$sheet->setCellValue('C'.$i,$montantTotalJour->getMontant());
						break;
					case 'Wed':
						$tempMer=$date->format('d/m/Y');
						$sheet->setCellValue('D'.$i,$montantTotalJour->getMontant());
						break;
					case 'Thu':
						$tempJeu=$date->format('d/m/Y');
						$sheet->setCellValue('E'.$i,$montantTotalJour->getMontant());
						break;
					case 'Fri':
						$tempVen=$date->format('d/m/Y');
						$sheet->setCellValue('F'.$i,$montantTotalJour->getMontant());
						break;
					case 'Sat':
						$tempSam=$date->format('d/m/Y');
						$sheet->setCellValue('G'.$i,$montantTotalJour->getMontant());
						break;
					case 'Sun':
						$tempDim=$date->format('d/m/Y');
						$sheet->setCellValue('H'.$i,$montantTotalJour->getMontant());
						break;
					
					default:
						# code...
						break;
				}
			}
		}
		$montantCategorie =$em->getRepository('NFPlatformBundle:MontantSemaine')->findOneBy(array(
				'user'=>$user,
				'numSemaine'=>$datetime->format('W')));
				$sheet->setCellValue('I'.$i,$montantCategorie->getMontant());



		$sheet->getStyle('A10:I18')->applyFromArray($styleArray);
		$sheet->getStyle('A20:I27')->applyFromArray($styleArray);
		$sheet->getStyle('A29:I35')->applyFromArray($styleArray);
		$sheet->getStyle('A37:I37')->applyFromArray($styleArray);

		/*for ($i=11; $i < 38; $i++) { 
			$sheet->setCellValue('I'.$i,'=SUM(B'.$i.':H'.$i.')');
		}*/

    	return $workbook;
    }

    public function generateWeek($current){
    	$now = clone $current;
		if($now->format('D')=="Mon"){
			$now->modify('+1 day');
		}
		
		$begin = clone $now;
		$begin->modify('last monday');
		$interval = new \DateInterval('P1D');
		$end = clone $begin;
		$end->modify('next monday');
		$period = new \DatePeriod($begin, $interval, $end);

		return $period;
    }
}


?>