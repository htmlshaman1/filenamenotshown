<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\UploadType;


class IndexControlerController extends AbstractController
{
    #[Route('/', name: 'index')]
     /**
     * @Route("/", name="upload")
     */
    public function index(): Response
    {
        $form = $this->createForm(UploadType::class);
        if ($form->isSubmitted() && $form->isValid()) {
          return new Response('something happened');
        }
        return $this->render('index.html.twig', ['form' => $form->createView()]);
    }
}
