<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = Section::all();
        return view('sections.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sectionName' => 'required|string|max:100',
            'course' => 'required|string|max:100',
            'year_level' => 'required|string|max:20',
        ]);

        try {
            Section::create($validated);
            return redirect()->route('sections.index')
                ->with('success', 'Section created successfully.');
        } catch (\Exception $e) {
            return back()->withInput()
                ->withErrors(['error' => 'Failed to create section: ' . $e->getMessage()]);
        }
    }

    /**
     * Show students inside a specific section.
     */
    public function show($id)
    {
        $section = Section::with('students')->findOrFail($id);
        return view('sections.show', compact('section'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
    {
        return view('sections.edit', compact('section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Section $section)
    {
        $validated = $request->validate([
            'sectionName' => 'required|string|max:100',
            'course' => 'required|string|max:100',
            'year_level' => 'required|string|max:20',
        ]);

        try {
            $section->update($validated);
            return redirect()->route('sections.index')
                ->with('success', 'Section updated successfully.');
        } catch (\Exception $e) {
            return back()->withInput()
                ->withErrors(['error' => 'Failed to update section: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        $section->delete();

        return redirect()->route('sections.index')
            ->with('success', 'Section deleted successfully.');
    }
}
