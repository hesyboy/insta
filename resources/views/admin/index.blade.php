@extends('admin.layouts.master')

@section('body1')




{{-- Page Cointent --}}



<div class="bg-gray-100">
    <div class="container mx-auto my-3">



                    <div class="grid grid-cols-4 gap-5">
                        @for ($i=0;$i<10;$i++)

                            <x-product.instagram-card2/>
                        @endfor
                    </div>






        </div>
    </div>
</div>




@endsection
