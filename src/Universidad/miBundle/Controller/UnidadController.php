<?php

namespace Universidad\miBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Universidad\miBundle\Entity\UnidadCurricular;

class UnidadController extends Controller
{
    public function nuevoAction(Request $request)
    {
        $entity= new UnidadCurricular();
        $form = $this->formuAction($entity);

        $form->handleRequest($request);
        $unidad= '';

        if ($form->isSubmitted() && $form->isValid())
        {
            $form->getData();
            // exit(var_dump($form));
            $em = $this->getDoctrine()->getManager();
//            for($i=0; $i<(count($)))

            $em->persist($entity);

//            exit(var_dump($em));
            $em->flush();

            return $this->redirectToRoute('universidadmi_homepage');
        }
        return $this->render('UniversidadmiBundle:Unidad:new.html.twig',
            array('Form' =>$form->createview()));
    }
    public function formuAction($entity)
    {
        $form = $this->createFormBuilder($entity)
            ->setAction($this->generateUrl('unidad_nuevo'))
            ->setMethod('POST')
            ->add('carrera')
            ->add('puntos')
            ->add('semestre', 'choice', array( 'choices'=>array(
            '1er Semestre'=>'1er Semestre',
            '2do Semestres'=>'2do Semestres',
            '3er Semestre'=>'3er Semestre',
            '4to Semestre'=>'4to Semestre',
            '5to Semestre'=>'5to Semestre',
            '6to Semestre'=>'6to Semestre')
          )
          )
            ->add('unidadCurricular')
            ->add('subir', SubmitType::class, array('label'=>'Agregar'))
            ->getForm();
        return $form;
    }
}
