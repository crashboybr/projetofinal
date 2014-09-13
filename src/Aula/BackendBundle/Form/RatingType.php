<?php

namespace Aula\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RatingType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rating')
            ->add('testimonial')
            ->add('student_id', 'hidden')
            ->add('class_id', 'hidden')
            //->add('schedule', 'collection', 
            //    array('type' => new ScheduleRatingType(), 
            //        'options' => array('data_class' => 'Aula\BackendBundle\Entity\Schedule')))
            ->add('teacher_id', 'hidden')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Aula\BackendBundle\Entity\Rating'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aula_backendbundle_rating';
    }
}
