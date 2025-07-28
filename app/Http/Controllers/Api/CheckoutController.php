<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function process(Request $request)
    {
        $userId = 1;

        // Validate request data
        $validated = $request->validate([
            'payment_method' => 'required|string|in:COD,Online',
            'payment_id' => 'nullable|string|required_if:payment_method,Online',
        ]);

        // Fetch all cart items
        $cartItems = CartItem::with('product')->where('user_id', $userId)->get();

        if ($cartItems->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Cart is empty'
            ], 400);
        }

        // Calculate total
        $total = $cartItems->sum(function ($item) {
            return $item->quantity * $item->product->price;
        });

        // Get validated values
        $paymentMethod = $validated['payment_method'];
        $paymentId = $paymentMethod === 'COD'
            ? 'COD-' . strtoupper(uniqid())
            : $validated['payment_id'];

        // Create order
        $order = Order::create([
            'user_id' => $userId,
            'total' => $total,
            'payment_method' => $paymentMethod,
            'payment_id' => $paymentId,
            'status' => 'pending',
        ]);

        // Create order items
        foreach ($cartItems as $item) {
            $order->items()->create([
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->product->price,
            ]);
        }

        // Clear cart
        CartItem::where('user_id', $userId)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Order placed successfully',
            'order_id' => $order->id,
        ]);
    }
}
