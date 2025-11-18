<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Section;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        $totalStudents = Student::count();
        $totalSections = Section::count();
        $activeTransactions = Transaction::where('status', 'Approved')->count();
        $pendingTransactions = Transaction::where('status', 'Pending')->count();

        $approvedTransactions = Transaction::where('status', 'Approved')->count();
        $cancelledTransactions = Transaction::where('status', 'Cancelled')->count();

        $sections = Section::with('students')->get();

        return view('dashboard', compact(
            'totalStudents',
            'totalSections',
            'activeTransactions',
            'pendingTransactions',
            'approvedTransactions',
            'cancelledTransactions',
            'sections'
        ));
    }
}
