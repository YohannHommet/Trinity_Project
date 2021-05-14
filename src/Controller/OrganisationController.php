<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrganisationController extends AbstractController
{
    /**
     * @Route("/organisation", name="app_organisation")
     */
    public function index(): Response
    {
        return $this->render('organisation/index.html.twig', []);
    }
}
