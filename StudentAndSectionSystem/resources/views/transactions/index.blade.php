@extends('layouts.app')

@section('content')
    <div class="card shadow-sm">
        <!-- HEADER -->
        <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white shadow-sm">
            <h3 class="mb-0 fw-bold text-uppercase">
                Transactions List
            </h3>
            <a href="{{ route('transactions.create') }}" class="btn btn-light btn-sm fw-semibold">
                Add Transaction
            </a>
        </div>

        <!-- BODY -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-light">
                        <tr>
                            <th class="text-primary fw-bold" style="width: 60px;">#</th>
                            <th class="text-primary fw-bold">Student</th>
                            <th class="text-primary fw-bold">Section</th>
                            <th class="text-primary fw-bold">Type</th>
                            <th class="text-primary fw-bold">Status</th>
                            <th class="text-primary fw-bold">Date</th>
                            <th class="text-primary fw-bold" style="width: 200px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transactions as $index => $transaction)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td class="fw-semibold">
                                    {{ $transaction->student->lname }}, {{ $transaction->student->fname }}
                                </td>
                                <td>
                                    {{ $transaction->section->sectionName ?? '—' }}
                                </td>
                                <td>
                                    {{ $transaction->transaction_type }}
                                </td>
                                <td>
                                    @if($transaction->status === 'Approved')
                                        <span class="badge bg-success px-3 py-2">{{ $transaction->status }}</span>
                                    @elseif($transaction->status === 'Pending')
                                        <span class="badge bg-warning text-dark px-3 py-2">{{ $transaction->status }}</span>
                                    @else
                                        <span class="badge bg-danger px-3 py-2">{{ $transaction->status }}</span>
                                    @endif
                                </td>
                                <td>{{ $transaction->created_at->format('Y-m-d H:i') }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('transactions.edit', $transaction->id) }}"
                                            class="btn btn-sm btn-warning">
                                            Edit
                                        </a>
                                        <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this transaction?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted py-3">
                                    No transactions yet. <a href="{{ route('transactions.create') }}" class="fw-bold">Add one
                                        now!</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection