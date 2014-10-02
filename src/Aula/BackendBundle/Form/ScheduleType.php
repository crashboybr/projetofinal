<?php

namespace Aula\BackendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ScheduleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('teacherId')
            //->add('studentId')
            //->add('status')
            ->add('classAt', 'datetime', array(
                'years' => range(date('Y'), date('Y')+1), 
                'label' => 'Data'))
            ->add('classAt', 'datetime', array('date_widget' => "single_text", 'time_widget' => "single_text"));

            //->add('createdAt')
            //->add('updatedAt')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Aula\BackendBundle\Entity\Schedule'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'aula_backendbundle_schedule';
    }
}
