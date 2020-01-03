<?php

namespace App\Form;

use App\Entity\City;
use App\Inquiry\ValueObject\Inquiry;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InquiryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('city', EntityType::class, [
                'label' => 'Dans quelle commune / ville ?',
                'class' => City::class,
                'choice_label' => function (City $c) {
                    return "{$c->getName()} ({$c->getDepartment()})";
                }
            ])
            ->add('value', MoneyType::class, ['label' => "Quelle est la valeur du bien ?", 'attr' => ['placeholder' => 'Valeur du bien']])
            ->add('surface', NumberType::class, ['html5' => true, 'label' => "Quelle est la surface du bien (en m²) ?", 'attr' => ['placeholder' => 'Surface du bien']])
            ->add('taxesAvg', MoneyType::class, ['label' => "Combien payez vous d'impots chaque année (en moyenne, ces 3 dernières années) ?", 'attr' => ['placeholder' => "Impots en moyenne (sur 3 ans)"]]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Inquiry::class,
        ]);
    }
}
