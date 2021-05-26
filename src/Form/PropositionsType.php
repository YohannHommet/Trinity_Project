<?php

namespace App\Form;

use App\Entity\Propositions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PropositionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Prénom',
                'required' => true,
                'disabled' => true
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Nom',
                'required' => true,
                'disabled' => true
            ])
            ->add('city', TextType::class, [
                'label' => 'Ta ville ',
                'required' => true,
                'disabled' => true
            ])
            ->add('date', DateType::class, [
                'html5' => true,
                'widget' => 'single_text',
                'input' => 'datetime',
                // 'input_format' => 'd/m/YY',
                'label' => "Date où t'es dispo",
                'attr' => ['class' => 'mb-2'],
                'required' => true

            ])
            ->add('note', TextareaType::class, [
                'label' => "Remarques",
                'required' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Propositions::class,
        ]);
    }
}
