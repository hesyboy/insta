<!DOCTYPE html>
<html lang="en">
<head>
    @include('site.layouts.headtags')
</head>

<body class="bg-gray-100" dir="rtl">

    <div class="bg-indigo-800">
        <div class="hesheader container mx-auto ">
            @include('site\layouts\header')
        </div>
    </div>

    <div class="my-3">
        @yield('body')
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

</body>
</html>
