<?php

namespace App\Controller;

use App\Entity\Inscriptions;
use App\Form\InscriptionsType;
use App\Repository\InscriptionsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="app_inscription", methods={"GET|POST"})
     *
     * @param Request $request
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $inscriptions = new Inscriptions();
        
        $form = $this->createForm(InscriptionsType::class, $inscriptions);
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            $em->persist($inscriptions);
            $em->flush();

            $this->addFlash('info', 'Merci de ton inscription');
            return $this->redirect("/inscription");
        }


        return $this->render('inscription/index.html.twig', [
            'inscription' => $inscriptions,
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/listing", name="app_listing", methods={"GET"})
     * @param InscriptionsRepository $inscriptionsRepository
     * @return Response
     */
    public function listing(InscriptionsRepository $inscriptionsRepository): Response
    {
        $list = $inscriptionsRepository->findAll();

        return $this->render('inscription/listing.html.twig', [
            'list' => $list
        ]);
    }


}
