<?php

namespace App\Form;

use App\Entity\Student;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class StudentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,[
                'label'=>false,
                'attr'=>[
                    'autocomplete'=>'name',
                    'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',
                    'placeholder'=>'Name'
                ],
                ])
                ->add('registrno', TextType::class,[
                    'label'=>false,
                    'attr'=>[
                        'autocomplete'=>'registrno',
                        'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',                      
                        'placeholder'=>'Registrno'
                    ],
                    ])


                ->add('email', TextType::class,[
                    'label'=>false,
                    'attr'=>[
                        'autocomplete'=>'email',
                        'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',                      
                        'placeholder'=>'Email or Username'
                    ],
                    ])

                    ->add('phone', IntegerType::class,[
                        'label'=>false,
                        'attr'=>[
                            'autocomplete'=>'phone',
                            'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',                            
                            'placeholder'=>'Phone number'
                        ],
                        ])

                        ->add('year', IntegerType::class,[
                            'label'=>false,
                            'attr'=>[
                                'autocomplete'=>'year',
                                'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',                               
                                'placeholder'=>'Year'
                            ],
                            ])
                            
                            ->add('school', TextType::class,[
                                'label'=>false,
                                'attr'=>[
                                    'autocomplete'=>'school',
                                    'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',
                                    'placeholder'=>'school'
                                ],
                                ])
                                // ->add('password', TextType::class,[
                                //     'label'=>false,
                                //     'attr'=>[
                                //         'autocomplete'=>'password',
                                //         'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',
                                //         'placeholder'=>'password'
                                //     ],
                                //     ])
                                    // ->add('roles', TextType::class,[
                                    //     'label'=>false,
                                    //     'attr'=>[
                                    //         'autocomplete'=>'roles',
                                    //         'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',
                                    //         'placeholder'=>'roles'
                                    //     ],
                                    //     ])    
            // ->add('email')
            // ->add('phone')
            // ->add('year')
            // ->add('school')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Student::class,
        ]);
    }
}
