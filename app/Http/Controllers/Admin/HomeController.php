<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Report;

class HomeController extends Controller
{

    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {

        // Fetch paginated reports with relationships, ordered by creation time in descending order
        $reports = Report::with('user', 'recipients')->orderBy('created_at', 'desc')->paginate(10);

        $pageData = [
            'reports' => $reports,
        ];
        return view('admin.index', $pageData);
    }
}
