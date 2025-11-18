@extends('layouts.app')

@section('content')
    <div class="card shadow-sm">
        <!-- HEADER -->
        <div class="card-header d-flex justify-content-between align-items-center bg-success text-white shadow-sm">
            <h3 class="mb-0 fw-bold text-uppercase">
                Edit Section
            </h3>
            <a href="{{ route('sections.index') }}" class="btn btn-light btn-sm fw-semibold">
                Back to Sections
            </a>
        </div>

        <!-- BODY -->
        <div class="card-body">
            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('sections.update', $section) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Section Name -->
                <div class="mb-3">
                    <label for="sectionName" class="form-label fw-semibold text-success">Section Name</label>
                    <input type="text" name="sectionName" id="sectionName" class="form-control"
                        value="{{ old('sectionName', $section->sectionName) }}" required>
                </div>

                <!-- Course -->
                <div class="mb-3">
                    <label for="course" class="form-label fw-semibold text-success">Course</label>
                    <input type="text" name="course" id="course" class="form-control"
                        value="{{ old('course', $section->course) }}" required>
                </div>

                <!-- Year Level -->
                <div class="mb-3">
                    <label for="year_level" class="form-label fw-semibold text-success">Year Level</label>
                    <select name="year_level" id="year_level" class="form-select" required>
                        <option value="">-- Select Year Level --</option>
                        <option value="1st Year" {{ old('year_level', $section->year_level) == '1st Year' ? 'selected' : '' }}>1st Year</option>
                        <option value="2nd Year" {{ old('year_level', $section->year_level) == '2nd Year' ? 'selected' : '' }}>2nd Year</option>
                        <option value="3rd Year" {{ old('year_level', $section->year_level) == '3rd Year' ? 'selected' : '' }}>3rd Year</option>
                        <option value="4th Year" {{ old('year_level', $section->year_level) == '4th Year' ? 'selected' : '' }}>4th Year</option>
                    </select>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" class="btn btn-success fw-semibold">Update</button>
                    <a href="{{ route('sections.index') }}" class="btn btn-secondary fw-semibold">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection