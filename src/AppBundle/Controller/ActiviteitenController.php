<?php
// src/AppBundle/Controller/ActiviteitenController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActiviteitenController extends Controller
{
    /**
     * @Route("/activiteiten")
     */
    public function showactiviteitenAction()
    {
        return $this->render('activiteiten.html.twig');
    }
}