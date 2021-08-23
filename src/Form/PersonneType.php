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
                    'placeholder' => 'Nom ',
                    'title' => 'form.order.nom.title',
                    'style' => 'width: 160%;'
                ],
            ])
            ->add('prenom', null, [
                'attr' => [
                    'placeholder' => 'Prénom ',
                    'title' => 'form.order.prenom.title',
                    'style' => 'width: 130%;'

                ],
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
                    'placeholder' => 'Situation familiale ',

                    'title' => 'form.order.lastName.title', ],
            ])
            ->add('nombreEnfant', null, [
                'attr' => [
                    'placeholder' => 'Nombre d"Enfant ',

                    'title' => 'form.order.lastName.nombreEnfant',
                    ],
            ])
            ->add('email', null, [
                'attr' => [
                    'placeholder' => 'Email ',

                    'title' => 'form.order.email.title', ],
            ])

            ->add('telephone1', null, [
                'attr' => [
                    'placeholder' => 'Téléphone ',

                    'title' => 'form.order.telephone1.title', ],
            ])

            ->add('telephone2', null, [
                'attr' => [
                    'placeholder' => '2éme Téléphone ',

                    'title' => 'form.order.telephone2.title', ],
            ])
            ->add('mobile', null, [
                'attr' => [
                    'placeholder' => 'mobile ',

                    'title' => 'form.order.mobile.title', ],
            ])
            ->add('adresse', null, [
                'attr' => [
                    'placeholder' => 'Adresse ',

                    'title' => 'form.order.adresse.title', ],
            ])
            ->add('pays', null, [
                'attr' => [
                    'placeholder' => 'pays ',

                    'title' => 'form.order.pays.title', ],
            ])
            ->add('ville', null, [
                'attr' => [
                    'placeholder' => 'ville ',

                    'title' => 'form.order.ville.title', ],
            ])
            ->add('numRue', null, [
                'attr' => [
                    'placeholder' => 'N° de Rue ',
                    'title' => 'form.order.numRue.title', ],
            ])
            ->add('rue', null, [
                'attr' => [
                    'placeholder' => 'Rue ',
                    'title' => 'form.order.rue.title', ],
            ])
            ->add('codePostal', null, [
                'attr' => [
                    'placeholder' => 'code postal ',
                    'title' => 'form.order.codePostal.title', ],
            ])
            ->add('complementAdresse', null, [
                'attr' => [
                    'placeholder' => 'complement d"adresse ',
                    'title' => 'form.order.complementAdresse.title', ],
            ])
            ->add('motCle', null, [
                'attr' => [
                    'placeholder' => 'mot clés ',
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
