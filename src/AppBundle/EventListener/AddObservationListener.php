<?php
namespace AppBundle\EventListener;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Doctrine\ORM\Event\LifecycleEventArgs;
use AppBundle\Entity\Observation;

class AddObservationListener
{
    private $tokenStorage;

    const OBSERVATION_CLASS = Observation::class;





    public function __construct(TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }





    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->hydrateUserProperty($entity);
    }



    private function hydrateUserProperty($entity)
    {
        //if given entity is Observation entity, we attach the user ID to the entity
        if ( get_class($entity) === self::OBSERVATION_CLASS ) {
            $user = $this->tokenStorage->getToken()->getUser();

            $entity->setUser($user);
        }
    }
}
