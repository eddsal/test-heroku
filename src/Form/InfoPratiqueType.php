<?php


namespace App\Form;


use App\Entity\InfoPratique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;


class InfoPratiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rendez_vous',DateType::class,[
                'widget' => 'single_text',
                'placeholder' => 'Select a value',
                'format' => 'yyyy-MM-dd',
            ])

            ->add('fin_sejour',DateType::class,[
                'widget' => 'single_text',
                'placeholder' => 'Select a value',
                'format' => 'yyyy-MM-dd',
            ])
            
            ->add('hebergement')
            ->add('repas')
            ->add('covid19')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => InfoPratique::class,
        ]);
    }
}