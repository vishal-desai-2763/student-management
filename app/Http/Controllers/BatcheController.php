<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Batche;
use Illuminate\View\View;

class BatcheController extends Controller
{

    public function index(): View
    {
        $batches = Batche::all();
        return view ('batches.index')->with('batches', $batches);
    }

 
    public function create(): View
    {
        return view('batches.create');
    }

  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Batche::create($input);
        return redirect('batche')->with('flash_message', 'Batche Addedd!');
    }

    public function show(string $id): View
    {
        $batche = Batche::find($id);
        return view('batches.show')->with('batches', $batche);
    }

    public function edit(string $id): View
    {
        $batche = Batche::find($id);
        return view('batches.edit')->with('batches', $batche);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $batche = Batche::find($id);
        $input = $request->all();
        $batche->update($input);
        return redirect('batche')->with('flash_message', 'batche Updated!');  
    }

    
    public function destroy(string $id): RedirectResponse
    {
        Batche::destroy($id);
        return redirect('batche')->with('flash_message', 'Batche deleted!'); 
    }
}