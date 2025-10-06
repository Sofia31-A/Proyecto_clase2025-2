<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
// ELOQUENT = ORM

class SaleController extends Controller
{
    
    public function index()
    {
        $sales = Sale::all();
        return view('sales') -> with('sales', $sales);
    }

    public function create()
    {
        return view('create_sale');
    }

    public function store(Request $request)
    {
        $sale = new Sale();
        $sale->name = $request->test;
        $sale->save();
        return redirect()->route('sales.index');
    }

    public function show(string $id)
    {
        
    }

    public function edit(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
    
    }

    public function destroy(string $id)
    {
    
    }
}
