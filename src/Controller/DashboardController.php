<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index()
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
    public function adminDashboard()
    {
      // add an optional message - seen by developers
      $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Admin tried to access a page without privilege');
    }
}
