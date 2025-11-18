@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Transaction</h2>

        <!-- Show validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('transactions.store') }}" method="POST">
            @csrf

            <!-- Student -->
            <div class="mb-3">
                <label for="student_id" class="form-label">Student</label>
                <select name="student_id" id="student_id" class="form-select" onchange="setSection(this)" required>
                    <option value="">-- Select Student --</option>
                    @foreach ($students as $student)
                        <option value="{{ $student->id }}" data-section="{{ $student->section_id }}">
                            {{ $student->lname }}, {{ $student->fname }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Section -->
            <div class="mb-3">
                <label for="section_id" class="form-label">Section</label>
                <select name="section_id" id="section_id" class="form-select" required>
                    <option value="">-- Select Section --</option>
                    @foreach ($sections as $section)
                        <option value="{{ $section->id }}">{{ $section->sectionName }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Transaction Type -->
            <div class="mb-3">
                <label for="transaction_type" class="form-label">Transaction Type</label>
                <select name="transaction_type" id="transaction_type" class="form-select" required>
                    <option value="Enroll">Enroll</option>
                    <option value="Drop">Drop</option>
                    <option value="Transfer">Transfer</option>
                </select>
            </div>

            <!-- Status -->
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-select" required>
                    <option value="Pending">Pending</option>
                    <option value="Approved">Approved</option>
                    <option value="Cancelled">Cancelled</option>
                </select>
            </div>

            <!-- Buttons -->
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('transactions.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script>
        function setSection(select) {
            let selectedStudent = select.options[select.selectedIndex];
            let sectionId = selectedStudent.getAttribute('data-section');
            if (sectionId) {
                document.getElementById('section_id').value = sectionId;
            }
        }
    </script>
@endsection