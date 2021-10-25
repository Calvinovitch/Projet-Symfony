<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{   
    /**
     * @Route("/test", name="test")
     */
    public function index()
    {
        return new Response("Hello World !");
    }

    /**
     * @Route("/test/show", name="test_show")
     */
    public function show()
    {
        $names = ["alexis", "thierry", "anthony"];

        return $this->render('test/show.html.twig', [
            'age' => 21,
            'names' => $names,
        ]);
    }
    
    /**
     * @Route("/test/see", name="test-see")
     */
    public function see()
    {
        $trainees = [
            ['marc', 38],
            ['michael', 31],
            ['thierry',18],
            ['toma', 23],
            ['tomg', 22],
            ['alexis', 31],
            ['amanda', 33],
            ['anthony', 34],
            ['calvin', 25],
            ['loic', 52]
        ];
    
        return $this->render('test/see.html.twig', [
            
            'ageMore' => rand(35, 45),
            'ageLess' => 25,
            'trainees' => $trainees,
            
        ]);

    }
}


