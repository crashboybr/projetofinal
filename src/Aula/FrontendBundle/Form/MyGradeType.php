<?php

namespace Aula\FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MyGradeType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('grade', 'entity', array(
                'class'       => 'AulaBackendBundle:Grade',
                'expanded'    => true,
                'multiple'    => true,
                'property' => 'name',

                ))
            
        ;


    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Aula\BackendBundle\Entity\TeacherGrade'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aula_frontendbundle_grade';
    }
}
