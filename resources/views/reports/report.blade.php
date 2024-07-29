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
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        h1 {
            margin-bottom: 10px;
        }
        h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        hr {
            border: 0;
            height: 1px;
            background-color: #ddd;
            margin-bottom: 20px;
        }
        .section {
            margin-bottom: 20px;
        }
        .section label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }
        .section p {
            margin: 0;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #333;
        }
        .timestamp {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Al-Ameen Reporting App</h1>
        <hr>
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
            <p>{{ strip_tags($report->summary) }}</p>
        </div>
        <div class="timestamp">
            Report downloaded on: {{ \Carbon\Carbon::now()->format('F j, Y, g:i a') }}
        </div>
    </div>
</body>
</html>
