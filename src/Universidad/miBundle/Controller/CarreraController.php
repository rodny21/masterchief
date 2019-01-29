<?php

namespace Universidad\miBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Universidad\miBundle\Entity\Carrera;

class CarreraController extends Controller
{
  public function nuevoAction(Request $request)
  {
      $entity = new Carrera();
      $form = $this->formuAction($entity);
      $form->handleRequest($request);

//
      if ($form->isSubmitted() && $form->isValid())
      {
          $form->getData();

          $em = $this->getDoctrine()->getManager();
          $em->persist($entity);

          $file= $form['pensul']->getData();
          $file_name=$_FILES['form']['name']['pensul'];
          $file->move("../web/Pensul/Carrera",$file_name);
          $entity->setPensul($file_name);
          $em->flush();

          return $this->redirectToRoute('universidadmi_homepage');
      }
      return $this->render('UniversidadmiBundle:Carrera:new.html.twig',
          array('formulario' => $form->createview()));
  }
  public function formuAction($entity)
  {
      $form = $this->createFormBuilder($entity)
          ->setAction($this->generateUrl('carrera_nuevo'))
          ->setMethod('POST')
          ->add('carrera', 'text')
          ->add('duracion', 'text')
          ->add('pensul', FileType::class, array('label'=>'Pensul(PDF)'))
          ->add('carrera')
          ->add('subir', SubmitType::class, array('label'=>'Agregar'))
          ->getForm();
      return $form;
  }
  public function listaAction()
  {
      $em = $this->getDoctrine()->getManager();
      $lis = $em->getRepository('UniversidadmiBundle:Carrera')->findAll();
      return $this->render('UniversidadmiBundle:Carrera:lista.html.twig',
      array('Datos'=>$lis));
  }
  public function verAction($id)
    {
    $em = $this->getDoctrine()->getManager();
    $unidad = $em->getRepository('UniversidadmiBundle:UnidadCurricular')->findByCarrera($id);
    // foreach ($unidad as $c) {
    //     $lista= $c->getUnidadCurricular();
    //   }
    if (!$unidad) {
      throw $this->createNotFoundException('Sin Unidad');      }

  return $this->render('UniversidadmiBundle:Unidad:ver.html.twig', array('unidad' => $unidad));
  }
}
