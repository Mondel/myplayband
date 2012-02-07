<?php

namespace MyPlayBand\TestBundle\Controller;

use MyPlayBand\TestBundle\Entity\Song;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
	/**
	 * @Template()
	 */
	public function testAction()
	{
	    $song = new Song();
	    $form = $this->createFormBuilder($song)
	        ->add('name')
	        ->add('file')
	        ->getForm()
	    ;

	    if ($this->getRequest()->getMethod() === 'POST') {
	        $form->bindRequest($this->getRequest());
	        if ($form->isValid()) {
	            $em = $this->getDoctrine()->getEntityManager();

 				$song->upload();

	            $em->persist($song);
	            $em->flush();

	            return $this->render(
				    'MyPlayBandTestBundle:Default:info.html.twig',
					array('info' => shell_exec('cd ../src/MyPlayBand/MusicaBundle/extras/;./echoprint-codegen ' . $song->getAbsolutePath()))
				);
	        }
	    }

	    return $this->render(
		    'MyPlayBandTestBundle:Default:test.html.twig',
			array('form' => $form->createView())
		);
	}

}
