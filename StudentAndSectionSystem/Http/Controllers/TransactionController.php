<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Student;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['student', 'section'])->latest()->get();
        return view('transactions.index', compact('transactions'));
    }

    public function create()
    {
        // Load students along with their section
        $students = Student::with('section')->get();
        $sections = Section::all();
        return view('transactions.create', compact('students', 'sections'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'student_id' => 'required|exists:students,id',
            'section_id' => 'nullable|exists:sections,id',
            'transaction_type' => 'required|in:Enroll,Drop,Transfer',
            'status' => 'required|in:Pending,Approved,Cancelled',
        ]);

        DB::beginTransaction();
        try {
            Transaction::create($data);
            DB::commit();
            return redirect()->route('transactions.index')->with('success', 'Transaction created.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Failed: ' . $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        $students = Student::all();
        $sections = Section::all();
        return view('transactions.edit', compact('transaction', 'students', 'sections'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'student_id' => 'required|exists:students,id',
            'section_id' => 'nullable|exists:sections,id',
            'transaction_type' => 'required|in:Enroll,Drop,Transfer',
            'status' => 'required|in:Pending,Approved,Cancelled',
        ]);

        DB::beginTransaction();
        try {
            $transaction = Transaction::findOrFail($id);
            $transaction->update($data);
            DB::commit();
            return redirect()->route('transactions.index')->with('success', 'Transaction updated.');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Failed: ' . $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();
        return redirect()->route('transactions.index')->with('success', 'Transaction deleted.');
    }
}
