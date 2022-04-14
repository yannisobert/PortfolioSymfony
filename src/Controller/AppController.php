<?php

namespace App\Controller;

use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(): Response
    {

        return $this->render('app/index.html.twig', [
        ]);
    }

    #[Route('/portfolio', name: 'portfolio')]
    public function portfolio(ProjectRepository $projectRepository): Response
    {
        $projectRepo = $projectRepository->findAll();

        return $this->render('app/portfolio.html.twig', [
            'projectRepo' => $projectRepo,
        ]);
    }

    #[Route('/show{id}', name: 'show')]
    public function show($id, ProjectRepository $projectRepository): Response
    {
        $project = $projectRepository->find($id);

        return $this->render('app/showproject.html.twig', [
            'project' => $project,
        ]);
    }
}
