<?php

namespace TunisiaMall\TMBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CompteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pwd')
            ->add('nom')
            ->add('prenom')
            ->add('adressemail')
            ->add('type')
            ->add('sexe')
            ->add('datenaissance')
            ->add('etat')
            ->add('photo')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TunisiaMall\TMBundle\Entity\Compte'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tunisiamall_tmbundle_compte';
    }
}
