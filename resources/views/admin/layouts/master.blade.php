@extends('layouts.master')

@section('body')

<div class="bg-gray-900">
    <div class=" container w-full mx-auto px-2 border-t-2 border-slate-600 py-5">
      <div class="relative flex items-center justify-between ">
        <div class="flex flex-col gap-2 text-gray-300 ">
            <div class="text-xl text-gray-300 ">
                پنل مدیریت
            </div>
            <div class="text-sm">
                دی جی اینستا | پنل مدیریت دی جی اینستا

            </div>
        </div>

        <div class="flex gap-8 items-center justify-center ">
          <div class="hidden sm:block sm:ml-6">
            <div class="flex gap-2 ">

              <a href="#" class="bg-slate-800 hover:bg-orange-600 transition-all duration-500 text-white px-3 py-2 rounded-md text-sm font-medium">دسته بندی ها</a>

              <a href="#" class="bg-slate-800 hover:bg-orange-600 transition-all duration-500 text-white px-3 py-2 rounded-md text-sm font-medium">جدیدترین ها</a>

              <a href="#" class="bg-slate-800 hover:bg-orange-600 transition-all duration-500 text-white px-3 py-2 rounded-md text-sm font-medium">تخفیف دار ها</a>

              <a href="#" class="bg-slate-800 hover:bg-orange-600 transition-all duration-500 text-white px-3 py-2 rounded-md text-sm font-medium">کارشناسی شده   </a>




            </div>
          </div>
        </div>

      </div>
    </div>


</div>




<div class="container mx-auto py-5">
    <div class="flex gap-5">
        <div class="w-1/5">
            @include('admin.layouts.sidebar')
        </div>
        <div class="w-4/5">
            @yield('body1')
        </div>
    </div>
</div>


{{-- Page Cointent --}}


@endsection






