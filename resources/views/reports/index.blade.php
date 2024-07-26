@extends('layouts.admin')
@section('content')

<div class="container px-6 mx-auto grid">
    <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
        My Reports | Sent Reports
    </h2>
    <!-- CTA -->
    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-teal-100 bg-teal-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple" href="{{ route('reports.create') }}">
        <div class="flex items-center">
        <svg class="w-5 h-5 mr-2"
            fill="currentColor"
            viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
            ></path>
        </svg>
        <span>Reporting App</span>
        </div>
        <span>Compose a Report &RightArrow;</span>
    </a>    
<!-- Report Table Start -->
<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap bg-white dark:bg-gray-800">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Category</th>
                    <th class="px-4 py-3">Subject</th>
                    <th class="px-4 py-3">Datetime</th>
                    <th class="px-4 py-3">Replies/Comments</th>
                    <th class="px-4 py-3">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                @foreach ($reports as $report)
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-4 py-3 text-sm">
                        {{ $report->category }}
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $report->subject }}
                        @if ($report->attachment)
                        <div class="mt-2">
                            <a href="{{ asset('storage/' . $report->attachment) }}" target="_blank" class="flex items-center text-blue-600 hover:text-blue-800">
                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828L18 10.828M15.172 7H13.5A2.5 2.5 0 0111 4.5V3"></path>
                                </svg>
                                View Attachment
                            </a>
                        </div>
                        @endif
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $report->created_at->diffForHumans() }}<br>
                        <small>{{ $report->created_at->format('h:i a, d F Y') }}</small>
                    </td>
                    <td class="px-4 py-3 text-xs">
                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                            0
                        </span>
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                            <!-- View Button -->
                            <a href="{{ route('reports.show', $report->id) }}" aria-label="View" class="text-blue-600 hover:text-blue-800">
                                View
                            </a>
                            
                            <!-- Edit Button -->
                            <a href="{{ route('reports.edit', $report->id) }}" aria-label="Edit" class="text-purple-600 hover:text-purple-800">
                                Edit
                            </a>

                            <!-- Delete Button -->
                            <form action="{{ route('reports.destroy', $report->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" aria-label="Delete" class="text-red-600 hover:text-red-800">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- End of Report Table -->

        <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            <span class="flex items-center col-span-3">
                Showing {{ $reports->firstItem() }}-{{ $reports->lastItem() }} of {{ $reports->total() }}
            </span>
            <span class="col-span-2"></span>
            <!-- Pagination -->
            <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                <nav aria-label="Table navigation">
                    <ul class="inline-flex items-center">
                        @if ($reports->onFirstPage())
                        <li>
                            <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous" disabled>
                                <svg aria-hidden="true" class="w-4 h-4 fill-current text-gray-400" viewBox="0 0 20 20">
                                    <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </li>
                        @else
                        <li>
                            <a href="{{ $reports->previousPageUrl() }}" class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                                <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        @endif

                        @for ($i = 1; $i <= $reports->lastPage(); $i++)
                        <li>
                            <a href="{{ $reports->url($i) }}" class="px-3 py-1 {{ $i == $reports->currentPage() ? 'text-white bg-purple-600 border border-r-0 border-purple-600' : 'text-purple-600 hover:text-purple-900' }} rounded-md focus:outline-none focus:shadow-outline-purple">
                                {{ $i }}
                            </a>
                        </li>
                        @endfor

                        @if ($reports->hasMorePages())
                        <li>
                            <a href="{{ $reports->nextPageUrl() }}" class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
                                <svg aria-hidden="true" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        @else
                        <li>
                            <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next" disabled>
                                <svg aria-hidden="true" class="w-4 h-4 fill-current text-gray-400" viewBox="0 0 20 20">
                                    <path d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </li>
                        @endif
                    </ul>
                </nav>
            </span>
        </div>
    </div>
</div>
@endsection
