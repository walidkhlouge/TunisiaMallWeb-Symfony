<?php

namespace TunisiaMall\TMBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EnseigneType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomenseigne')
            ->add('adresse')
            ->add('info')
            ->add('file')
            ->add('Ajouter','submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TunisiaMall\TMBundle\Entity\Enseigne'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tunisiamall_tmbundle_enseigne';
    }
}
