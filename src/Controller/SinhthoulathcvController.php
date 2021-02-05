<?php

namespace App\Controller;

use App\Entity\Cv;
use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CvRepository;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;

class SinhthoulathcvController extends AbstractController
{
    /**
     *  @var CvRepository
     *  @var UsersRepository
     */

    private $repository;
 
    public function __construct(CvRepository $repo, EntityManagerInterface $em)
    {
    $this->repository = $repo;//initialisation
    $this->em = $em;//initialisation
    }
    

    /**
     * @Route("/", name="sinhthoulathcv")
     */
    // public function index(): Response
    // {
    //     return $this->render('sinhthoulathcv/index.html.twig', [
    //         'controller_name' => 'SinhthoulathcvController',
    //     ]);
    // }

    public function cv(): Response
    
    {
        $cv = new cv();
        $em = $this->getDoctrine()->getManager();
        $cv = $em->getRepository("App\Entity\cv")->findBy(
            array('section' => 'content'),
            array(),
            1
        );
        return $this->render('sinhthoulathcv/index.html.twig', [
            'cv' => $cv
        ]);
    }
}
