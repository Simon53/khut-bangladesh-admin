<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\MainMenu;
use App\Models\Order;
use App\Models\Customer;

class HomeController extends Controller
{
    public function homeIndex()
    {
        // 1️⃣ Product Category Count
        $productCategories = MainMenu::count();

        // 2️⃣ Total Product Count
        $totalProducts = Product::count();

        $soldOutProducts = Product::where(function ($q) {
            $q->where('stock_status', 'out_of_stock')
              ->orWhere('sale_price', 'N')
              ->orWhereNull('sale_price');
        })->count();

        // 4️⃣ New Orders (status = 'pending' বা 'new')
        $newOrders = Order::whereIn('status', ['pending', 'new'])->count();

        // 5️⃣ Delivered Orders (delivery_status = 'delivered')
        $deliveredOrders = Order::where('delivery_status', 'delivered')->count();

        // 6️⃣ Delivery Pending Orders (delivery_status = 'pending')
        $deliveryPending = Order::where('delivery_status', 'pending')->count();

        // 7️⃣ Registered Customers
        $registeredCustomer = Customer::count();

        return view('home.home', compact(
            'productCategories',
            'totalProducts',
            'soldOutProducts',
            'newOrders',
            'deliveredOrders',
            'deliveryPending',
            'registeredCustomer'
        ));
    }
}
