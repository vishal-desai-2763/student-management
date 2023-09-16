<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Payment;
use Illuminate\View\View;

class PaymentController extends Controller
{

    public function index(): View
    {
        $payments = Payment::all();
        return view ('payments.index')->with('payments', $payments);
    }

 
    public function create(): View
    {
        return view('payments.create');
    }

  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Payment::create($input);
        return redirect('payment')->with('flash_message', 'Payment Addedd!');
    }

    public function show(string $id): View
    {
        $payment = Payment::find($id);
        return view('payments.show')->with('payments', $payment);
    }

    public function edit(string $id): View
    {
        $payment = Payment::find($id);
        return view('payments.edit')->with('payments', $payment);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $teacher = Payment::find($id);
        $input = $request->all();
        $payment->update($input);
        return redirect('payment')->with('flash_message', 'payment Updated!');  
    }

    
    public function destroy(string $id): RedirectResponse
    {
        Payment::destroy($id);
        return redirect('payment')->with('flash_message', 'Payment deleted!'); 
    }
}