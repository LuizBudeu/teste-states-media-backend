<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadController extends Controller
{

    public function index()
    {
        return \App\Models\Lead::all();
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:leads,email',
            'telefone' => 'nullable|string|max:20',
            'kit_interesse' => 'required|in:1,3,5',
        ]);

        $lead = \App\Models\Lead::create($validated);

        return response()->json($lead, 201);
    }
}
