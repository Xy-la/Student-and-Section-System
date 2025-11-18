@extends('layouts.app')

@section('content')
    <div class="card shadow-sm">
        <!-- HEADER -->
        <div class="card-header d-flex justify-content-between align-items-center bg-success text-white shadow-sm">
            <h3 class="mb-0 fw-bold text-uppercase">
                Sections List
            </h3>
            <a href="{{ route('sections.create') }}" class="btn btn-light btn-sm fw-semibold">
                Add Section
            </a>
        </div>

        <!-- BODY -->
        <div class="card-body">

            <!-- LOWER YEARS -->
            <h4 class="fw-bold text-success">1st & 2nd Year</h4>
            <div class="table-responsive mb-4">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 60px;">#</th>
                            <th style="width: 220px;">Section Name</th>
                            <th style="width: 220px;">Course</th>
                            <th style="width: 120px;">Students</th>
                            <th style="width: 320px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($sections->whereIn('year_level', ['1st Year', '2nd Year']) as $index => $section)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td class="fw-semibold">{{ $section->sectionName }}</td>
                                <td>{{ $section->course }}</td>
                                <td>
                                    <span class="badge bg-primary">
                                        {{ $section->students->count() }}
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('sections.show', $section) }}" class="btn btn-sm btn-info">View</a>
                                        <a href="{{ route('sections.edit', $section) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('sections.destroy', $section) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this section?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-muted py-3">No lower year sections found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- UPPER YEARS -->
            <h4 class="fw-bold text-success">3rd & 4th Year</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 60px;">#</th>
                            <th style="width: 220px;">Section Name</th>
                            <th style="width: 220px;">Course</th>
                            <th style="width: 120px;">Students</th>
                            <th style="width: 320px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($sections->whereIn('year_level', ['3rd Year', '4th Year']) as $index => $section)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td class="fw-semibold">{{ $section->sectionName }}</td>
                                <td>{{ $section->course }}</td>
                                <td>
                                    <span class="badge bg-primary">
                                        {{ $section->students->count() }}
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('sections.show', $section) }}" class="btn btn-sm btn-info">View</a>
                                        <a href="{{ route('sections.edit', $section) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('sections.destroy', $section) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this section?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-muted py-3">No upper year sections found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection