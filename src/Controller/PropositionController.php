<?php

namespace App\Controller;

use App\Entity\Propositions;
use App\Form\PropositionsType;
use App\Repository\PropositionsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropositionController extends AbstractController
{
    /**
     * @Route("/propositions", name="app_propositions")
     *
     * @param Request $request
     * @param EntityManagerInterface $em
     * @param PropositionsRepository $propositionsRepository
     *
     * @return Response
     */
    public function index(Request $request, EntityManagerInterface $em, PropositionsRepository $propositionsRepository): Response
    {

        $proposition = new Propositions();

        $form = $this->createForm(PropositionsType::class, $proposition);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em->persist($proposition);
            $em->flush();

            $this->addFlash('success', 'Proposition ajoutée !');
            return $this->redirect('/propositions');
        }

        $propositions = $propositionsRepository->findBy([], ['date' => 'ASC']);

        return $this->render('proposition/index.html.twig', [
            'formProposition' => $form->createView(),
            'propositionList' => $propositions
        ]);
    }
}
