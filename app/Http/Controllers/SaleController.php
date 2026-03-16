<?php

namespace App\Http\Controllers;

use App\Services\OrderService;
use App\Services\SaleService;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    protected $saleService;

    public function __construct(SaleService $saleService)
    {
        $this->saleService = $saleService;
    }

    public function create()
    {
        $sales = $this->saleService->getAllSale();
//        dd($sales->toArray());
        return view('sales.create',compact('sales'));
    }
}
