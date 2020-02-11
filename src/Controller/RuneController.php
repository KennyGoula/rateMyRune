<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\RuneRepository;
use App\Form\RuneType;
use App\Entity\Rune;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class RuneController extends AbstractController
{

    /**
     * @var RuneRepository
     */
    public function __construct(RuneRepository $repository)
    {
        $this-> repository = $repository;
    }

    /**
     * @Route("/runes", name="runes")
     * @return Response
     */
    public function index(): Response
    {
        $runes = $this->repository->FindAll();
        return $this->render('runes/index.html.twig', ['runes' => $runes]);
    }


    /**
     * @Route("/new", name="new")
     * @param Rune $rune
     * @return Response
     */
    public function new(): Response
    {
        $form = $this->createForm(RuneType::class);
        return $this->render('runes/new.html.twig', ['form' => $form->createView()]);
    }
}