<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;

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

    /**
     * @Route("/association")
     * @Template
     */
    public function association()
    {
        return [];
    }

    /**
     * @Route("/ressources")
     * @Template
     */
    public function resources()
    {
        return [];
    }

    /**
     * @Route("/contact")
     * @Template
     */
    public function contact()
    {
        $form = $this->createForm(ContactType::class);

        return ['form' => $form->createView()];
    }

    /**
     * @Route("/adhesion")
     * @Template
     */
    public function membership()
    {
        return [];
    }

    /**
     * @Route("/mentions-legales")
     * @Template
     */
    public function copyrights()
    {
        return [];
    }
}
