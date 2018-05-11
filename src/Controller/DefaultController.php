<?php

namespace App\Controller;

use App\Service\Calculator;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/calculator/add/{number1}/{number2}", name="default")
     * @param int $number1
     * @param int $number2
     * @param Calculator $calculator
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index(int $number1, int $number2, Calculator $calculator)
    {
        return $this->json([
            'result' => $calculator->add($number1, $number2),
        ]);
    }
}
