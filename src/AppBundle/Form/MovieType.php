<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('year')
            ->add('language')
            ->add('genre')
            ->add('rating')
            ->add('vpackId')
            ->add('quality')
            ->add('description',TextareaType::class)
            ->add('youtubeLink')
            ->add('imageFile',FileType::class,array('label'=>'Movie Cover','required'=>false))
            ->add('save',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Movie',
        ));
    }

    public function getName()
    {
        return 'app_bundle_movie_type';
    }
}
