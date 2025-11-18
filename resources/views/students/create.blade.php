@extends('layouts.app')

@section('content')
    <div class="card shadow-sm">
        <!-- HEADER -->
        <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white shadow-sm">
            <h3 class="mb-0 fw-bold text-uppercase">
                Add Student
            </h3>
            <a href="{{ route('students.index') }}" class="btn btn-light btn-sm fw-semibold">
                Back to Students
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

            <form action="{{ route('students.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold text-primary">ID Number</label>
                    <input type="text" name="studentNumber" class="form-control" placeholder="ex. 22102592"
                        value="{{ old('studentNumber') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold text-primary">Last Name</label>
                    <input type="text" name="lname" class="form-control" placeholder="Last Name" value="{{ old('lname') }}"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold text-primary">First Name</label>
                    <input type="text" name="fname" class="form-control" placeholder="First Name" value="{{ old('fname') }}"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold text-primary">Middle Initial</label>
                    <input type="text" name="mi" class="form-control" placeholder="M.I." value="{{ old('mi') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold text-primary">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="example@gmail.com"
                        value="{{ old('email') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold text-primary">Contact Number</label>
                    <input type="text" name="contactNumber" class="form-control" placeholder="ex. 09557200594"
                        value="{{ old('contactNumber') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold text-primary">Section</label>
                    <select name="section_id" class="form-select" required>
                        <option value="">-- Select Section --</option>
                        @foreach($sections as $section)
                            <option value="{{ $section->id }}" {{ old('section_id') == $section->id ? 'selected' : '' }}>
                                {{ $section->sectionName }} ({{ $section->course }} - {{ $section->year_level }})
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Buttons -->
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" class="btn btn-success fw-semibold">Save</button>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary fw-semibold">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection