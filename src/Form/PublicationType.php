<?php

namespace App\Form;

use App\Entity\Publication;
use App\Entity\Personnel;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PublicationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre de la publication',
                'attr' => ['class' => 'form-control']
            ])
            ->add('aggregationType', ChoiceType::class, [
                'label' => 'Type de publication',
                'choices' => [
                    'Book Series' => 'Book Series',
                    'Journal' => 'Journal',
                    'Conference Proceeding' => 'Conference Proceeding',
                    'Book' => 'Book'
                ],
                'placeholder' => 'Sélectionner un type',
                'attr' => ['class' => 'form-select']
            ])
            ->add('publicationName', TextType::class, [
                'label' => 'Nom de la publication',
                'attr' => ['class' => 'form-control']
            ])
            ->add('publisher', TextType::class, [
                'label' => 'Éditeur',
                'attr' => ['class' => 'form-control']
            ])
            ->add('pageRange', TextType::class, [
                'label' => 'Plage de pages',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('coverDate', TextType::class, [
                'label' => 'Date de publication (YYYY-MM-DD)',
                'required' => false,
                'attr' => ['class' => 'form-control', 'placeholder' => 'YYYY-MM-DD'],
            ])
            ->add('abstract', TextareaType::class, [
                'label' => 'Résumé',
                'required' => false,
                'attr' => ['class' => 'form-control', 'rows' => 4]
            ])
            ->add('authorNames', TextType::class, [
                'label' => 'Auteurs (séparés par une virgule)',
                'mapped' => false, // ❗ Prevent Symfony from auto-mapping
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: Jean Dupont, Marie Curie']
            ])
            ->add('authorIds', TextType::class, [
                'label' => 'Identifiants des auteurs (séparés par une virgule)',
                'mapped' => false, // ❗ Prevent Symfony from auto-mapping
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ex: 12345, 67890']
            ])
            ->add('organization', TextType::class, [
                'label' => 'Organisation',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('creator', TextType::class, [
                'label' => 'Créateur',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('year', TextType::class, [
                'label' => 'Année',
                'attr' => ['class' => 'form-control']
            ])
            ->add('sourceTitle', TextType::class, [
                'label' => 'Source',
                'attr' => ['class' => 'form-control']
            ])
            ->add('volume', TextType::class, [
                'label' => 'Volume',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('issue', TextType::class, [
                'label' => 'Issue',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('artNo', TextType::class, [
                'label' => 'Numéro d\'article (DOI)',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('pageStart', TextType::class, [
                'label' => 'Page de début',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('pageEnd', TextType::class, [
                'label' => 'Page de fin',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('pageCount', TextType::class, [
                'label' => 'Nombre de pages',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('plateforme', TextType::class, [
                'label' => 'Plateforme',
                'required' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('personnel', EntityType::class, [
                'class' => Personnel::class,
                'choice_label' => 'nom',
                'label' => 'Chercheur',
                'attr' => ['class' => 'form-select'],
                'placeholder' => 'Sélectionner un chercheur',
                'disabled' => true, // Personnel should be auto-filled and not editable
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Publication::class,
        ]);
    }
}
