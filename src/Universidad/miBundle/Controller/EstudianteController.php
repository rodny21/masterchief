<?php

namespace Universidad\miBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Universidad\miBundle\Entity\Estudiante;

class EstudianteController extends Controller
{
    public function nuevoAction(Request $request)
    {
        $entity = new Estudiante();
        $form= $this->formuAction($entity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $form->getData();
            $em=$this->getDoctrine()->getManager();
            $em->persist($entity);
            $file= $form['foto']->getData();
            // $ext=$file->guessExtension();
            $file_name=$_FILES['form']['name']['foto'];
            $file->move("../web/Foto/Estudiante/", $entity->getNombre().'.jpg');
            $entity->setFoto($entity->getNombre().'.jpg');



            $em->flush();
            return $this->redirectToRoute('universidadmi_homepage');
        }
            return $this->render('UniversidadmiBundle:Estudiante:new.html.twig',
                array('Form'=>$form->createview()));
    }
    public function formuAction($entity)
    {
        $form= $this->createFormBuilder($entity)
            ->setAction($this->generateUrl('estudiante_nuevo'))
            ->setMethod('POST')
            ->add('nombre', 'text')
            ->add('apellido', 'text')
            ->add('cedula', 'text')
            ->add('periodoAcademico','text')
            ->add('fechaNacimientoAt', 'date',
                array(
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                ))
            ->add('foto', FileType::class, array('label'=>'Foto del Estudiante'))
            ->add('carrera', 'entity', array(
                'class' => 'UniversidadmiBundle:Carrera',
                'property' => 'Carrera'))
            ->add('subir', SubmitType::class,array('label'=>'Registrar'))
            ->getForm();
            return $form;

    }
    public function listaAction()
    {
        $em = $this->getDoctrine()->getManager();
        $lis = $em->getRepository('UniversidadmiBundle:Estudiante')->findAll();
        return $this->render('UniversidadmiBundle:Estudiante:lista.html.twig',
        array('Datos'=>$lis));
    }
}
