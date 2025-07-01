<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subscription');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'plan' => 'required|string',
            'meal_types' => 'required|array|min:1',
            'delivery_days' => 'required|array|min:1',
            'allergies' => 'nullable|string',
            'total_price' => 'required|numeric'
        ]);

        Subscription::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'plan' => $data['plan'],
            'meal_types' => json_encode($data['meal_types']),
            'delivery_days' => json_encode($data['delivery_days']),
            'allergies' => $data['allergies'],
            'total_price' => $data['total_price']
        ]);

        return redirect()->route('subscribe.form')->with('success', 'Langganan berhasil dikirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
