<?php

namespace Universidad\miBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Universidad\miBundle\Entity\Usuarios;

class UsuariosController extends Controller
{
  public function nuevaAction(Request $request)
  {
    $entity= new Usuarios();
    $form = $this->formAction($entity);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $form->getData();
        $em = $this->getDoctrine()->getManager();
        $password = $form->get('password')->getData();
  $encoder = $this->container->get('security.password_encoder');
  $encoded = $encoder->encodePassword($entity, $password);

  $entity->setPassword($encoded);

        $em->persist($entity);


        $em->flush();

        return $this->redirectToRoute('universidadmi_homepage');
        }
        return $this->render('UniversidadmiBundle:Usuario:new.html.twig',
        array('Form' =>$form->createview()));
  }
  public function formAction($entity)
  {
    $form = $this->createFormBuilder( $entity)
    ->setAction($this->generateUrl('usuario_nuevo'))
    ->setMethod('POST')
    ->add('username')
    ->add('password')
    ->add('rol', 'entity', array(
        'class'=> 'UniversidadmiBundle:Rol',
        'property' => 'rol',


    ))
    ->add('isActive')
    ->add('subir', SubmitType::class, array('label'=>'Agregar'))
    ->getForm();
    return $form;
  }
}
