<?php

namespace Hack\QuestionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return array('name' => 'aha');
    }
    
    /**
     * @Route("/answer")
     * @Template()
     */
    public function addAction()
    {
      
    }
    
    /**
     * @Route("/badges")
     * @Template()
     */
    public function answerAction()
    {
       
    }
}
