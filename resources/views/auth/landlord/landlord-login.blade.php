@extends('layouts.app')

@section('content')
    <!-- Hero -->
    <div class="relative bg-gradient-to-bl from-blue-100 via-transparent dark:from-blue-950 dark:via-transparent">
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Grid -->
            <div class="grid items-center md:grid-cols-2 gap-8 lg:gap-12 h-screen">
                <div>
                    <p
                        class="inline-block text-sm font-medium bg-clip-text bg-gradient-to-l from-blue-600 to-violet-500 text-transparent dark:from-blue-400 dark:to-violet-400">
                        RoomEase: List Your Property with Ease
                    </p>

                    <!-- Title -->
                    <div class="mt-4 md:mb-12 max-w-2xl">
                        <h1 class="mb-4 font-semibold text-gray-800 text-4xl lg:text-5xl dark:text-neutral-200">
                            Fully customizable options to match your rental preferences
                        </h1>
                        <p class="text-gray-600 dark:text-neutral-400">
                            We provide you with a seamless platform to list your properties and connect with verified tenants in seconds. Our main focus is ensuring a smooth and secure rental experience.
                        </p>
                    </div>
                    <!-- End Title -->

                    <!-- Blockquote -->
                    <blockquote class="hidden md:block relative max-w-sm">
                        <svg class="absolute top-0 start-0 transform -translate-x-6 -translate-y-8 size-16 text-gray-200 dark:text-neutral-800"
                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path
                                d="M7.39762 10.3C7.39762 11.0733 7.14888 11.7 6.6514 12.18C6.15392 12.6333 5.52552 12.86 4.76621 12.86C3.84979 12.86 3.09047 12.5533 2.48825 11.94C1.91222 11.3266 1.62421 10.4467 1.62421 9.29999C1.62421 8.07332 1.96459 6.87332 2.64535 5.69999C3.35231 4.49999 4.33418 3.55332 5.59098 2.85999L6.4943 4.25999C5.81354 4.73999 5.26369 5.27332 4.84476 5.85999C4.45201 6.44666 4.19017 7.12666 4.05926 7.89999C4.29491 7.79332 4.56983 7.73999 4.88403 7.73999C5.61716 7.73999 6.21938 7.97999 6.69067 8.45999C7.16197 8.93999 7.39762 9.55333 7.39762 10.3ZM14.6242 10.3C14.6242 11.0733 14.3755 11.7 13.878 12.18C13.3805 12.6333 12.7521 12.86 11.9928 12.86C11.0764 12.86 10.3171 12.5533 9.71484 11.94C9.13881 11.3266 8.85079 10.4467 8.85079 9.29999C8.85079 8.07332 9.19117 6.87332 9.87194 5.69999C10.5789 4.49999 11.5608 3.55332 12.8176 2.85999L13.7209 4.25999C13.0401 4.73999 12.4903 5.27332 12.0713 5.85999C11.6786 6.44666 11.4168 7.12666 11.2858 7.89999C11.5215 7.79332 11.7964 7.73999 12.1106 7.73999C12.8437 7.73999 13.446 7.97999 13.9173 8.45999C14.3886 8.93999 14.6242 9.55333 14.6242 10.3Z"
                                fill="currentColor" />
                        </svg>

                        <div class="relative z-10">
                            <p class="text-xl italic text-gray-800 dark:text-white">
                                An excellent platform to find responsible tenants quickly. Hassle-free and efficient!
                            </p>
                        </div>

                        <footer class="mt-3">
                            <div class="flex items-center gap-x-4">
                                <div class="shrink-0">
                                    <img class="size-8 rounded-full"
                                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                        alt="Avatar">
                                </div>
                                <div class="grow">
                                    <div class="font-semibold text-gray-800 dark:text-neutral-200">Josh Grazioso</div>
                                    <div class="text-xs text-gray-500 dark:text-neutral-500">Property Owner |
                                        {{ config('app.name') }}</div>
                                </div>
                            </div>
                        </footer>
                    </blockquote>
                    <!-- End Blockquote -->
                </div>
                <!-- End Col -->

                <div>
                    <!-- Form -->
                    <livewire:auth.landlord.landlord-login />
                    <!-- End Form -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Clients Section -->
    </div>
    <!-- End Hero -->

    <div id="hs-slide-down-animation-modal"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
        role="dialog" tabindex="-1" aria-labelledby="hs-slide-down-animation-modal-label">
        <div
            class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
            <div
                class="flex flex-col bg-white border rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-transparent dark:shadow-neutral-700/70">
                <div class="bg-white border border-gray-200 rounded-xl dark:bg-neutral-900 dark:border-transparent">
                    <div class="p-4 sm:p-7">
                        <div class="text-center">
                            <h3 id="hs-modal-recover-account-label"
                                class="block text-2xl font-bold text-gray-800 dark:text-neutral-200">Forgot password?</h3>
                        </div>

                        <div class="mt-5">
                            <!-- Form -->
                            <form>
                                <div class="grid gap-y-4">
                                    <!-- Form Group -->
                                    <div>
                                        <label for="email" class="block text-sm mb-2 dark:text-white">Email
                                            address</label>
                                        <div class="relative">
                                            <input type="email" id="email" name="email"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-blue-600"
                                                required aria-describedby="email-error">
                                            <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                                <svg class="size-5 text-red-500" width="16" height="16"
                                                    fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="hidden text-xs text-red-600 mt-2" id="email-error">Please include a
                                            valid email address so we can get back to you</p>
                                    </div>
                                    <!-- End Form Group -->

                                    <button type="submit"
                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Reset
                                        password</button>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
