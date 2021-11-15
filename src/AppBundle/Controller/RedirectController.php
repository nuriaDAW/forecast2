<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RedirectController extends Controller
{
    public function indexAction(){
        return new Response("Redirección satisfactoria");
    }

    // redirect to redirect_index in routing.yml
    public function internalRedirectAction(){
        return $this->redirectToRoute('redirect_index');
    }

    public function internalRedirectPermanentAction(){
        return $this->redirectToRoute("redirect_index", array(), 301);
    }

    public function extenalRedirectAction(){
        return $this->redirect("https://elmundo.es");
    }

}
