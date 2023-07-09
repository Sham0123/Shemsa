<?php

namespace App\Form;

use App\Entity\Appointment;
use App\Entity\Availability;
use App\Entity\Office;
use App\Entity\Building;
// use App\Entity\Lecture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
class AvailabilityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('name',TextType::class,[
            'label'=>false,
                'attr'=>[
                    'autocomplete'=>'name',
                    'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',                            
                    'placeholder'=>'name'
                ],
        ])
        ->add('phone', IntegerType::class,[
            'label'=>false,
            'attr'=>[
                'autocomplete'=>'phone',
                'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',
                'placeholder'=>'phone'
            ],
            ])
            ->add('appointments', EntityType::class,[
                'class'=> Appointment::class,
                'multiple'=> true,
                'expanded'=> true,
                'choice_label'=> function ($appointment){
                   return $appointment->getName();
                //    return $appointment->getRegnumber();  
                }
            
            ])
           
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                
            ])
            ->add('block',EntityType::class,[
                'class'=> Building::class,
                'choice_label'=> function ($block){
                    return $block->getName();
                 }  
            ])
            ->add('offices',EntityType::class,[
                'class'=> Office::class,
                'choice_label'=> function ($offices){
                   return $offices->getNumber();
                }
            
            ])
            ->add('status', ChoiceType::class, [
                        'choices'=> [
                            'class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline',                      
                            'Success'=> true,
                            'Failed'=> false,                            
                            'Draft'=> null,
                        ],
                 ])
        
            // ->add('build', EntityType::class,[
            //     'class'=> Building::class,
            //     'multiple'=> true,
            //     'expanded'=> true,
            //     'choice_label'=> function ($build){
            //        return $build->getName();
            //     }
            
            // ])
            // ->add('name')
            // ->add('phone')
            // ->add('date')
            // ->add('students')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Availability::class,
        ]);
    }
}
