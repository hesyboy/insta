<!DOCTYPE html>
<html lang="en">
<head>
    @include('site.layouts.headtags')
    @livewireStyles

</head>

<body class="bg-gray-100" dir="rtl">

    <div class="bg-indigo-900">
        <div class="hesheader ">
            @include('site\layouts\header')
        </div>
    </div>

    <div class="">
        @yield('body')
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>


    @livewireScripts
</body>
</html>
