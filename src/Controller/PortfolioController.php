<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PortfolioController extends AbstractController{
    #[Route('/portfolio', name: 'app_portfolio')]
    public function index(): Response
    {
        return $this->render('portfolio/index.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    #[Route('/passion', name: 'app_passion')]
    public function passion(): Response
    {
        return $this->render('portfolio/passion.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('portfolio/cv.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    #[Route('/formulaire', name: 'app_formulaire')]
    public function formulaire(): Response
    {
        return $this->render('portfolio/formulaire.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    #[Route('/eportfolio', name: 'app_eportfolio')]
    public function eportfolio(): Response
    {
        return $this->render('portfolio/eportfolio.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    #[Route('/premier', name: 'app_premier')]
    public function premier(): Response
    {
        return $this->render('portfolio/premier.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    #[Route('/deuxieme', name: 'app_deuxieme')]
    public function deuxieme(): Response
    {
        return $this->render('portfolio/deuxieme.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    #[Route('/troisieme', name: 'app_troisieme')]
    public function troisieme(): Response
    {
        return $this->render('portfolio/troisieme.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    #[Route('/quatrieme', name: 'app_quatrieme')]
    public function quatrieme(): Response
    {
        return $this->render('portfolio/quatrieme.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    #[Route('/cinquieme', name: 'app_cinquieme')]
    public function cinquieme(): Response
    {
        return $this->render('portfolio/cinquieme.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    #[Route('/sizieme', name: 'app_sizieme')]
    public function sizieme(): Response
    {
        return $this->render('portfolio/sizieme.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
    #[Route('/cyber', name: 'app_cyber')]
    public function cyber(): Response
    {
        return $this->render('portfolio/cyber.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
}
