<?php

namespace Hack\QuestionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Hack\QuestionsBundle\Entity\User;

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
     * @Route("/answer/{id}")
     * @Template()
     */
    public function addAction($id)
    {
      
    }
    
    /**
     * @Route("/badges")
     * @Template()
     */
    public function answerAction()
    {
       
    }
    
    /**
     * @Template()
     */
    public function rankpaneAction()
    {
      return array('name'=>'name');
    }
}
