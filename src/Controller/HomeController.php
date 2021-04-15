<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 * @package App\Controller
 * @Route("/", name="app_home_")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("", name="index")
     */
    public function index()
    {
        $tasks = ["First Task", "Second Task", "Third Task"];

        return $this->render('home/index.html.twig', [
            'tasks'     => $tasks
        ]);
    }
}