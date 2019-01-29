<?php

namespace Universidad\miBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Universidad\miBundle\Entity\Profesor;

class ProfesorController extends Controller
{
    public function nuevoAction(Request $request)
    {


        $entity = new Profesor();
        // exit(dump($request));
        // exit(dump(count($materia)));
        $form = $this->formuAction($entity);
        $form->handleRequest($request);
//

//
        if ($form->isSubmitted() && $form->isValid())
        {
            $form->getData();
            $em= $this->getDoctrine()->getManager();

//
           $em->persist($entity);

            $em->flush();


            return $this->redirectToRoute('universidadmi_homepage');
        }
        return $this->render('UniversidadmiBundle:Profesor:new.html.twig',
            array('Form'=> $form->createview()));
    }
    public function formuAction($entity)
    {
        $form = $this->createFormBuilder($entity)
            ->setAction($this->generateUrl('profesor_nuevo'))
            ->setMethod('POST')
            ->add('nombre', 'text')
            ->add( 'apellido', 'text')
//            ->add('cedula','text')
            ->add('carrera')
            ->add('gradoInstruccion', 'text')
            ->add('unidadCurricular', 'entity', array(
                'class'=> 'UniversidadmiBundle:UnidadCurricular',
                'property' => 'unidadCurricular',


            ))
            ->add('subir',SubmitType::class, array('label'=>'Agregar'))
            ->getForm();
        return $form;
        }
        public function listaAction()
        {
            $em = $this->getDoctrine()->getManager();
            $lis = $em->getRepository('UniversidadmiBundle:Profesor')->findAll();
            return $this->render('UniversidadmiBundle:Profesor:lista.html.twig',
            array('Datos'=>$lis));
        }
    public function ajaxAction($id)

    {

        $em = $this->getDoctrine()->getManager();
        $ciudad = $em->getRepository('UniversidadmiBundle:UnidadCurricular')->findByCarrera($id);
        $lista['options'][]="Seleccione...";
        foreach ($ciudad as $c) {
            $lista['options'][]= $c->getUnidadCurricular().'-'.$c->getId();
            ;
        }

        return new JsonResponse($lista);
    }
}
