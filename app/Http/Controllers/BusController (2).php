<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;

class BusController211  
{
    public function index()
    {
        $buses = Bus::all();
        return view('buses.index', compact('buses'));
    }

    public function create()
    {
        return view('buses.create');
    }

    public function store(Request $request)
    {
        $bus = Bus::create($request->all());
        return redirect()->route('buses.index');
    }

    public function show($id)
    {
        $bus = Bus::findOrFail($id);
        return view('buses.show', compact('bus'));
    }

    public function edit($id)
    {
        $bus = Bus::findOrFail($id);
        return view('buses.edit', compact('bus'));
    }

    public function update(Request $request, $id)
    {
        $bus = Bus::findOrFail($id);
        $bus->update($request->all());
        return redirect()->route('buses.index');
    }

    public function destroy($id)
    {
        $bus = Bus::findOrFail($id);
        $bus->delete();
        return redirect()->route('buses.index');
    }
}
