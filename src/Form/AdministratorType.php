<?php

namespace App\Form;

use App\Entity\Administrator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class AdministratorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('password')
            // ->add('name')
            // ->add('email')


            ->add('password', TextType::class,[
                'label'=>false,
                'attr'=>[
                    'autocomplete'=>'password',
                    'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',
                    'placeholder'=>'password'
                ],
                ])

                ->add('name', TextType::class,[
                    'label'=>false,
                    'attr'=>[
                        'autocomplete'=>'name',
                        'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',
                        'placeholder'=>'name'
                    ],
                    ])
                    ->add('email', TextType::class,[
                        'label'=>false,
                        'attr'=>[
                            'autocomplete'=>'email',
                            'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',
                            'placeholder'=>'email'
                        ],
                        ])


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Administrator::class,
        ]);
    }
}
