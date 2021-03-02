<?php

namespace App\Form;

use App\Entity\Eleve;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class EleveType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class,
            [
            'required'=>true,
            'attr' =>
                [
                    'class' => 'titreInput'
                ],
                'label_attr'=>
                    ['class'=>'labelInput',
                'id'=>'labelTitre'
                ]
            ])
            ->add('prenom')
            ->add('classe')
            ->add('codeBarre')
            ->add('codeRFID')
            ->add('image')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Eleve::class,
        ]);
    }
}
