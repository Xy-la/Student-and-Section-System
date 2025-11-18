@extends('layouts.app')

@section('content')
    <div class="card shadow-sm">
        <!-- HEADER -->
        <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white shadow-sm">
            <h3 class="mb-0 fw-bold text-uppercase">
                Edit Student
            </h3>
            <a href="{{ route('students.index') }}" class="btn btn-light btn-sm fw-semibold">
                Back to List
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

            <form action="{{ route('students.update', $student) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-semibold">ID Number</label>
                    <input type="text" name="studentNumber" class="form-control"
                        value="{{ old('studentNumber', $student->studentNumber) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Last Name</label>
                    <input type="text" name="lname" class="form-control" value="{{ old('lname', $student->lname) }}"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">First Name</label>
                    <input type="text" name="fname" class="form-control" value="{{ old('fname', $student->fname) }}"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Middle Initial</label>
                    <input type="text" name="mi" class="form-control" value="{{ old('mi', $student->mi) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $student->email) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Contact Number</label>
                    <input type="text" name="contactNumber" class="form-control"
                        value="{{ old('contactNumber', $student->contactNumber) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Section</label>
                    <select name="section_id" class="form-select" required>
                        <option value="">-- Select Section --</option>
                        @foreach($sections as $section)
                            <option value="{{ $section->id }}" {{ old('section_id', $student->section_id) == $section->id ? 'selected' : '' }}>
                                {{ $section->sectionName }} ({{ $section->course }} - {{ $section->year_level }})
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" class="btn btn-primary fw-semibold">Update</button>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary fw-semibold">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection