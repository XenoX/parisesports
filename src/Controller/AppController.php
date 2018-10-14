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
     * @Route("/contact")
     * @Template
     */
    public function contact()
    {
        $form = $this->createForm(ContactType::class);

        return ['form' => $form->createView()];
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
     * @Route("/adhesion")
     * @Template
     */
    public function membership()
    {
        return [];
    }
}
