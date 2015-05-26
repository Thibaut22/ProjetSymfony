<?php

namespace NF\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActivitiesEditType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->remove('sousCategories')
            ->remove('date')
        ;
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'nf_platformbundle_activities_edit';
    }

    public function getParent(){

        return new ActivitiesType();
    }
}
