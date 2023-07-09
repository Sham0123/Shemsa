<?php

namespace App\Form;
use App\Entity\Lecture;
use App\Entity\Appointment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
class AppointmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
              

            //   ->add('date',DateType::class,[
            //     'widget'=>'single_text',
            //     'format'=>'yyyy-MM-dd',
                    

            //   ])     
            
            //   ->add('aim',TextType::class,[
            //         'label'=>false,
            //         'attr'=>[
            //             'autocomplete'=>'aim',
            //             'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',                            
            //             'placeholder'=>'aim'
            //         ],
            //         ])
            ->add('name',TextType::class,[
                'label'=>false,
                    'attr'=>[
                        'autocomplete'=>'name',
                        'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',                            
                        'placeholder'=>'name'
                    ],
            ])
            ->add('regnumber', TextType::class,[
                'label'=>false,
                'attr'=>[
                    'autocomplete'=>'regnumber',
                    'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',
                    'placeholder'=>'regnumber'
                ],
                ])
                
                ->add('course',TextType::class,[
                    'label'=>false,
                        'attr'=>[
                            'autocomplete'=>'course',
                            'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',                            
                            'placeholder'=>'course'
                        ],
                ])
            ->add('aim',TextType::class,[
                'label'=>false,
                    'attr'=>[
                        'autocomplete'=>'aim',
                        'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',                            
                        'placeholder'=>'aim'
                    ],
            ])
            ->add('lectures', EntityType::class,[
                'class'=> Lecture::class,
                'multiple'=> true,
                'expanded'=> true,
                'choice_label'=> function ($lectures){
                   return $lectures->getName();
                //    return $appointment->getRegnumber();  
                }
            
            ])

            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                
            ])
           

            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Appointment::class,
        ]);
    }
}
