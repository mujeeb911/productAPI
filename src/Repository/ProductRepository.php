<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Product>
 */
class ProductRepository extends ServiceEntityRepository
{
    private array $products;
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);

        $this->products = [
            1 => new Product(1, 'Laptop', 1200.00),
            2 => new Product(2, 'Mouse', 25.00),
        ];
    }

    public function findOneById(int $id): ?Product
    {
        return $this->products[$id] ?? null;
    }
}
