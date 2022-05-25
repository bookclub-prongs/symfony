<?php

namespace App\Form;

use App\Entity\Equation;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Form\Type\IconChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EquationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $icons = [
            // '&#xf8f5;' => '+', // alient
            // '&#xf54c;' => '-', // skull
            // '&#xf6e2;' => '*', // ghost
            // '&#xe38b;' => '/'  // scream
            '&#xf281;' => '+', // alient
            '&#xf714;' => '-', // skull
            '&#xf6e2;' => '*', // ghost
            '&#xf0ac;' => '/'  // scream
        ];
        //dd($icons);
        
        //$icons = array_flip(array_map('html_entity_decode',$icons));
        //dd($icons);
        // $builder
        //     ->add('leftOperand')
        //     ->add('operator', ChoiceType::class, [
        //         'choices' => $icons
        //     ])
        //     ->add('rightOperand')
        //     ->add('result')
        // ;
        $builder
            ->add('leftOperand')
            ->add('operator', IconChoiceType::class, [
                'choices' => $icons,
                'attr' => ['style' => "font-family: 'FontAwesome'"]
            ])
            ->add('rightOperand')
            ->add('result')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Equation::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'equation_item'
        ]);
    }
}
