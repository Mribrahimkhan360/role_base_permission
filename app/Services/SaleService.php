<?php


namespace App\Services;


use App\Repositories\Contracts\ProductRepositoryInterface;

class SaleService
{
    protected $saleService;
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository     = $productRepository;
    }

    public function index()
    {

    }

    public function getAllSale()
    {
        return $this->productRepository->all();
    }
}
