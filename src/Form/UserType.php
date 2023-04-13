<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', TextType::class, [
                'required' => true,
                'constraints' => [new Length(['min' => 3])],
            ])
            ->add('lastName', TextType::class, [
                'required' => true,
                'constraints' => [new Length(['min' => 3])],
            ])
            ->add('username', TextType::class, [
                'required' => true,
                'constraints' => [new Length(['min' => 3])],
            ])
            ->add('password', PasswordType::class, [
                'required' => true,
                'constraints' => [new Length(['min' => 4])],
            ])
            ->add('email', EmailType::class, [
                'required' => true,
            ])
            ->add('phoneNumber')
            ->add('gender', ChoiceType::class, [
                'choices'  => [
                    'femme' => 'femme',
                    'homme' => 'homme'
                ],
            ])
            ->add('role', ChoiceType::class, [
                'choices'  => [
                    'Client' => 'Client',
                    'Artiste' => 'Artiste'
                ],
            ])
            ->add('Confirm',SubmitType::class );

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
