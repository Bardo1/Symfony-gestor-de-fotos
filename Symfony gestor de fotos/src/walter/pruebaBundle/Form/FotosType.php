<?php

namespace walter\pruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FotosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre','text', array("required"=>true))
            ->add('url','text',array("required"=>true))
            ->add('guardar','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'walter\pruebaBundle\Entity\Fotos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'walter_pruebabundle_fotos';
    }
}
