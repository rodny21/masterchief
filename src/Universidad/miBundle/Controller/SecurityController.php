<?php

namespace Universidad\miBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class SecurityController extends Controller
{
  public function homeAction(){

    return $this->render('UniversidadmiBundle:Default:index.html.twig');
// return new Response('<html><body>hola mundo</body></html>' );
  }


  public function loginAction(Request $request)
      {
          $authenticationUtils = $this->get('security.authentication_utils');

          // get the login error if there is one
          $error = $authenticationUtils->getLastAuthenticationError();

          // last username entered by the user
          $lastUsername = $authenticationUtils->getLastUsername();

          return $this->render(
              'UniversidadmiBundle:Security:login.html.twig',
              array(
                  // last username entered by the user
                  'last_username' => $lastUsername,
                  'error'         => $error
              )
          );
      }

 public function logincheckAction()
 {

 }
}
