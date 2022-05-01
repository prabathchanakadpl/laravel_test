<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="The World needs all the good we can do" name="description"/>
    @include('layouts.layout_partials.styles')
</head>

<body data-topbar="dark" data-layout="horizontal">
@include('layouts.layout_partials.go_to_top')
<!-- Begin page -->
<div id="layout-wrapper">

    <div class="gradient-panel"></div>

    @include('layouts.layout_partials.navbar_header')

    @include('layouts.layout_partials.navbar')

    <div class="main-content">
        <!-- Start right Content here -->
        @yield('content')
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    @include('layouts.layout_partials.scripts')

</body>
</html>
