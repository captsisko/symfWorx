<?php

    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;


    class FizzBuzzController{

        /**
         * @Route("/")
         */
        function index(){
            return new Response("testing ... testing");
        }
    }