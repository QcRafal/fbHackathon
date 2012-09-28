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
     * @Route("/badge/{id}")
     * @Template()
     */
    public function bagdeAction()
    {
       return array(
         'url' => 'https://endodev.vipserv.org/app_dev.php/questions/badge/1', 
         'name' => 'Pierwsze osiągnięcie pana Mietka', 
         'description' => 'no przeciez mówię, że pierwsze...', 
         'image' => 'http://placekitten.com/g/32/32', 
         'app_id' => 1235,  );
    }
    
    /**
     * @Template()
     */
    public function rankpaneAction()
    {
      return array('name'=>'name');
    }
}
