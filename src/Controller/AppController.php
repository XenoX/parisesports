<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class AppController extends AbstractController
{
    /**
     * @Route("/")
     * @Template
     */
    public function index()
    {
        return [];
    }
}
