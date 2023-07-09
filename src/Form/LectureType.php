<?php

namespace App\Form;

use App\Entity\Lecture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class LectureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder 
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
                    'placeholder'=>'Email or Username'
            ],
            ])
            ->add('password', TextType::class,[
                'label'=>false,
                'attr'=>[
                    'autocomplete'=>'password',
                    'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',                         
                    'placeholder'=>'password'
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
                ->add('room', IntegerType::class,[
                    'label'=>false,
                    'attr'=>[
                        'autocomplete'=>'room',
                        'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',                            
                        'placeholder'=>'room'
                    ],
                    ])
                //     ->add('status', ChoiceType::class, [
                //         'choices'=> [
                //             'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',                      
                //             'Success'=> true,
                //             'Failed'=> false,                            
                //             'Draft'=> null,
                //         ],
                //  ])
        

            // ->add('name')
            // ->add('email')
            // ->add('phone')
            // ->add('room')
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Lecture::class,
        ]);
    }
}
