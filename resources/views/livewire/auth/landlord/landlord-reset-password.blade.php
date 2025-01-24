<div>
    {{-- The best athlete wants his opponent at his best. --}}
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
                            <form wire:submit.prevent='landlord_reset_password'>
                                @csrf
                                <div class="grid gap-y-4">
                                    <!-- Form Group -->
                                    <div>
                                        <label for="email" class="block text-sm mb-2 dark:text-white">Email
                                            address</label>
                                        <div class="relative">
                                            <input type="email" id="email" name="email"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-800 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-blue-600"
                                                required aria-describedby="email-error" wire:model='email'>
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
                                        password

                                        <div class="animate-spin inline-block size-4 border-[3px] border-current border-t-transparent text-white rounded-full dark:text-white"
                                            role="status" aria-label="loading" wire:loading>
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </button>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
