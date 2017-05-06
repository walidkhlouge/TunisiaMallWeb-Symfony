<?php

namespace TunisiaMall\TMBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReclamationmallType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('reclamation',null,array('attr'=>array('class'=>'ckeditor')))
           ->add('envoyer Reclamation','submit',array( 'attr' => array('class' => 'btn btn-danger btn-block')));
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TunisiaMall\TMBundle\Entity\Reclamationmall'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tunisiamall_tmbundle_reclamationmall';
    }
}
