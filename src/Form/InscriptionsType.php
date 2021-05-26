<?php

namespace App\Form;

use App\Entity\Inscriptions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class InscriptionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
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
            ->add('email', EmailType::class, [
                'label' => "Email",
                'required' => true,
                'disabled' => true,
                'help' => "l'email restera confidentiel"
            ])
            ->add('city', TextType::class, [
                'label' => "Ville",
                'required' => true,
                'disabled' => true
            ])
            ->add('note', TextareaType::class, [
                'label' => "Remarques",
                'help' => "Ex: J'apporte à boire, j'aime me faire conduire, je suis célib... :)"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Inscriptions::class,
        ]);
    }
}
