<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class IngredientController extends AbstractController
{
    /**
     * @Route("/ingredient", name="ingredient", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('pages/ingredient/index.html.twig',[
            'controller_name'=>'IngredientController',
        ]);
    }
}
