@extends('layouts.admin')

@section('content')
<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Report Details
    </h2>
    <div class="bg-white rounded-lg shadow-md dark:bg-gray-800 p-6">
        <div class="mb-4">
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Category</span>
                <p class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 form-input">{{ $report->category }}</p>
            </label>
        </div>
        <div class="mb-4">
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Subject</span>
                <p class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 form-input">{{ $report->subject }}</p>
            </label>
        </div>
        <div class="mb-4">
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Summary</span>
                <p class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 form-textarea">{{ $report->summary }}</p>
            </label>
        </div>
        <div class="mb-4">
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Attachment</span>
                @if ($report->attachment)
                <a href="{{ asset('storage/'.$report->attachment) }}" target="_blank" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 form-input text-purple-600 hover:text-purple-900">View Attachment</a>
                @else
                <p class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 form-input">No attachment</p>
                @endif
            </label>
        </div>
        <div class="flex justify-end">
            <a href="{{ route('reports.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded-lg shadow-md hover:bg-gray-700">Back to Reports</a>
        </div>
    </div>
</div>
@endsection
