<?php

namespace App\Form;

use App\Entity\Rune;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RuneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mainStatValue')
            ->add('innateStatValue')
            ->add('grade')
            ->add('slot')
            ->add('level')
            ->add('atkPer')
            ->add('atkFlat')
            ->add('defPer')
            ->add('defFlat')
            ->add('hpPer')
            ->add('hpFlat')
            ->add('spd')
            ->add('acc')
            ->add('res')
            ->add('critRate')
            ->add('critDmg')
            ->add('createdAt')
            ->add('runeSet')
            ->add('rarity')
            ->add('mainStat')
            ->add('innateStat')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Rune::class,
        ]);
    }
}
