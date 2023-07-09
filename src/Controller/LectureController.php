<?php

namespace App\Controller;

use App\Entity\Lecture;
use App\Form\LectureType;
use App\Repository\LectureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Validator\Constraints\Email;

#[Route('/lecture')]
class LectureController extends AbstractController
{
    #[Route('/', name: 'app_lecture_index', methods: ['GET'])]
    public function index(LectureRepository $lectureRepository): Response
    {$this->denyAccessUnlessGranted('ROLE_ADMIN');
        return $this->render('lecture/index.html.twig', [
            'lectures' => $lectureRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_lecture_new', methods: ['GET', 'POST'])]
    public function new(Request $request, LectureRepository $lectureRepository, MailerInterface $mailer): Response
    {$this->denyAccessUnlessGranted('ROLE_ADMIN');
        $lecture = new Lecture();
        $form = $this->createForm(LectureType::class, $lecture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $email = (new Email())
                //   ->from('hello@example.com')
                //   ->to('you@example.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
                    // ->subject('Time for Symfony Mailer!')
                    // ->text('Sending emails is fun again!');
            // ->html('<p>See Twig integration for better HTML integration!</p>');

            //   $mailer->send($email);






            $lectureRepository->save($lecture, true);

            return $this->redirectToRoute('app_lecture_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('lecture/new.html.twig', [
            'lecture' => $lecture,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_lecture_show', methods: ['GET'])]
    public function show(Lecture $lecture): Response
    {$this->denyAccessUnlessGranted('ROLE_ADMIN');
        return $this->render('lecture/show.html.twig', [
            'lecture' => $lecture,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_lecture_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Lecture $lecture, LectureRepository $lectureRepository): Response
    {$this->denyAccessUnlessGranted('ROLE_ADMIN');
        $form = $this->createForm(LectureType::class, $lecture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $lectureRepository->save($lecture, true);

            return $this->redirectToRoute('app_lecture_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('lecture/edit.html.twig', [
            'lecture' => $lecture,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_lecture_delete', methods: ['POST'])]
    public function delete(Request $request, Lecture $lecture, LectureRepository $lectureRepository): Response
    {$this->denyAccessUnlessGranted('ROLE_ADMIN');
        if ($this->isCsrfTokenValid('delete'.$lecture->getId(), $request->request->get('_token'))) {
            $lectureRepository->remove($lecture, true);
        }

        return $this->redirectToRoute('app_lecture_index', [], Response::HTTP_SEE_OTHER);
    }
}