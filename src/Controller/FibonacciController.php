<?php

    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class FibonacciController extends Controller{

        /**
         * @Route("/{step}")
         */
        function index($step){
            $fib = $this->fibonacci($step);

            return $this->render('fibonacci.html.twig', array('fibonacci' => $fib, 'step' => $step));
        }

        private function fibonacci($steps = 0){
            if($steps == 1)
                return 1;
            if( $steps == 2)
                return 1;
            if($steps > 2)
                return $this->fibonacci($steps-1) + $this->fibonacci($steps-2);
        }

    }