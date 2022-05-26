<?php

namespace App\Form;

use App\Entity\Equation;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Form\Type\IconChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EquationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $icons = [
            // '&#xf8f5;' => '+', // alient: Paid options
            // '&#xf54c;' => '-', // skull: Paid options
            // '&#xf6e2;' => '*', // ghost: Paid options
            // '&#xe38b;' => '/'  // scream: Paid options
            '&#xf281; Addition (+)' => '+', // alient
            '&#xf714; Substraction (-)' => '-', // skull
            '&#xf6e2; Multiplication (*)' => '*', // ghost
            '&#xf0ac; Division (/)' => '/'  // scream
        ];
        $builder
            ->add('leftOperand', TextType::class, [
                'label' => '',
                'help' => '',
                'attr' => [
                    'placeholder' => 'Int()'
                ]
            ])
            ->add('operator', IconChoiceType::class, [
                'choices' => $icons,
                'attr' => ['style' => "font-family: 'Font Awesome 6 Free'"]
            ])
            ->add('rightOperand', TextType::class, [
                'label' => '',
                'help' => '',
                'attr' => [
                    'placeholder' => 'Int()'
                ]
            ])
            ->add('result', TextType::class, [
                'label' => '',
                'help' => '',
                'attr' => [
                    'placeholder' => 'Your result',
                    'readonly' => true,
                ]
            ])
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
