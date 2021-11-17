<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ForwardController extends Controller
{
    public function indexAction() {
    $response = $this->forward('AppBundle:Forward:finish', array('test' => true));
    return $response;
    }

    public function finishAction($test){
        if($test){
            return new Response('Redirection done receiving the parameter sucesfully');
        }else{
            return new Response('Parameter was not received succesfully');
        }
    }

}
