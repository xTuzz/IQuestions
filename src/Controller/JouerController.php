<?php

namespace App\Controller;

use App\Entity\Quizz;
use App\Repository\QuestionsRepository;
use App\Repository\QuizzRepository;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JouerController extends AbstractController
{
    #[Route('/game/{id}', name: 'app_jouer', methods: ['GET', 'POST'])]
    public function index(Quizz $quizz, QuestionsRepository $questionsRepository): Response
    {
        $questions = $questionsRepository->findByQuizz($quizz);
        foreach ($questions as $question){
            $quizz->addQuestion($question);
        }

        return $this->render('jouer/index.html.twig', [
            'controller_name' => 'JouerController',
            'questions' => $quizz->getQuestions(),
            'quizz' => $quizz->getTitle(),
        ]);
    }
}
