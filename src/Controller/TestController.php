<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="app_test")
     */
    public function index()
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    public function adminDashboard()
    {
      // add an optional message - seen by developers
      $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Admin tried to access a page without privilege');
    }

    public function userDashboard()
    {
      $this->denyAccessUnlessGranted('ROLE_USER', null, 'User tried to access a page without privilege');
    }
}
