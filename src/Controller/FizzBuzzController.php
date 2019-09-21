<?php

    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    // use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

    class FizzBuzzController extends Controller{

        /**
         * @Route("/")
         */
        function index(){
            // return new Response("testing ... testing");
            return $this->render('fizzbuzz.html.twig');
        }
    }