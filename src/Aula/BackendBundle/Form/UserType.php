<?php

namespace Aula\BackendBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class UserType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('name')
                ->add('type', 'choice', array('choices' => array('professor' => 'Professor', 'aluno' => 'Aluno')))
                ->add('file', 'file', array('data_class' => 'Symfony\Component\HttpFoundation\File\File'))
                ->add('gradeId', 'entity', array(
                'class'       => 'AulaBackendBundle:Grade',
                'expanded'    => true,
                'multiple'    => false,
                'property' => 'name',
                ))
                ->add('price')
                ->add('about')
                ->add('about_course');
      
    }

    public function getName()
    {
        return 'aula_user_registration';
    }
}