<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController
{

    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return new Response("Hello Boys !");
    }

    public function show()
    {
        return new Response("Hello Girls !");
    }

}