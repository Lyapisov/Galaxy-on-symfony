<?php

namespace App\Repository;

use App\Entity\PhotoGallery;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PhotoGallery|null find($id, $lockMode = null, $lockVersion = null)
 * @method PhotoGallery|null findOneBy(array $criteria, array $orderBy = null)
 * @method PhotoGallery[]    findAll()
 * @method PhotoGallery[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhotoGalleryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PhotoGallery::class);
    }
}
