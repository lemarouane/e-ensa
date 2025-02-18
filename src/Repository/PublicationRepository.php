<?php

namespace App\Repository;

use App\Entity\Publication;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PublicationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Publication::class);
    }

    public function findEmptyAuthorNames()
    {
        $conn = $this->getEntityManager()->getConnection();
    
        // Use raw SQL query to check for empty or null author_names field
        $sql = "SELECT * FROM publication WHERE author_names IS NULL OR author_names = '[]' OR JSON_LENGTH(author_names) = 0";
        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery()->fetchAllAssociative();
    
        // Now we need to map the raw result back to Publication entities
        return $this->getEntityManager()->getRepository(Publication::class)->findBy(['id' => array_column($result, 'id')]);
    }
    
    
    
    
    public function countEmptyAuthorNames()
    {
        $conn = $this->getEntityManager()->getConnection();
        
        // Update the count query to reflect the same checks.
        $sql = "SELECT COUNT(*) as count FROM publication WHERE author_names IS NULL OR author_names = '[]' OR JSON_LENGTH(author_names) = 0";
        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery()->fetchAssociative();
        
        return (int) $result['count'];
    }


    
    
}