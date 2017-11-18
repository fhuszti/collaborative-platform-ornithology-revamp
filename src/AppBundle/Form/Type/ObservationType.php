<?php
namespace AppBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Form\Type\ImageType;
use AppBundle\Entity\Bird;

class ObservationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('bird', EntityType::class, array(
                    'label' => 'NOM DE L\'OISEAU',
                    'label_attr' => array(
                        'class' => 'col-xs-12 col-sm-4 control-label'
                    ),
                    'attr' => array(
                        'class' => 'form-control',
                        'autocomplete' => 'off'
                    ),
                    'class' => 'AppBundle:Bird',
                    'choice_label' => function (Bird $bird) {
                        $label = '';
                        
                        if ( !is_null($bird->getNomVern()) && $bird->getNomVern() !== '' ) {
                            $label .= '('.$bird->getNomVern().') ';
                        }

                        $label .= $bird->getLbNom();

                        return $label;
                    },
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                                  ->orderBy('u.nom_vern', 'DESC');
                    },
                    'placeholder' => 'Sélectionnez un oiseau',
                    'required' => true,
                ))
                ->add('date', DateType::class, array(
                    'required' => true,
                    'label' => "DATE",
                    'label_attr' => array(
                        'class' => 'col-xs-12 col-sm-4 control-label'
                    ),
                    'attr' => array(
                        'aria-required' => true,
                        'autocomplete' => 'off'
                    ),
                    'format' => 'dd/MM/yyyy',
                    'placeholder' => array(
                        'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour'
                    ),
                    'years' => range(1990,date('Y'))
                ))
                ->add('comment', TextareaType::class, array(
                    'required' => false,
                    'label' => "COMMENTAIRE (facultatif)",
                    'label_attr' => array(
                        'class' => 'col-xs-12 col-sm-4 control-label'
                    ),
                    'attr' => array(
                        'class' => 'form-control',
                        'aria-required' => false,
                        'autocomplete' => 'off'
                    ),
                ))
                ->add('image', ImageType::class, array(
                    'label' => 'IMAGE (facultatif)',
                    'label_attr' => array(
                        'class' => 'col-xs-12 col-sm-4 control-label'
                    ),
                    'required' => false,
                ))
                ->add('longitude', HiddenType::class)
                ->add('lattitude', HiddenType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Observation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'core_observation';
    }
}



 