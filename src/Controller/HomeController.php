<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/helloUser/{name?}", name="hello_user")
     */

    public function helloUser(Request $request,$name=false)
    {
        $name = $request->get('name');

//        echo $name;die();

//        $name = "SUFEE";

        $form = $this->createFormBuilder()->add('fullname')->getForm();

        $person = [
            'name' => 'SUFEE',
            'age' => '28',
        ];
        return $this->render('home/greet.html.twig',[
            'person'=> $person,
//            'user_form'=> $form
            'user_form'=> $form->createView()
        ]);

    }


}
