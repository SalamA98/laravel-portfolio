<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    @include('partials.adminNav')

    @yield('content')

    @include('partials.footer')

    @include('partials.scripts')
</body>

</html>