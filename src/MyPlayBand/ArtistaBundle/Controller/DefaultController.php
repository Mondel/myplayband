<?php

namespace MyPlayBand\ArtistaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MyPlayBandArtistaBundle:Default:index.html.twig');
    }
}
