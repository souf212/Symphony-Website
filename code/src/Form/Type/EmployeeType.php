<?php

declare(strict_types=1);

namespace App\Form\Type;


use App\Entity\Employee;
use App\Entity\Department;
use App\Repository\DepartmentRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class EmployeeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('FullName', TextType::class)
            ->add('emailAddress', EmailType::class)
            ->add('identityCode', TextType::class)
            ->add('department',EntityType::class,[
                'class' =>Department::class,
                'choice_label' =>'name',
                'choice_value' =>'id',
                'placeholder' => 'Choisir un departement',
                'query_builder' => function (DepartmentRepository $repository){
                    return $repository ->getDepartmentsOrdered();
                }])
          ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Employee::class,
        ]);
    }
}