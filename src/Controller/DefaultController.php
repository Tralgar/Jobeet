<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
  public function index(Request $request): Response
  {
    return new Response($this->render('home.html.twig', [
      'name' => $request->get('name')
    ]));
  }
}