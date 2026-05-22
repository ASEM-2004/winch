<?php

namespace App\Http\Controllers;
use App\Models\Customer; 
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index1()
    {
        $customer = Customer::findOrFail(1); 
        
        $paidOrders  = $customer->orders()->where('status', 'paid')->get();   
        $totalSum    = $customer->orders()->sum('total');          
        // $latestOrder = $customer->orders()->latest()->first(); 
        
        return [
            'customer_info' => $customer,
            'paid_orders'   => $paidOrders,
            'total_spent'   => $totalSum,
            // 'latest_order'  => $latestOrder
        ];
    }
}
