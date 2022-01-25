<?php
// src/Controller/PersonalResourceController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SecurityController extends AbstractController

{
    /**
     * @Route("/login")
     */
    public function login(): Response
    {
        

        return $this->render('login.html.twig');
    }
}