<?php

namespace GM\ProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use GM\ProjetBundle\Entity\Mission;

use GM\ProjetBundle\Entity\Frais;
use GM\ProjetBundle\Form\FraisType;

use Symfony\Component\HttpFoundation\Request;


class DepenseController extends Controller
{
    public function indexAction()
    {
        return $this->render('GMProjetBundle:Depense:index.html.twig');
    }
//*************************************************************SEMAINE DU 28 MARS   

    
 
//*************************************************************AJOUT FRAIS    
//*************************************************************AJOUT FRAIS
        public function ajoutfraisAction(Request $request)
    {
    $f= new Frais();
    $form = $this->createForm(FraisType::class, $f);
    $form->handleRequest($request);
    $em = $this->getDoctrine()->getManager();
    if($form->isValid() && $form->isValid()){
      $miss= new Mission();
      $miss=$em->getRepository('GMProjetBundle:Mission')->find('1');
      $f->setMission($miss);
//            $em->persist($f);
//            $em->flush();
              //    return $this->redirectToRoute('Succ�s');
            return $this->redirectToRoute('gm_projet_liste');
    }
        return $this->render('GMProjetBundle:Depense:ajout.html.twig', array('f' => $form->createView()));
    }

//*************************************************************AFFICHER FRAIS
        public function listefraisAction()
    {
      $em= $this->getDoctrine()->getEntityManager();
      $lf=$em->getRepository('GMProjetBundle:Frais')->findAll();
//      $missId=$em->getRepository('GMProjetBundle:Mission')->find('')
      return $this->render('GMProjetBundle:Depense:liste.html.twig', array('Frais' => $lf));   
    }


    
}
