<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MathController extends AbstractController
{
    /**
     * @Route("/math", name="app_math")
     */
    public function index(Request $request): Response
    {
        $left = $request->request->get('left');
        $right = $request->request->get('right');
        $operand = $request->request->get('op');

        $message = "Invalid input";

        if (!is_numeric($left) || !is_numeric($right)) {
            $message = "One of the operand is not numeric!";
            return $this->json(['result' => $message]);
        }
        if ($operand == '/' && $right == 0) {
            $message = "Devide by zero (0)!";
            return $this->json(['result' => $message]);
        }

        switch($operand) {
            case '+':
                $message = $left + $right;
                break;
            case '-':
                $message = $left - $right;
                break;
            case '*':
                $message = $left * $right;
                break;
            case '/':
                $message = $left / $right;
                break;
            default:
                break;                                    
        }
        //return $this->json(['result' => $message]);

        return $this->render('math/index.html.twig', [
            'controller_name' => 'MathController',
        ]);
    }
}

