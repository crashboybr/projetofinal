<?php

// src/Acme/StoreBundle/Entity/ProductRepository.php
namespace Aula\BackendBundle\Entity;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function getGradeById($id)
    {
        return $this->getEntityManager()
            ->createQuery(
                "SELECT p FROM AulaBackendBundle:Grade p where id = $id"
            )
            ->getResult();
    }
}