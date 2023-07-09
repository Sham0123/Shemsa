<?php

namespace App\Controller;
use App\Entity\Appointmentnotification;
use App\Form\AppointmentnotificationType;
use App\Repository\AppointmentnotificationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
class DashboardController extends AbstractController
{
#[Route('/dash', name:'admindashboard')]
public function getAdminDashboard():Response
{$this->denyAccessUnlessGranted('ROLE_ADMIN');
    return $this->render('Dashboard/admin.html.twig');
}
#[Route('/dash1', name:'lecturedashboard')]
public function getLectureDashboard():Response
{$this->denyAccessUnlessGranted('ROLE_LECTURES');
    return $this->render('Dashboard/lecture.html.twig');
}
#[Route('/dash2', name:'studentdashboard')]
public function getStudentDashboard():Response
{$this->denyAccessUnlessGranted('ROLE_STUDENTS');
    return $this->render('Dashboard/student.html.twig');
}
}
?>