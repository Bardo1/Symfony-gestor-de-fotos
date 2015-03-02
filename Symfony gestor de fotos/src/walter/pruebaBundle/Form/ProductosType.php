<?php

namespace walter\pruebaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre','file', array("required"=>true))
            ->add('precio','text',array("required"=>true))
            ->add('guardar','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'walter\pruebaBundle\Entity\Productos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'walter_pruebabundle_productos';
    }
}
