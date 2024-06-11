<?php

namespace App\Repository;

use App\Entity\Horario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @extends ServiceEntityRepository<Horario>
 *
 * @method Horario|null find($id, $lockMode = null, $lockVersion = null)
 * @method Horario|null findOneBy(array $criteria, array $orderBy = null)
 * @method Horario[]    findAll()
 * @method Horario[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HorarioRepository extends ServiceEntityRepository
{
    private $em;
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $entityM )
    {
        parent::__construct($registry, Horario::class);
        $this->em = $entityM;
    }

    //    /**
    //     * @return Horario[] Returns an array of Horario objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('h')
    //            ->andWhere('h.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('h.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Horario
    //    {
    //        return $this->createQueryBuilder('h')
    //            ->andWhere('h.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    public function findHorariosByParadaSublineaDireccion($idSublinea,$idParada, $direccion)
    {
     $query = $this->em->createQuery("SELECT ho.id, ho.hora, ho.tipo FROM App\Entity\Horario ho JOIN ho.sublineasParadasHorarios sub JOIN sub.parada pa JOIN sub.sublinea sl WHERE sl.id = ?1 and pa.id = ?2 and sub.direccion = ?3");
     $query->setParameter(1, $idSublinea);
     $query->setParameter(2, $idParada);
     $query->setParameter(3, $direccion);
     return $query->getResult();
    }

    public function findHorariosByParadaSublinea($idParada, $idSublinea)
    {
     $query = $this->em->createQuery("SELECT DISTINCT ho.id, ho.hora, ho.tipo FROM App\Entity\Horario ho JOIN ho.sublineasParadasHorarios sub JOIN sub.parada pa JOIN sub.sublinea sl WHERE pa.id = ?1 and sl.id = ?2");
     $query->setParameter(1, $idParada);
     $query->setParameter(2, $idSublinea);
     return $query->getResult();
    }

}
