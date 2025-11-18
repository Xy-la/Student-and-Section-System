@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">DASHBOARD</h2>

        <!-- Summary Cards -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Students</h5>
                        <p class="card-text fs-3">{{ $totalStudents }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Total Sections</h5>
                        <p class="card-text fs-3">{{ $totalSections }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-info mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Active Transactions</h5>
                        <p class="card-text fs-3">{{ $activeTransactions }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Pending Transactions</h5>
                        <p class="card-text fs-3">{{ $pendingTransactions }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts -->
        <div class="row">
            <!-- Bar Chart -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Students per Section</div>
                    <div class="card-body">
                        <canvas id="studentsPerSectionChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Transactions Status</div>
                    <div class="card-body">
                        <canvas id="transactionStatusChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Students per Section (Bar Chart)
        const ctx1 = document.getElementById('studentsPerSectionChart').getContext('2d');
        new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: @json($studentsPerSection->pluck('sectionName')),
                datasets: [{
                    label: 'Students',
                    data: @json($studentsPerSection->pluck('students_count')),
                    backgroundColor: 'rgba(54, 162, 235, 0.6)'
                }]
            }
        });

        // Transactions Status (Pie Chart)
        const ctx2 = document.getElementById('transactionStatusChart').getContext('2d');
        new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: @json($transactionStatus->keys()),
                datasets: [{
                    data: @json($transactionStatus->values()),
                    backgroundColor: ['#28a745', '#ffc107', '#dc3545']
                }]
            }
        });
    </script>
@endsection