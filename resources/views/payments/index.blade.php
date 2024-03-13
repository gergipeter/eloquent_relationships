@extends('layouts.app')

@section('content')
    <h1>Payments</h1>
        <!-- Create Button -->
        <a href="{{ route('payments.create') }}" class="btn btn-success">
            <i class="bi bi-plus"></i> Add Payment
        </a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student</th>
                    <th>Payment Date</th>
                    <th>Amount</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                    <tr>
                        <td>{{ $payment->id }}</td>
                        <td>{{ $payment->student->name }}</td>
                        <td>{{ $payment->payment_date }}</td>
                        <td>{{ $payment->amount }}<i class="bi bi-currency-dollar"></i></td>
                        <td>
                            <!-- Show Button -->
                            <a href="{{ route('payments.show', $payment) }}" class="btn btn-success btn-sm">
                                <i class="bi bi-eye"></i> Show
                            </a>
                            <!-- Edit Button -->
                            <a href="{{ route('payments.edit', $payment) }}" class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <!-- Delete Button -->
                            <form action="{{ route('payments.destroy', $payment) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this payment?')">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
