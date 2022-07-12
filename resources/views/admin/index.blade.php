@extends('admin.layouts.master')

@section('body1')




{{-- Page Cointent --}}



<div class="bg-gray-100">
    <div class="container mx-auto my-3">







            <div class="flex gap-5 my-5">

                <div class="w-1/5">
                    @include('admin.layouts.sidebar')
                </div>

                <div class="w-4/5">


                    <div class="grid grid-cols-4 gap-5">
                        @for ($i=0;$i<10;$i++)

                            <x-product.instagram-card2/>
                        @endfor
                    </div>
                </div>
            </div>





        </div>
    </div>
</div>




@endsection
