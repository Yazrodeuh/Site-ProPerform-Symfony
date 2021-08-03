<?php

namespace App\Repository;

use App\Entity\Actualite;
use App\Entity\Rubriqueformation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Class ActualiteRepository
 * @package App\Repository
 * @method Actualite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Actualite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Actualite[]    findAll()
 * @method Actualite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class ActualiteRepository extends ServiceEntityRepository{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Actualite::class);
    }


    public function allActualites(string $offset, int $limit): QueryBuilder
    {

       return $this->createQueryBuilder('a')
            ->select('a')
            ->from(Actualite::class, 'a')
            ->join(Rubriqueformation::class, 'r')
            ->orderBy('a.dateactualite', 'DESC')
            ->setFirstResult($offset)
            ->setMaxResults($limit);

    }



}