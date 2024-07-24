@extends('layouts.admin')
@section('content')

<div class="container px-6 mx-auto grid">
    <h2
        class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
        Dashboard
    </h2>
    <!-- CTA -->
    <a
        class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
        href="{{ route('reports.create') }}"
    >
        <div class="flex items-center">
        <svg
            class="w-5 h-5 mr-2"
            fill="currentColor"
            viewBox="0 0 20 20"
        >
            <path
            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
            ></path>
        </svg>
        <span>Welcome to Al-Ameen Reporting App</span>
        </div>
        <span>Create New Report &RightArrow;</span>
    </a>
    <!-- Cards -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <!-- Card -->
        <div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
        >
        <div
            class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
        >
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
            ></path>
            </svg>
        </div>
        <div>
            <p
            class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
            >
            Total clients
            </p>
            <p
            class="text-lg font-semibold text-gray-700 dark:text-gray-200"
            >
            6389
            </p>
        </div>
        </div>
        <!-- Card -->
        <div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
        >
        <div
            class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
        >
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path
                fill-rule="evenodd"
                d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                clip-rule="evenodd"
            ></path>
            </svg>
        </div>
        <div>
            <p
            class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
            >
            Account balance
            </p>
            <p
            class="text-lg font-semibold text-gray-700 dark:text-gray-200"
            >
            $ 46,760.89
            </p>
        </div>
        </div>
        <!-- Card -->
        <div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
        >
        <div
            class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500"
        >
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
            ></path>
            </svg>
        </div>
        <div>
            <p
            class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
            >
            New sales
            </p>
            <p
            class="text-lg font-semibold text-gray-700 dark:text-gray-200"
            >
            376
            </p>
        </div>
        </div>
        <!-- Card -->
        <div
        class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
        >
        <div
            class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
        >
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path
                fill-rule="evenodd"
                d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                clip-rule="evenodd"
            ></path>
            </svg>
        </div>
        <div>
            <p
            class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
            >
            Pending contacts
            </p>
            <p
            class="text-lg font-semibold text-gray-700 dark:text-gray-200"
            >
            35
            </p>
        </div>
        </div>
    </div>

    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Reports
    </h2>
    <div class="mb-4">
        <a href="{{ route('reports.create') }}" class="px-4 py-2 bg-purple-600 text-white rounded-lg shadow-md hover:bg-purple-700">
            Create New Report
        </a>
    </div>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap bg-white dark:bg-gray-800">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Category</th>
                        <th class="px-4 py-3">Subject</th>
                        <th class="px-4 py-3">Summary</th>
                        <th class="px-4 py-3">Report Status</th>
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
                        </td>
                        <td class="px-4 py-3 text-sm">
                            {{ $report->summary }}
                        </td>
                        <td class="px-4 py-3 text-xs">
                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                Approved
                            </span>
                        </td>
                        <td class="px-4 py-3 text-sm font-medium">
                            <a href="{{ route('reports.show', $report->id) }}" class="text-purple-600 hover:text-purple-900">View</a>
                            <a href="{{ route('reports.edit', $report->id) }}" class="text-indigo-600 hover:text-indigo-900 ml-2">Edit</a>
                            <form action="{{ route('reports.destroy', $report->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
