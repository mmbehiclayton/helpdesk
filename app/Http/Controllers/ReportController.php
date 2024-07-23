<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\ReportRecipient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::with('user', 'recipients')->get();
        return view('reports.index', compact('reports'));
    }

    public function create()
    {
        // Fetch all users
        $users = User::all();
        
        // Pass the users to the view
        return view('reports.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'subject' => 'required',
            'summary' => 'required',
            'attachment' => 'nullable|file',
        ]);

        $report = Report::create([
            'user_id' => Auth::id(),
            'category' => $request->category,
            'subject' => $request->subject,
            'summary' => $request->summary,
            'attachment' => $request->attachment ? $request->attachment->store('attachments') : null,
        ]);

        foreach ($request->recipients as $recipientId) {
            ReportRecipient::create([
                'report_id' => $report->id,
                'user_id' => $recipientId,
            ]);
        }

        return redirect()->route('reports.index');
    }

    public function show(Report $report)
    {
        $report->load('comments.user');
        return view('reports.show', compact('report'));
    }
}
