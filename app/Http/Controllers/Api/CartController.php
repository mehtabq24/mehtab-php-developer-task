<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $userId = 1; // hardcoded for now

        $cartItems = CartItem::with('product.images')->where('user_id', $userId)->get();

        if ($cartItems->isEmpty()) {
            return response()->json(['success' => true, 'message' => 'Cart is empty', 'items' => []]);
        }

        $items = [];
        $totalAmount = 0;

        foreach ($cartItems as $item) {
            $price = $item->product->price;
            $quantity = $item->quantity;
            $subtotal = $price * $quantity;
            $totalAmount += $subtotal;

            $items[] = [
                'product_id' => $item->product_id,
                'name' => $item->product->name,
                'price' => $price,
                'quantity' => $quantity,
                'subtotal' => $subtotal,
                'image_url' => $item->product->images->first()
                    ? asset('storage/' . $item->product->images->first()->image_path)
                    : null,
            ];
        }

        return response()->json([
            'success' => true,
            'user_id' => $userId,
            'total_items' => $cartItems->count(),
            'total_amount' => $totalAmount,
            'items' => $items
        ]);
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'nullable|integer|min:1'
        ]);

        $cartItem = CartItem::updateOrCreate(
            [
                'user_id' => 1, // hardcoded
                'product_id' => $request->product_id,
            ],
            [
                'quantity' => DB::raw("quantity + " . ($request->quantity ?? 1))
            ]
        );

        return response()->json(['success' => true, 'message' => 'Product added to cart', 'data' => $cartItem]);
    }

    public function updateQuantity(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $cartItem = CartItem::where('user_id', 1)->where('product_id', $request->product_id)->first();

        if (!$cartItem) {
            return response()->json(['success' => false, 'message' => 'Item not found'], 404);
        }

        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        return response()->json(['success' => true, 'message' => 'Quantity updated', 'data' => $cartItem]);
    }

    public function remove(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        CartItem::where('user_id', 1)->where('product_id', $request->product_id)->delete();

        return response()->json(['success' => true, 'message' => 'Item removed from cart']);
    }
}
