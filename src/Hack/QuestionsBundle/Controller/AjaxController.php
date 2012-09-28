<?php

namespace Hack\QuestionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Hack\QuestionsBundle\Entity\Answer;

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
      return array(true);
    }
    
    /**
     * @Route("/answer")
     * @Template()
     */
    public function answerAction()
    {
      return array(true);
    }
}
