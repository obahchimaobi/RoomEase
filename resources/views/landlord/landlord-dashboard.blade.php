@extends('layouts.app')

@section('content')

    @include('layouts._head')
    @include('layouts._sidebar')
    @include('layouts._main')

    <!-- Content -->
    <div class="w-full lg:ps-[265px]">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <!-- your content goes here ... -->
            hello
        </div>
    </div>
    <!-- End Content -->
    <!-- ========== END MAIN CONTENT ========== -->
@endsection
