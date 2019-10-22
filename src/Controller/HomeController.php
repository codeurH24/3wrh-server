<?php

namespace App\Controller;

use App\Entity\Computer;
use App\Repository\ComputerRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\View\ViewHandle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;

class HomeController extends FOSRestController
{
    /**
     * @Rest\Get("/")
     * @return View
     */
    public function index(ComputerRepository $repo)
    {
        $computers = $repo->findAll();
        
        return View::create($computers, 200);
    }

}
