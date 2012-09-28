<?php

namespace Hack\QuestionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/ajax")
 */
class AjaxController extends Controller
{
    /**
     * @Route("/add")
     * @Template()
     */
    public function addAction()
    {
      
    }
    
    /**
     * @Route("/answer")
     * @Template()
     */
    public function answerAction()
    {
      
    }
}
