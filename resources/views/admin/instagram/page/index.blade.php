@extends('admin.layouts.master')

@section('body1')


<div class="">


    <div class="grid grid-cols-5 gap-4 mb-5">
        <div class="rounded-lg shadow bg-white overflow-hidden">
            <div class="bg-gray-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                <div class="text-sm">
                    کل آگهی ها
                </div>
            </div>
            <div class="text-2xl text-center p-2 font-bold">
                {{-- {{$categories->count()}} --}}
            </div>
        </div>

        <div class="rounded-lg shadow bg-white overflow-hidden">
            <div class="bg-gray-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                <div class="text-sm">
                    آگهی های فعال
                </div>
            </div>
            <div class="text-2xl text-center p-2 font-bold">
                {{-- {{$categories->where('status',1)->count()}} --}}
            </div>
        </div>

        <div class="rounded-lg shadow bg-white overflow-hidden">
            <div class="bg-gray-800 p-2 text-center text-white flex gap-1 items-center justify-center">
                <div class="text-sm">
                    آگهی های غیر فعال
                </div>
            </div>
            <div class="text-2xl text-center p-2 font-bold">
                {{-- {{$categories->where('status',0)->count()}} --}}
            </div>
        </div>




    </div>






    @include('admin.layouts.admin-message')




    <div class="mb-3 bg-white shadow rounded p-3">
        <div class="flex justify-between items-center">
            <div class="text-xl font-bold py-3">
                <span>  آگهی های پیج اینستاگرام</span>
                {{-- <span class="text-sm">( مجموع : {{count($Advertises)}} )</span> --}}
            </div>
            <div class="flex gap-3 items-center">

                <div>
                    <a class="text-sm text-center py-2 px-4 bg-emerald-600 text-white rounded hover:bg-emerald-700"
                 href="{{route('admin.instagram.page.category.create')}}">افزودن جدید</a>
                </div>

            </div>
        </div>
    </div>





    <div class="">
        <div class="bg-white shadow rounded overflow-y-auto">
            <table class="table-fixed text-right w-full px-2">
                <thead class="">
                    <tr class=" bg-gray-800 text-white rounded font-normal text-sm">
                        <th class="py-4 px-2 font-thin w-8">ID#</th>
                        <th class="py-4 px-2 font-thin w-12">آیکون</th>
                        <th class="py-4 px-2 font-thin w-28">عنوان</th>
                        <th class="py-4 px-2 font-thin w-28">تعداد آگهی</th>
                        <th class="py-4 px-2 font-thin w-20">وضعیت</th>
                        <th class="py-4 px-2 font-thin w-32">عملیات</th>
                    </tr>
                </thead>
                <tbody class="" >
                    @foreach ([] as $key=>$item)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-2">
                            <span class=" text-gray-600 text-xs">
                                {{$item->id}}
                            </span>
                        </td>

                        <td class="py-3 px-2">
                            <div>
                                <img class=" h-12 w-12 rounded-lg" src="{{asset($item->icon)}}" alt="">
                            </div>
                        </td>

                        <td class="py-3 px-2">
                            <span class=" text-gray-600 text-xs font-bold">
                                {{$item->title}}
                            </span>
                        </td>

                        <td class="py-3 px-2">
                            <span class=" text-gray-600 text-xs font-bold">
                                ---
                            </span>
                        </td>








                        <td class="py-3 px-2">

                                @if($item->status==1)
                                    <span class="bg-green-200 rounded px-2 text-green-600 text-xs">
                                        فعال
                                    </span>

                                @else
                                    <span class="bg-red-200 rounded px-2 text-red-600 text-xs">
                                        غیر فعال
                                    </span>
                                @endif
                            </span>
                        </td>

                        <td class="py-3 px-2">
                            <div class="flex items-center">

                                <div class="rounded-lg py-1 px-2 text-black text-sm">
                                    <a href="{{route('admin.instagram.page.category.edit',$item)}}" class=" text-xs text-center py-1 px-2 bg-orange-500 text-white rounded hover:bg-orange-600 ">مشاهده و تغییرات</a>
                                </div>



                                <div x-data="{'popup': false}">
                                    <form action="{{route('admin.instagram.page.category.delete',$item)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class=" text-xs text-center py-1 px-2 bg-red-700 text-white rounded hover:bg-red-800 ">
                                        حذف
                                        </button>
                                    </form>



                                </div>
                            </div>

                        </td>


                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>




@endsection
