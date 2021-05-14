<?php

namespace App\Form;

use App\Entity\Propositions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PropositionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('city')
            ->add('date', DateType::class, [
                'html5' => true,
                'widget' => 'single_text',
                'input' => 'datetime',
                // 'input_format' => 'd/m/YY',
                'label' => "Date où t'es dispo",
                'attr' => ['class' => 'mb-2'],

            ])
            ->add('note', TextareaType::class, [
                'label' => "Remarques",
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Propositions::class,
        ]);
    }
}
