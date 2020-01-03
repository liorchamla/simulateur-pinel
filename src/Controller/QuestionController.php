<?php

namespace App\Controller;

use App\Form\InquiryType;
use App\Inquiry\InquirySimulator;
use App\Repository\CityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="question")
     */
    public function index(Request $request, InquirySimulator $inquirySimulator, CityRepository $cityRepository)
    {
        $form = $this->createForm(InquiryType::class);

        $form->handleRequest($request);

        $result = null;

        if ($form->isSubmitted() && $form->isValid()) {
            $result = $inquirySimulator->simulate($form->getData());
        }

        return $this->render('question/index.html.twig', [
            'controller_name' => 'QuestionController',
            'form' => $form->createView(),
            'result' => $result
        ]);
    }
}
