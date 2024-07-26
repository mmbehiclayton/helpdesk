<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
        }
        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .section {
            margin-bottom: 20px;
        }
        .section label {
            font-weight: bold;
            color: #555;
        }
        .section p {
            margin: 10px 0;
            color: #333;
        }
        .attachment {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        .attachment a {
            color: #007bff;
            text-decoration: none;
        }
        .attachment a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Report Details</h2>
        <div class="section">
            <label>Category:</label>
            <p>{{ $report->category }}</p>
        </div>
        <div class="section">
            <label>Subject:</label>
            <p>{{ $report->subject }}</p>
        </div>
        <div class="section">
            <label>Summary:</label>
            <p>{{ $report->summary }}</p>
        </div>
        <div class="section">
            <label>Attachment:</label>
            @if ($report->attachment)
                <div class="attachment">
                    <a href="{{ asset('storage/'.$report->attachment) }}" target="_blank">View Attachment</a>
                </div>
            @else
                <p>No attachment</p>
            @endif
        </div>
    </div>
</body>
</html>
