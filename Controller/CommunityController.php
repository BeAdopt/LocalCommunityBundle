<?php

namespace BeAdopt\LocalCommunityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommunityController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BeAdoptLocalCommunityBundle:Default:index.html.twig', array('name' => $name));
    }
}
