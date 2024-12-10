<?php

// app/Http/Controllers/OrderController.php
// app/Http/Controllers/OrderController.php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Store new order
    public function store(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'message' => 'required|string',
            'services' => 'required|array|min:1',
            'services.*' => 'string|in:Lawn Mowing,BBQ and Sheds,Landscaping,Spa and Pool,Planting',
        ]);
        $validated['user_id'] = $request->user()->id;
        // Create the order

        Order::create(
        $validated);
        return redirect()->route('contact')->with('success', 'Order placed successfully!');
    }

    // Show contact form and display orders
    public function show()
    {
        $orders = Order::query()
            ->where('user_id', request()
            ->user()->id)->orderBy('created_at', 'desc')->get();
        return view('lawn.Order', compact('orders'));
    }

    // Delete order
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->route('contact')->with('success', 'Order deleted successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('lawn.Edit', compact('order'));
    }

    // Update order
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $validated = $request->validate([
            'message' => 'required|string',
            'services' => 'required|array|min:1',
            'services.*' => 'string|in:Lawn Mowing,BBQ and Sheds,Landscaping,Spa and Pool,Planting',
        ]);

        $order->update([
            'message' => $validated['message'],
            'services' => $validated['services'],
        ]);

        return redirect()->route('contact')->with('success', 'Order updated successfully!');
    }
}

