<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SitePortfolioController extends AbstractController
{
    #[Route('/site', name: 'app_site_portfolio')]
    public function index(): Response
    {
        return $this->render('site_portfolio/index.html.twig', [
            'controller_name' => 'SitePortfolioController',
        ]);
    }

    #[Route('/sp', name: 'savoir_plus')]
    public function sp(): Response
    {
        return $this->render('site_portfolio/savoir_plus.html.twig');
    }

    #[Route('/cv', name: 'Curriculum vitae')]
    public function cv(): Response
    {
        return $this->render('site_portfolio/cv.html.twig');
    }

    #[Route('/pf', name: 'Portfolio')]
    public function pf(): Response
    {
        return $this->render('site_portfolio/portfolio.html.twig');
    }

    #[Route('/ac', name: 'Acceuil')]
    public function ac(): Response
    {
        return $this->render('site_portfolio/index.html.twig');
    }
}
