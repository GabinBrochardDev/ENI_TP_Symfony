<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function home(): Response
    {
        return $this->render('main/index.html.twig', [
            'title' => 'ENI CDA - Home page',
        ]);
    }

    #[Route('/about-us', name: 'about_us')]
    public function aboutUs(): Response
    {
        // Get datas
        $data = file_get_contents('../data/team.json');
        $team = json_decode($data);

        return $this->render('main/about_us.html.twig', [
            'title' => 'About Us',
            'team' => $team
        ]);
    }
}
