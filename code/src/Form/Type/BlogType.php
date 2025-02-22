<?php

declare(strict_types=1);

namespace App\Form\Type;

use App\DTO\Blog;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BlogType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('title', TextType::class, [
            'label' => "Blog's title",
            'attr' => [
                'placeholder' => 'Ipsum lorem dolore...',
            ],
            'help' => 'This title will be displayed in the home page. So it needs to be as clear as possible.',
        ])
            ->add('content', TextareaType::class, [
                'label' => "Blog content",
                'attr' => [
                    'rows' => 10,
                    'placeholder' => 'You can set any content here...',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefault('data_class', Blog::class);
    }
}