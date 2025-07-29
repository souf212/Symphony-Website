<?php

namespace App\Form;

use App\Entity\Client;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints as Assert;

class ClientForm extends AbstractType
{
    private Security $security;
   public function __construct(Security $security){
       $this->security = $security;
   }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Manager First Name
            ->add('managerFirstName', TextType::class, [
                'label' => 'First Name',
                'label_attr' => ['class' => 'form-label mt-3'],
                'row_attr'   => ['class' => 'col-md-6 mb-4'],
                'attr'       => [
                    'class'       => 'form-control form-control-lg',
                    'placeholder' => 'Enter first name',
                ],

            ])

            // Manager Last Name
            ->add('managerLastName', TextType::class, [
                'label' => 'Last Name',
                'label_attr' => ['class' => 'form-label mt-3'],
                'row_attr'   => ['class' => 'col-md-6 mb-4'],
                'attr'       => [
                    'class'       => 'form-control form-control-lg',
                    'placeholder' => 'Enter last name',
                ],

            ])

            // Company Name
            ->add('companyName', TextType::class, [
                'label' => 'Company',
                'label_attr' => ['class' => 'form-label mt-3'],
                'row_attr'   => ['class' => 'col-12 mb-4'],
                'attr'       => [
                    'class'       => 'form-control form-control-lg',
                    'placeholder' => 'Company name',
                ],

            ])

            // Phone
            ->add('phone', TextType::class, [
                'label' => 'Phone',
                'label_attr' => ['class' => 'form-label mt-3'],
                'row_attr'   => ['class' => 'col-md-6 mb-4'],
                'attr'       => [
                    'class'       => 'form-control form-control-lg',
                    'placeholder' => '+212 600 000000',
                ],

            ])

            // Address
            ->add('address', TextType::class, [
                'label' => 'Address',
                'label_attr' => ['class' => 'form-label mt-3'],
                'row_attr'   => ['class' => 'col-md-6 mb-4'],
                'attr'       => [
                    'class'       => 'form-control form-control-lg',
                    'placeholder' => 'Street, ZIP, etc.',
                ],

            ])

            // City
            ->add('city', TextType::class, [
                'label' => 'City',
                'label_attr' => ['class' => 'form-label mt-3'],
                'row_attr'   => ['class' => 'col-md-6 mb-4'],
                'attr'       => [
                    'class'       => 'form-control form-control-lg',
                    'placeholder' => 'City',
                ],

            ])

            // Country
            ->add('country', TextType::class, [
                'label' => 'Country',
                'label_attr' => ['class' => 'form-label mt-3'],
                'row_attr'   => ['class' => 'col-md-6 mb-4'],
                'attr'       => [
                    'class'       => 'form-control form-control-lg',
                    'placeholder' => 'Country',
                ],

            ])

            // User
            ->add('user', EntityType::class, [
                'class'       => User::class,
                'choice_label'=> 'email',
                'label'       => 'Assigned User',
                'label_attr'  => ['class' => 'form-label mt-3'],
                'row_attr'    => ['class' => 'col-12 mb-4'],
                'attr'        => ['class' => 'form-select form-select-lg'],
                'choices'      => [$this->security->getUser()],
                'disabled'     => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
