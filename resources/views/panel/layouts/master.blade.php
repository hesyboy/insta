@extends('layouts.master')

@section('body')

<div class="bg-gray-900">
    <div class=" container w-full mx-auto px-2 border-t-2 border-slate-600 py-5">
      <div class="relative flex items-center justify-between ">
        <div class="flex flex-col gap-2 text-gray-300 ">
            <div class="text-xl text-gray-300 ">
                پنل کاربری
            </div>
            <div class="text-sm">
                <span>خوش آمدی </span>
                <span>{{auth()->user()->name}}</span>
            </div>
        </div>

        <div class="flex gap-8 items-center justify-center ">
          <div class="hidden sm:block sm:ml-6">
            <div class="flex gap-2 ">

              <div class="bg-slate-800 hover:bg-orange-600 transition-all duration-500 text-white px-3 py-2 rounded-md text-base font-medium flex gap-5">
                <span>تعداد  آگهی </span>
                <span>100</span>
              </div>


              <div class="bg-slate-800 hover:bg-orange-600 transition-all duration-500 text-white px-3 py-2 rounded-md text-base font-medium flex gap-5">
                <span>موجودی کیف پول  </span>
                <span>35،000</span>
              </div>





            </div>
          </div>
        </div>

      </div>
    </div>


</div>




<div class="container mx-auto py-5">
    <div class="flex gap-5">
        <div class="w-1/5">
            @include('panel.layouts.sidebar')
        </div>
        <div class="w-4/5">
            @yield('body1')
        </div>
    </div>
</div>


{{-- Page Cointent --}}


@endsection






