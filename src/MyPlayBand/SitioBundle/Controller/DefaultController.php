<?php

namespace MyPlayBand\SitioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MyPlayBandSitioBundle:Default:index.html.twig');
    }
}
