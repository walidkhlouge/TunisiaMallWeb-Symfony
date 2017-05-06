<?php

/**
 * Description of compteType
 *
 * @author Nada
 */

namespace TunisiaMall\TMBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class compteForm extends AbstractType{
    
     public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('login')
            ->add('pwd')
            ->add('nom')
            ->add('prenom')
            ->add('adressemail')
            ->add ('sexe','choice', array ('label' => 'Sexe ',
                    'choices' => array
                       ('femme' => 'Femme',
                        'homme' => 'Homme'),
                        'multiple' => false, 'expanded' => true))
 
            ->add('datenaissance')
            ->add('valider','submit')
                
        ;
    }
     /**
     * @return string
     */
    public function getName()
    {
        return '';
    }
}
