@extends('layouts.app')

@section('content')
    <div class="card shadow-sm">
        <!-- HEADER -->
        <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white shadow-sm">
            <h3 class="mb-0 fw-bold text-uppercase">
                Edit Transaction
            </h3>
            <a href="{{ route('transactions.index') }}" class="btn btn-light btn-sm fw-semibold">
                Back to Transactions
            </a>
        </div>

        <!-- BODY -->
        <div class="card-body">
            <!-- Show validation errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Edit form -->
            <form action="{{ route('transactions.update', $transaction->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Student -->
                <div class="mb-3">
                    <label for="student_id" class="form-label fw-semibold text-primary">Student</label>
                    <select name="student_id" id="student_id" class="form-select" required>
                        <option value="">-- Select Student --</option>
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}" {{ $transaction->student_id == $student->id ? 'selected' : '' }}>
                                {{ $student->fname }} {{ $student->lname }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Transaction Type -->
                <div class="mb-3">
                    <label for="transaction_type" class="form-label fw-semibold text-primary">Transaction Type</label>
                    <select name="transaction_type" id="transaction_type" class="form-select" required>
                        <option value="Enroll" {{ $transaction->transaction_type == 'Enroll' ? 'selected' : '' }}>Enroll
                        </option>
                        <option value="Drop" {{ $transaction->transaction_type == 'Drop' ? 'selected' : '' }}>Drop</option>
                        <option value="Transfer" {{ $transaction->transaction_type == 'Transfer' ? 'selected' : '' }}>Transfer
                        </option>
                    </select>
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label for="status" class="form-label fw-semibold text-primary">Status</label>
                    <select name="status" id="status" class="form-select" required>
                        <option value="Pending" {{ $transaction->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                        <option value="Approved" {{ $transaction->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                        <option value="Cancelled" {{ $transaction->status == 'Cancelled' ? 'selected' : '' }}>Cancelled
                        </option>
                    </select>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" class="btn btn-primary fw-semibold">Update</button>
                    <a href="{{ route('transactions.index') }}" class="btn btn-secondary fw-semibold">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection