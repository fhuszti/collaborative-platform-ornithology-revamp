<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, array(
                    'label' => 'NOM',
                    'label_attr' => array(
                        'class' => 'col-xs-12 col-sm-5 control-label'
                    ),
                    'attr' => array(
                        'class' => 'form-control input-lg',
                        'placeholder' => 'Jean Dupont',
                        'minlength' => 2,
                        'maxlength' => 100,
                        'aria-required' => true,
                        'autocomplete' => 'off'
                    )
                ))
                ->add('email', EmailType::class, array(
                    'label' => 'EMAIL',
                    'label_attr' => array(
                        'class' => 'col-xs-12 col-sm-5 control-label'
                    ),
                    'attr' => array(
                        'class' => 'form-control input-lg',
                        'placeholder' => 'exemple@email.fr',
                        'aria-required' => true,
                        'autocomplete' => 'off'
                    )
                ))
                ->add('title', TextType::class, array(
                    'label' => 'OBJET',
                    'label_attr' => array(
                        'class' => 'col-xs-12 col-sm-5 control-label'
                    ),
                    'attr' => array(
                        'class' => 'form-control input-lg',
                        'placeholder' => 'Sujet',
                        'minlength' => 2,
                        'maxlength' => 255,
                        'aria-required' => true,
                        'autocomplete' => 'off'
                    )
                ))
                ->add('content', TextareaType::class, array(
                    'label' => 'MESSAGE',
                    'label_attr' => array(
                        'class' => 'col-xs-12 col-sm-5 control-label'
                    ),
                    'attr' => array(
                        'class' => 'form-control input-lg',
                        'placeholder' => 'Votre message',
                        'minlength' => 1,
                        'aria-required' => true,
                        'autocomplete' => 'off'
                    )
                ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Email'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_email';
    }
}
