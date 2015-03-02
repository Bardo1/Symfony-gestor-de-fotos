<?php

namespace walter\alumnosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use walter\alumnosBundle\Entity\Alumnos;

class DefaultController extends Controller
{
    var  $alumnos1=array(
        array("matricula"=>1,"nombre"=>"daniel muela"),
        array("matricula"=>2,"nombre"=>"walter munoz")
    );

    public function indexAction($name)
    {
        return $this->render('walteralumnosBundle:Default:index.html.twig', array('name' => $name));
    }

    public function alumnosAction()
    {
        $repository= $this->getDoctrine()->getRepository("walteralumnosBundle:Alumnos");
        $alumnos= $repository->findAll();
        return $this->render('walteralumnosBundle:Default:alumnos.html.twig', array("alumnos"=> $alumnos));
    }

    public function alumnoAction($matricula)
    {
        return $this->render('walteralumnosBundle:Default:alumno.html.twig', array("alumno"=>$this->alumnos[$matricula-1]));
    }



    public function nuevoAction()
    {
        $alumno= new Alumnos();
        $alumno->setNombre("pedro");
        $alumno->setEmail("perales.COMGMAIL");
        $em=$this->getDoctrine()->getManager();
        $em->persist($alumno);
        $em->flush();
        return $this->redirect($this->generateUrl('walteralumnos_alumnos'));
    }
}
