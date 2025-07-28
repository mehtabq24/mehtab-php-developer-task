<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalSales = Order::where('payment_status', '!=', 'cancelled')->sum('total');
        $cancelledOrders = Order::where('payment_status', 'cancelled')->count();
        $newCustomers = User::count();

        $topProduct = DB::table('order_items')
            ->select('product_id', DB::raw('SUM(quantity) as total_qty'))
            ->groupBy('product_id')
            ->orderByDesc('total_qty')
            ->first();

        $topProductName = $topProduct ? Product::find($topProduct->product_id)->name : 'N/A';
        $topProductPercentage = $topProduct
            ? round(($topProduct->total_qty / DB::table('order_items')->sum('quantity')) * 100, 2)
            : 0;

        return view('admin.dashboard', compact(
            'totalSales',
            'cancelledOrders',
            'newCustomers',
            'topProductName',
            'topProductPercentage'
        ));
    }
}
