<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactUsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fullName', TextType::class, [
                'label' => 'Nom complet'
            ])
            ->add('email', EmailType::class)
            ->add('phoneNumber', TelType::class, [
                'label' => 'Numéro de téléphone',
                'attr' => [
                    'pattern' => '[0-9]+',
                    'maxlength' => 10,
                    'minlength' => 10
                ]
            ])
            ->add('city', ChoiceType::class, [
                'label' => 'Ville',
                'choices' => [
                    'Choisissez une ville' => '',
                    'Agadir' => 'Agadir',
                    'Aït Melloul' => 'Aït Melloul',
                    'Al Hoceïma' => 'Al Hoceïma',
                    'Azrou' => 'Azrou',
                    'Beni Mellal' => 'Beni Mellal',
                    'Béni Nsar' => 'Béni Nsar',
                    'Benslimane' => 'Benslimane',
                    'Berrechid' => 'Berrechid',
                    'Boujdour' => 'Boujdour',
                    'Casablanca' => 'Casablanca',
                    'Chefchaouen' => 'Chefchaouen',
                    'Dakhla' => 'Dakhla',
                    'El Jadida' => 'El Jadida',
                    'Errachidia' => 'Errachidia',
                    'Essaouira' => 'Essaouira',
                    'Fès' => 'Fès',
                    'Guelmim' => 'Guelmim',
                    'Ifrane' => 'Ifrane',
                    'Inezgane' => 'Inezgane',
                    'Kénitra' => 'Kénitra',
                    'Khemisset' => 'Khemisset',
                    'Khénifra' => 'Khénifra',
                    'Khouribga' => 'Khouribga',
                    'Ksar El Kébir' => 'Ksar El Kébir',
                    'Larache' => 'Larache',
                    'Marrakech' => 'Marrakech',
                    'Martil' => 'Martil',
                    'Meknès' => 'Meknès',
                    'Mohammedia' => 'Mohammedia',
                    'Nador' => 'Nador',
                    'Ouarzazate' => 'Ouarzazate',
                    'Oued Zem' => 'Oued Zem',
                    'Oujda' => 'Oujda',
                    'Oulad Teïma' => 'Oulad Teïma',
                    'Rabat' => 'Rabat',
                    'Safi' => 'Safi',
                    'Salé' => 'Salé',
                    'Sefrou' => 'Sefrou',
                    'Settat' => 'Settat',
                    'Sidi Bennour' => 'Sidi Bennour',
                    'Sidi Ifni' => 'Sidi Ifni',
                    'Sidi Slimane' => 'Sidi Slimane',
                    'Skhirate' => 'Skhirate',
                    'Taroudant' => 'Taroudant',
                    'Taza' => 'Taza',
                    'Témara' => 'Témara',
                    'Tétouan' => 'Tétouan',
                    'Tiznit' => 'Tiznit',
                    'Zagora' => 'Zagora'
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label_attr' => [
                    'class' => 'my-label-class'
                ]
            ])
            ->add('choiceList', ChoiceType::class, [
                'label' => 'Choix',
                'choices' => [
                    'Choisissez une option' => '',
                    'Centre Kiné' => 'Centre Kiné',
                    'Patient' => 'Patient'
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label_attr' => [
                    'class' => 'my-label-class'
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
