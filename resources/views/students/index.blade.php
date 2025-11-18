@extends('layouts.app')

@section('content')
    <div class="card shadow-sm">
        <!-- HEADER -->
        <div class="card-header d-flex justify-content-between align-items-center bg-primary text-white shadow-sm">
            <h3 class="mb-0 fw-bold text-uppercase">
                Students List
            </h3>
            <a href="{{ route('students.create') }}" class="btn btn-light btn-sm fw-semibold">
                Add Student
            </a>
        </div>

        <!-- BODY -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-light">
                        <tr>
                            <th class="text-primary fw-bold" style="width: 60px;">#</th>
                            <th class="text-primary fw-bold" style="width: 150px;">ID Number</th>
                            <th class="text-primary fw-bold" style="width: 220px;">Name</th>
                            <th class="text-primary fw-bold" style="width: 200px;">Email</th>
                            <th class="text-primary fw-bold" style="width: 150px;">Contact</th>
                            <th class="text-primary fw-bold" style="width: 220px;">Section</th>
                            <th class="text-primary fw-bold" style="width: 250px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($students as $index => $student)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td class="fw-semibold">{{ $student->studentNumber }}</td>
                                <td>{{ $student->lname }}, {{ $student->fname }} {{ $student->mi }}</td>
                                <td>{{ $student->email ?? '—' }}</td>
                                <td>{{ $student->contactNumber ?? '—' }}</td>
                                <td>
                                    @if($student->section)
                                        {{ $student->section->sectionName }}
                                        ({{ $student->section->course }} - {{ $student->section->year_level }})
                                    @else
                                        <span class="text-muted">None</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('students.edit', $student) }}" class="btn btn-sm btn-warning">
                                            Edit
                                        </a>
                                        <form action="{{ route('students.destroy', $student) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this student?')">
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
                                <td colspan="7" class="text-muted py-3">
                                    No students found. <a href="{{ route('students.create') }}">Add one now</a>.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection