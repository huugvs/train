<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/home.html.twig', [
            'accesibleRoutes' => array('Hoofdpagina','Activiteiten','Team','Inschrijven','Contact')
        ]);
    }

    /**
     * @Route("/Hoofdpagina", name="hoofdpagina")
     */
    public function hoofdpaginaAction(Request $request)
    {
        return $this->render('default/home.html.twig', [
            'accesibleRoutes' => array('Hoofdpagina','Activiteiten','Team','Inschrijven','Contact')
        ]);
    }

    /**
     * @Route("/Activiteiten", name="activiteiten")
     */
    public function activiteitenAction(Request $request)
    {
        return $this->render('default/activiteiten.html.twig', [
            'accesibleRoutes' => array('Hoofdpagina','Activiteiten','Team','Inschrijven','Contact')
        ]);
    }

    /**
     * @Route("/Team", name="team")
     */
    public function teamAction(Request $request)
    {
        return $this->render('default/team.html.twig', [
            'accesibleRoutes' => array('Hoofdpagina','Activiteiten','Team','Inschrijven','Contact')
        ]);
    }

    /**
     * @Route("/Inschrijven", name="inschrijven")
     */
    public function inschrijvenAction(Request $request)
    {
        return $this->render('default/inschrijven.html.twig', [
            'accesibleRoutes' => array('Hoofdpagina','Activiteiten','Team','Inschrijven','Contact')
        ]);
    }

    /**
     * @Route("/Contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        return $this->render('default/contact.html.twig', [
            'accesibleRoutes' => array('Hoofdpagina','Activiteiten','Team','Inschrijven','Contact')
        ]);
    }
}
