<?php

namespace NF\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class ActivitiesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sousCategories' , 'entity',array(
                'class'=> 'NFPlatformBundle:SousCategories',
                'property'=>'title'
                ))
            ->add('date','date')
            
            ->add('montant',  'number')
            ->add('coment', 'textarea')
            ->add('save','submit',array('label'=>'Envoyer'))  
        ;
        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function(FormEvent $event){
                $act = $event->getData();

                if(null === $act){
                    return;
                }
            });
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NF\PlatformBundle\Entity\Activities'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'nf_platformbundle_activities';
    }
}
