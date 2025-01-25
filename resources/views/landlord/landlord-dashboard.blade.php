@extends('layouts.app')

@section('content')
    @include('layouts._head')
    @include('layouts._sidebar')
    @include('layouts._main')

    <!-- Content -->
    <div class="w-full lg:ps-[265px]">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6 mt-4">
            <!-- your content goes here ... -->
            <h1 class="text-3xl font-bold dark:text-neutral-100 text-neutral-800">Dashboard</h1>

            <div class="grid xl:grid-cols-2 pt-4">
                <div class="dark:bg-neutral-800 border dark:border-neutral-700 bg-white rounded-xl p-5">
                    <div class="flex items-center justify-between">
                        <div class="flex gap-4 items-center">
                            <img class="shrink-0 size-[40px] rounded-full"
                                src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                alt="Avatar">

                            <h1 class="text-neutral-800 dark:text-neutral-50 font-bold">Welcome <br> <span
                                    class="text-sm font-light">Demo User</span></h1>
                        </div>

                        <button type="button"
                            class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-5 shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                            </svg>

                            Sign out
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
    <!-- ========== END MAIN CONTENT ========== -->
@endsection
