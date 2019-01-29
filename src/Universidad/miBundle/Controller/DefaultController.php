<?php

namespace Universidad\miBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UniversidadmiBundle:Default:index.html.twig');
    }

    public function buscarAction(Request $request){
      // $var=$request->request->get("page");
      //   var_dump("POST:".$var);
      //
      //   die();
      $carrera = $request->request->get("page");
      $profesor = $request->request->get("page");
      $em = $this->getDoctrine()->getManager();
      $consulta = $em->getRepository('UniversidadmiBundle:Carrera')->findByCarrera($carrera);
        $consutal2 = $em->getRepository('UniversidadmiBundle:Profesor')->findByNombre($carrera);

      if ($consulta) {
          return $this->render('UniversidadmiBundle:Default:mostrar.html.twig', array(
              'Datos' => $consulta));
      }

          return $this->render('UniversidadmiBundle:Default:profesor.html.twig', array(
              'Datos' => $consutal2
          ));

    }


}
