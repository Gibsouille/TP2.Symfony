<?php

namespace Esi\InscriptionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InscriptionsController extends Controller
{
    public function indexAction()
    {
        return $this->render('EsiInscriptionsBundle:Inscriptions:index.html.twig');
    }
    
    public function voirAction($id)
    {
        return $this->render('EsiInscriptionsBundle:Inscriptions:voir.html.twig', array('id' => $id));
    }
    
    public function ajouterAction()
    {
        return $this->render('EsiInscriptionsBundle:Inscriptions:ajouter.html.twig');
    }
    
    public function supprimerAction($id)
    {
        return $this->render('EsiInscriptionsBundle:Inscriptions:supprimer.html.twig', array('id' => $id));
    }
}
