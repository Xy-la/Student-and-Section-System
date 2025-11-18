@extends('layouts.app')

@section('content')
    <div class="card shadow-sm">
        <!-- HEADER -->
        <div class="card-header d-flex justify-content-between align-items-center bg-success text-white shadow-sm">
            <h4 class="mb-0 fw-bold text-uppercase">
                Add Section
            </h4>
        </div>

        <!-- BODY -->
        <div class="card-body">
            <form action="{{ route('sections.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="sectionName" class="form-label">Section Name</label>
                    <input type="text" name="sectionName" id="sectionName" class="form-control" placeholder="" required>
                </div>

                <div class="mb-3">
                    <label for="course" class="form-label">Course</label>
                    <input type="text" name="course" id="course" class="form-control" placeholder="" required>
                </div>

                <!-- Year Level Dropdown -->
                <div class="mb-3">
                    <label for="year_level" class="form-label">Year Level</label>
                    <select name="year_level" id="year_level" class="form-select" required>
                        <option value="">-- Select Year Level --</option>
                        <option value="1st Year">1st Year</option>
                        <option value="2nd Year">2nd Year</option>
                        <option value="3rd Year">3rd Year</option>
                        <option value="4th Year">4th Year</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Save</button>
                <a href="{{ route('sections.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
@endsection