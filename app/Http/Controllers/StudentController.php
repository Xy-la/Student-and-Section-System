<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Section;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of students with their sections.
     */
    public function index()
    {
        $students = Student::with('section')->get();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new student.
     */
    public function create()
    {
        $sections = Section::all();
        return view('students.create', compact('sections'));
    }

    /**
     * Store a newly created student in the database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'studentNumber' => 'required|string|max:9|unique:students,studentNumber',
            'lname' => 'required|string|max:150',
            'fname' => 'required|string|max:150',
            'mi' => 'nullable|string|max:2',
            'email' => 'required|email|max:150',
            'contactNumber' => 'required|string|max:20',
            'section_id' => 'nullable|exists:sections,id',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    /**
     * Show the form for editing the specified student.
     */
    public function edit(Student $student)
    {
        $sections = Section::all();
        return view('students.edit', compact('student', 'sections'));
    }

    /**
     * Update the specified student in the database.
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'studentNumber' => 'required|string|max:9|unique:students,studentNumber,' . $student->id,
            'lname' => 'required|string|max:150',
            'fname' => 'required|string|max:150',
            'mi' => 'nullable|string|max:2',
            'email' => 'required|email|max:150',
            'contactNumber' => 'required|string|max:20',
            'section_id' => 'nullable|exists:sections,id',
        ]);

        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified student from the database.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
