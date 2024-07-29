@extends('layouts.admin')

@section('content')
<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Report Details
    </h2>
    <div class="bg-white rounded-lg shadow-md dark:bg-gray-800 p-6">
        <div class="mb-6">
            <label class="block text-sm">
                <span class="text-lg font-medium text-gray-700 dark:text-gray-400">Category</span>
                <p class="block w-full mt-1 text-sm text-gray-900 dark:text-gray-100 dark:bg-gray-700 rounded-lg p-2">{{ $report->category }}</p>
            </label>
        </div>
        <div class="mb-6">
            <label class="block text-sm">
                <span class="text-lg font-medium text-gray-700 dark:text-gray-400">Subject</span>
                <p class="block w-full mt-1 text-sm text-gray-900 dark:text-gray-100 dark:bg-gray-700 rounded-lg p-2">{{ $report->subject }}</p>
            </label>
        </div>
        <div class="mb-6">
            <label class="block text-sm">
                <span class="text-lg font-medium text-gray-700 dark:text-gray-400">Summary</span>
                <p class="block w-full mt-1 text-sm text-gray-900 dark:text-gray-100 dark:bg-gray-700 rounded-lg p-2">{!! $report->summary !!}</p>
            </label>
        </div>
        <div class="mb-6">
            <label class="block text-sm">
                <span class="text-lg font-medium text-gray-700 dark:text-gray-400">Attachment</span>
                @if ($report->attachment)
                <a href="{{ asset('storage/'.$report->attachment) }}" target="_blank" class="flex items-center mt-1 text-sm text-teal-600 hover:text-teal-900 dark:text-teal-400 dark:hover:text-teal-200 rounded-lg p-2 bg-teal-50 hover:bg-teal-100">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l-7-7 7-7m0 0l7 7-7 7m-7-7h14"></path>
                    </svg>
                    Download Attachment
                </a>

                @else
                <p class="block w-full mt-1 text-sm text-gray-900 dark:text-gray-100 dark:bg-gray-700 rounded-lg p-2">No attachment</p>
                @endif
            </label>
        </div>
        <div class="flex justify-end space-x-4">
    <a href="{{ route('reports.index') }}" class="flex items-center px-4 py-2 bg-teal-600 text-white rounded-lg shadow-md hover:bg-teal-700">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
        </svg>
        Back to Reports
    </a>
    @if ($report->id)
        <a href="{{ route('reports.generatePdf', $report->id) }}" class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m4-4H8"></path>
                <path d="M12 3v6h4l-5 5-5-5h4V3h6z"></path>
            </svg>
            Save as PDF
        </a>
    @endif
</div>

    </div>
</div>
@endsection
