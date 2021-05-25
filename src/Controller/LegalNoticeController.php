<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LegalNoticeController extends AbstractController
{
    /**
     * @Route("/mentions-legales", name="app_legal_notice")
     */
    public function mention(): Response
    {
        return $this->render('legal_notice/legal_notices.html.twig', []);
    }


    /**
     * @Route("/rgpd", name="app_rgpd")
     */
    public function rgpd(): Response
    {
        return $this->render('legal_notice/rgpd.html.twig', []);
    }
}
