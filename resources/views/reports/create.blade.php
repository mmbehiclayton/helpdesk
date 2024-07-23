@extends('layouts.admin')

@section('content')
<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Create Report
    </h2>
    <div class="bg-white rounded-lg shadow-md dark:bg-gray-800 p-6">
        <form action="{{ route('reports.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Category</span>
                    <input name="category" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 form-input" placeholder="Enter category" required>
                </label>
            </div>
            <div class="mb-4">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Subject</span>
                    <input name="subject" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 form-input" placeholder="Enter subject" required>
                </label>
            </div>
            <div class="mb-4">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Summary</span>
                    <textarea name="summary" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 form-textarea" rows="3" placeholder="Enter summary" required></textarea>
                </label>
            </div>
            <div class="mb-4">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Attachment</span>
                    <input type="file" name="attachment" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 form-input">
                </label>
            </div>
            <div class="mb-4">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Recipients</span>
                    <select name="recipients[]" id="recipients" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 form-multiselect" multiple required>
                        @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-lg shadow-md hover:bg-purple-700">
                    Create Report
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
