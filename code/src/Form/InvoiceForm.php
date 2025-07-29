<?php

namespace App\Form;

use App\Entity\Client;
use App\Entity\Invoice;
use App\Enum\InvoiceStatus;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

class InvoiceForm extends AbstractType
{

    private Security $security;
    public function __construct(Security $security){
        $this->security = $security;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $this->security->getUser();
        $builder
            //invoice Number
            ->add('invoiceNumber', TextType::class, [
                'label' => 'Numéro de facture',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Entrez le numéro de facture',
                ],
            ])

            //Invoice Date
            ->add('invoiceDate', DateType::class, [
                'label' => 'Date de facturation',
                'required' => true,
                'widget' => 'single_text',
                'html5' => true,

            ])
            ->add('amount', MoneyType::class, [
                'label' => 'Montant (MAD)',
                'required' => true,
                'currency' => 'MAD',
                'attr' => [
                    'placeholder' => 'Entrez le montant en dirhams marocains',
                ],
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'État de la facture',
                'required' => true,
                'choices' => InvoiceStatus::choices(),
                'constraints' => [
                    new NotBlank([
                        'message' => 'L\'état de la facture est obligatoire',
                    ]),
                ],
            ])
            ->add('note', TextareaType::class, [
                'label' => 'Note / Commentaire',
                'required' => false,

                'attr' => [
                    'placeholder' => 'Ajoutez une note ou un commentaire (optionnel)',
                    'rows' => 3,
                ],
            ])
            ->add('client', EntityType::class, [
                'class' => Client::class,
                'choice_label' => function(Client $client) {
                    return sprintf('%s (%s)', $client->getName(), $client->getId());
                },
                'query_builder' => function (EntityRepository $er) use ($user) {
                    return $er->createQueryBuilder('c')
                        ->where('c.user = :user')
                        ->setParameter('user', $user);

                },
                'label' => 'Client',
                'required' => true,

            ])
        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Invoice::class,
        ]);
    }
}