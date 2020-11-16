<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\CommentRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/page", name="page")
     */
    public function index(CommentRepository $commentRepository): Response
    {
        return $this->render('page/index.html.twig', [
            'comments' => $commentRepository->findAll(),
        ]);
    }
}
