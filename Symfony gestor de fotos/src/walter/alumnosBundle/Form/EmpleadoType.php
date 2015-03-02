<?php

namespace walter\alumnosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EmpleadoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('fecha')
            ->add('edad')
            ->add('apellido')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'walter\alumnosBundle\Entity\Empleado'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'walter_alumnosbundle_empleado';
    }
}
