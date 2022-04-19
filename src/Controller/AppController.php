<?php

namespace App\Controller;

use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ProjectRepository $projectRepository): Response
    {
        $projectRepo = $projectRepository->findAll();

        return $this->render('app/index.html.twig', [
            'projectRepo' => $projectRepo,
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

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {

        return $this->render('app/contact.html.twig', [
        ]);
    }
}
