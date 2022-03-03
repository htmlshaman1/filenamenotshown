<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;




class UploadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('file', FileType::class, 
            ['label' => 'File Name',
            'constraints' => new File([
              'maxSize' => '1024k',
              'mimeTypes' => [
                'img/png',
                'img/jpeg',
              'mimeTypeMessage' => 'You can only upload images'  
              ],
              
           
            
            ])
        ]);
       
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
