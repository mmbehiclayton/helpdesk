<?php

namespace App\Http\Controllers;

use \PDF;
use App\Models\Report;
use App\Models\ReportRecipient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {
        // Fetch paginated reports with relationships, ordered by creation time in descending order
        $reports = Report::with('user', 'recipients')->orderBy('created_at', 'desc')->paginate(10);
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
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Store the attachment if it exists
        $attachmentPath = null;
        if ($request->hasFile('attachment')) {
            $attachmentPath = $request->file('attachment')->store('public/attachments');
            // Remove the 'public/' prefix to store only the relative path
            $attachmentPath = str_replace('public/', '', $attachmentPath);
        }

        // Create the report
        $report = Report::create([
            'user_id' => Auth::id(),
            'category' => $request->category,
            'subject' => $request->subject,
            'summary' => $request->summary,
            'attachment' => $attachmentPath,
        ]);

        // Associate recipients with the report
        if ($request->has('recipients')) {
            foreach ($request->recipients as $recipientId) {
                ReportRecipient::create([
                    'report_id' => $report->id,
                    'user_id' => $recipientId,
                ]);
            }
        }

        return redirect()->route('reports.index')->with('success', 'Report created successfully.');
    }


    public function show(Report $report)
    {
        $report->load('comments.user');
        return view('reports.show', compact('report'));
    }

    //save report as PDF
    public function generatePdf($id)
    {
        $report = Report::findOrFail($id);
        $pdf = PDF::loadView('reports.report', compact('report'));

        return $pdf->download('report-' . $id . '.pdf');
    }

}
