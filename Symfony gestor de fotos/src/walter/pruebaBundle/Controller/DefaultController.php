<?php

namespace walter\pruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use walter\pruebaBundle\Entity\Fotos;
use walter\pruebaBundle\Entity\Productos;
use walter\pruebaBundle\Entity\Article;
use walter\pruebaBundle\Form\FotosType;
use walter\pruebaBundle\Form\ProductosType;
use walter\pruebaBundle\Form\ArticleType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use walter\pruebaBundle\Entity\Document;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;


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

    public function fotosAction()
    {
        $repository= $this->getDoctrine()->getRepository("walterpruebaBundle:Fotos");
        $fotos= $repository->findAll();
        return $this->render('walterpruebaBundle:Default:fotos.html.twig', array("fotos"=> $fotos));
    }

    public function fotosentradasAction()
    {
        $repository= $this->getDoctrine()->getRepository("walterpruebaBundle:Article");


        $foti =   $repository->createQueryBuilder('p')
            ->orderBy('p.id','DESC')
            ->getQuery();
        $fotos = $foti ->getResult();

        return $this->render('walterpruebaBundle:Default:entradas.html.twig', array("fotos"=> $fotos));
    }



    public function productosentradasAction()
    {
        $repository= $this->getDoctrine()->getRepository("walterpruebaBundle:Productos");
        $Productos= $repository->findAll();
        return $this->render('walterpruebaBundle:Default:productos.html.twig', array("Productos"=> $Productos));
    }

    public function entradadespleAction($id)
    {
        $repository= $this->getDoctrine()->getRepository("walterpruebaBundle:Article");
        $fotos= $repository->findOneById($id);
        return $this->render('walterpruebaBundle:Default:entradadesplegada.html.twig', array("fotos"=> $fotos));
    }

    public function alumnoAction($matricula)
    {
        return $this->render('walterpruebaBundle:Default:alumno.html.twig', array("alumno"=>$this->alumnos[$matricula-1]));
    }


    public function nuevoAction()
    {
        $fotos= new Fotos();
        $fotos->setNombre("nombrefoto123");
        $fotos->setUrl("porallaquedo1234");
        $em=$this->getDoctrine()->getManager();
        $em->persist($fotos);
        $em->flush();
        return $this->redirect($this->generateUrl('walteralumnos_alumnos'));
    }

    public function alumnosAction()
    {
        $repository= $this->getDoctrine()->getRepository("walteralumnosBundle:Alumnos");
        $alumnos= $repository->findAll();
        return $this->render('walteralumnosBundle:Default:alumnos.html.twig', array("alumnos"=> $alumnos));
    }


    public function addAction()
    {
        $form=$this->createForm(new ProductosType());
        return $this->render('walterpruebaBundle:Default:add.html.twig',array("form"=> $form->createView()));
    }

    public function add2Action(Request $request)
    {
        $p= new Productos();

        $form=$this->createForm(new ProductosType(),$p);
        $form->handleRequest($request);

        if($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($p);
            $em->flush();

            return $this->redirect($this->generateUrl('walterprueba_testadd2'));

        }

        return $this->render('walterpruebaBundle:Default:add2.html.twig',array("form"=> $form->createView()));
    }


    public function uploadAction(Request $request) {

        if ($request->getMethod() == 'POST') {
            $image = $request->files->get('img');
            $status = 'success';
            $uploadedURL='';
            $message='';
            if (($image instanceof UploadedFile) && ($image->getError() == '0')) {
                if (($image->getSize() < 2000000000)) {
                    $originalName = $image->getClientOriginalName();
                    $name_array = explode('.', $originalName);
                    $file_type = $name_array[sizeof($name_array) - 1];
                    $valid_filetypes = array('jpg', 'jpeg', 'bmp', 'png');
                    if (in_array(strtolower($file_type), $valid_filetypes)) {
                        //Start Uploading File

                        $document = new Document();
                        $document->setFile($image);
                        $document->setSubDirectory('uploads');
                        $document->processFile();
                        $uploadedURL=$uploadedURL = $document->getUploadDirectory() . DIRECTORY_SEPARATOR . $document->getSubDirectory() . DIRECTORY_SEPARATOR . $image->getBasename();
                    } else {
                        $status = 'failed';
                        $message = 'Invalid File Type';
                    }
                } else {
                    $status = 'failed';
                    $message = 'Size exceeds limit';
                }
            } else {
                $status = 'failed';
                $message = 'File Error';
            }
            return $this->render('walterpruebaBundle:Default:subir.html.twig',array('status'=>$status,'message'=>$message,'uploadedURL'=>$uploadedURL));
        } else {
            return $this->render('walterpruebaBundle:Default:subir.html.twig');
        }
    }




    /**
     * Finds and displays a Article entity.
     *
     */
    public function showAction($id)
    {

        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('walterpruebaBundle:Article')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Article entity.');
        }
        return $this->render('walterpruebaBundle:Default:show.html.twig', array(
            'entity'      => $entity,

        ));
    }
    /**
     * Displays a form to create a new Article entity.
     *
     */
    public function newAction()
    {
        $entity = new Article();
        //$entity = $em->getRepository('CliniqueGynecoBundle:Article');
        $form   = $this->createForm(new ArticleType(), $entity);

        return $this->render('walterpruebaBundle:Default:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Article entity.
     *
     */
    public function createAction()
    {
        $entity  = new Article();
        $request = $this->getRequest();
        $form    = $this->createForm(new ArticleType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('walterprueba_show', array('id' => $entity->getId())));

        }

        return $this->render('walterpruebaBundle:Default:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
            ;
    }

}
