<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Report $report)
    {
        $request->validate([
            'comment' => 'required',
        ]);

        Comment::create([
            'report_id' => $report->id,
            'user_id' => Auth::id(),
            'comment' => $request->comment,
        ]);

        return redirect()->route('reports.show', $report);
    }
}
