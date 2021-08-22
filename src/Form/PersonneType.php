<?php

namespace App\Form;

use App\Entity\Personne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', null, [
                'attr' => [
                    'title' => 'form.order.nom.title', ],
            ])
            ->add('prenom', null, [
                'attr' => [
                    'title' => 'form.order.prenom.title', ],
            ])
            ->add('civilite', ChoiceType::class, array(
                'choices' => array( 'M' => 'M','Mme'=>'Mme'),
                'expanded' => false,
                'multiple' => false,
                //  'choices_as_values' => true,
                'label'=>false,
            ))
            ->add('dateNaissance', DateType::class, [
                'widget' => 'single_text',
                // this is actually the default format for single_text
                'format' => 'yyyy-MM-dd',

            ])
            ->add('situationFamiliale', null, [
                'attr' => [
                    'title' => 'form.order.lastName.title', ],
            ])
            ->add('nombreEnfant', null, [
                'attr' => [
                    'title' => 'form.order.lastName.nombreEnfant',
                    ],
            ])
            ->add('email', null, [
                'attr' => [
                    'title' => 'form.order.email.title', ],
            ])
            ->add('telephone1', null, [
                'attr' => [
                    'title' => 'form.order.telephone1.title', ],
            ])
            ->add('telephone2', null, [
                'attr' => [
                    'title' => 'form.order.telephone2.title', ],
            ])
            ->add('mobile', null, [
                'attr' => [
                    'title' => 'form.order.mobile.title', ],
            ])
            ->add('adresse', null, [
                'attr' => [
                    'title' => 'form.order.adresse.title', ],
            ])
            ->add('pays', null, [
                'attr' => [
                    'title' => 'form.order.pays.title', ],
            ])
            ->add('ville', null, [
                'attr' => [
                    'title' => 'form.order.ville.title', ],
            ])
            ->add('numRue', null, [
                'attr' => [
                    'title' => 'form.order.numRue.title', ],
            ])
            ->add('rue', null, [
                'attr' => [
                    'title' => 'form.order.rue.title', ],
            ])
            ->add('CodePostal', null, [
                'attr' => [
                    'title' => 'form.order.CodePostal.title', ],
            ])
            ->add('complementAdresse', null, [
                'attr' => [
                    'title' => 'form.order.complementAdresse.title', ],
            ])
            ->add('motCle', null, [
                'attr' => [
                    'title' => 'form.order.motCle.title', ],
            ])
            ->add('commenataire', TextareaType::class, [
                'attr' => ['class' => 'tinymce'],

            ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Personne::class,
        ]);
    }
}