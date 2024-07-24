@extends('layouts.admin')

@section('content')
<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Create Report
    </h2>
    <div class="bg-white rounded-lg shadow-md dark:bg-gray-800 p-6">
        <form action="{{ route('reports.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Choose Report Category
                </span>
                <select name="category" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                  <option>General Report</option>
                  <option>Admin Reports</option>
                  <option>Academic Reports</option>
                </select>
              </label>

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
                    <span class="text-gray-700 dark:text-gray-400">Select Report Recipients</span>
                    <div class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700">
                        <input type="checkbox" id="select-all" class="mr-2">
                        <label for="select-all">Select All</label>
                    </div>
                    @foreach($users as $user)
                    <div class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700">
                        <input type="checkbox" name="recipients[]" id="recipient-{{ $user->id }}" value="{{ $user->id }}" class="mr-2 recipient-checkbox">
                        <label for="recipient-{{ $user->id }}">{{ $user->name }}</label>
                    </div>
                    @endforeach
                </label>
            </div>

            <script>
                document.getElementById('select-all').addEventListener('change', function() {
                    let checkboxes = document.querySelectorAll('.recipient-checkbox');
                    checkboxes.forEach(checkbox => {
                        checkbox.checked = this.checked;
                    });
                });
            </script>

            <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-lg shadow-md hover:bg-purple-700">
                    Submit Report
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
