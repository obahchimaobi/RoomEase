@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center h-screen relative bg-gradient-to-bl from-blue-100 via-transparent dark:from-blue-950 dark:via-transparent">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-800" style="width: 460px;">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                    <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Reset Password</h1>
                    <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                        Remember your password?
                        <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                            href="{{ route('landlord.login') }}">
                            Sign in here
                        </a>
                    </p>
                </div>

                <div class="mt-5">
                    <!-- Form -->
                    <livewire:auth.landlord.reset-password-form />
                    <!-- End Form -->
                </div>
            </div>
        </div>
    </div>
@endsection
