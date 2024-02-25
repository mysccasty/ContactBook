<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(UrlGeneratorInterface $urlGenerator): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $url = $urlGenerator->generate('app_contact_index');
        return $this->redirectToRoute('app_contact_index');
    }
}
