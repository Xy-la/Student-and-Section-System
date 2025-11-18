@extends('layouts.app')

@section('content')
    <!-- HEADER -->
    <h2 class="mb-4 fw-bold text-uppercase text-primary">DASHBOARD</h2>

    <!-- Summary Cards -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary shadow-sm">
                <div class="card-body text-center">
                    <h5 class="fw-bold text-uppercase">Total Students</h5>
                    <h2 class="fw-bold">{{ $totalStudents }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-success shadow-sm">
                <div class="card-body text-center">
                    <h5 class="fw-bold text-uppercase">Total Sections</h5>
                    <h2 class="fw-bold">{{ $totalSections }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-white bg-info shadow-sm">
                <div class="card-body text-center">
                    <h5 class="fw-bold text-uppercase">Active Transactions</h5>
                    <h2 class="fw-bold">{{ $activeTransactions }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-dark bg-warning shadow-sm">
                <div class="card-body text-center">
                    <h5 class="fw-bold text-uppercase">Pending Transactions</h5>
                    <h2 class="fw-bold">{{ $pendingTransactions }}</h2>
                </div>
            </div>
        </div>
    </div>
@endsection