@extends('layouts.app')

@section('content')
    <div class="card shadow-sm">
        <!-- HEADER -->
        <div class="card-header d-flex justify-content-between align-items-center bg-success text-white shadow-sm">
            <h3 class="mb-0 fw-bold text-uppercase">
                Students in {{ $section->sectionName }} ({{ $section->course }})
            </h3>
            <a href="{{ route('sections.index') }}" class="btn btn-light btn-sm fw-semibold">
                Back to Sections
            </a>
        </div>

        <!-- BODY -->
        <div class="card-body">
            @if($section->students->count() > 0)
                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle text-center">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 60px;">#</th>
                                <th style="width: 160px;">Student Number</th>
                                <th style="width: 260px;">Name</th>
                                <th style="width: 220px;">Email</th>
                                <th style="width: 160px;">Contact</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($section->students as $index => $student)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td class="fw-semibold">{{ $student->studentNumber }}</td>
                                    <td>{{ $student->lname }}, {{ $student->fname }} {{ $student->mi }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->contactNumber }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-info">No students found in this section.</div>
            @endif
        </div>
    </div>
@endsection