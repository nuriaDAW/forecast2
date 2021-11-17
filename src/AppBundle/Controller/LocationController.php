<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LocationController extends Controller
{
    public function indexAction(){
        $this->addFlash('location', 'Estás en Valladolid, España.');

        return $this->render('location/index.html.twig');
    }

    public function indexJsonAction(){
        $response = new Response(json_encode(array('location' =>
                    'Estás en Valladolid, España.')));
        $response->headers->set('Content-type', 'application/json');
        // $response->headers->set('Content-type', 'text/json', true);

        return $response;
    }
}
