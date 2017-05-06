<?php

namespace TunisiaMall\TMBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CarteFideliteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
           
            ->add('reductionfixe')
            ->add('pointfidelefixe')
            ->add('loginclient')   
             ->add('nomenseigne') 
             
         
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TunisiaMall\TMBundle\Entity\CarteFidelite'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tunisiamall_tmbundle_cartefidelite';
    }
}
