<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class RecommendationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('commentaire')->add('note')
            ->add('userName',EntityType::class,array('class'=>'AppBundle:User','choice_label'=>'id'))
            ->add('compagnie',EntityType::class,array('class'=>'AppBundle:Compagnie','choice_label'=>'id'))
            ->add('service',EntityType::class,array('class'=>'AppBundle:Service','choice_label'=>'id'))
            ->add('pays');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Recommendation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_recommendation';
    }


}
