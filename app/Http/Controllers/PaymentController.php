<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::paginate(10);
        return view('payments.index', ['payments' => $payments]);
    }

    public function create()
    {
        return view('payments.create');
    }

    public function store(Request $request)
    {
         $request->validate([
            'student_id' => 'required|exists:students,id',
            'payment_date' => 'required|date',
            'amount' => 'required|numeric|min:0',
        ]);

        Payment::create($request->all());

        return redirect()->route('payments.index');
    }

    public function show(Payment $payment)
    {
        return view('payments.show', ['payment' => $payment]);
    }

    public function edit(Payment $payment)
    {
        return view('payments.edit', ['payment' => $payment]);
    }

    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'payment_date' => 'required|date',
            'amount' => 'required|numeric|min:0',
        ]);

        $payment->update($request->all());

        return redirect()->route('payments.index');
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payments.index');
    }
}
