<?php
declare(strict_types=1);


namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class IndexForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->setMethod('PATCH');
        $builder
            ->add('test', TextType::class, [
                'disabled' => true,
                'label' => 'test',
            ]);
        ;
    }
}