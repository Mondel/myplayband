<?php

namespace MyPlayBand\MusicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('MyPlayBandMusicaBundle:Default:index.html.twig', array('name' => $name));
    }
}
