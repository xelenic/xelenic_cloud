<!DOCTYPE html>
@langrtl
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ getBaseURL() }}">
    <meta name="file-base-url" content="{{ getFileBaseURL() }}">

    <title>@yield('title', app_name())</title>
    <meta name="description" content="@yield('meta_description', 'Laravel Boilerplate')">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
    <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/>

    <link rel="stylesheet" href="{{url('css/aiz-core.css')}}">
    <link rel="stylesheet" href="{{url('css/vendors.css')}}">





    @yield('meta')

    {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
    @stack('before-styles')

    <!-- Check if the language is set to RTL, so apply the RTL layouts -->
    <!-- Otherwise apply the normal LTR layouts -->
    {{ style(mix('css/backend.css')) }}

    @stack('after-styles')
</head>

{{--
     * CoreUI BODY options, add following classes to body to change options
     * // Header options
     * 1. '.header-fixed'					- Fixed Header
     *
     * // Sidebar options
     * 1. '.sidebar-fixed'					- Fixed Sidebar
     * 2. '.sidebar-hidden'				- Hidden Sidebar
     * 3. '.sidebar-off-canvas'		    - Off Canvas Sidebar
     * 4. '.sidebar-minimized'			    - Minimized Sidebar (Only icons)
     * 5. '.sidebar-compact'			    - Compact Sidebar
     *
     * // Aside options
     * 1. '.aside-menu-fixed'			    - Fixed Aside Menu
     * 2. ''			    - Hidden Aside Menu
     * 3. '.aside-menu-off-canvas'	        - Off Canvas Aside Menu
     *
     * // Breadcrumb options
     * 1. '.breadcrumb-fixed'			    - Fixed Breadcrumb
     *
     * // Footer options
     * 1. '.footer-fixed'					- Fixed footer
--}}
<body class="app header-fixed sidebar-fixed aside-menu-off-canvas sidebar-lg-show">
    @include('backend.includes.header')

    <div class="app-body">
        @include('backend.includes.sidebar')

        <main class="main">
            @include('includes.partials.read-only')
            @include('includes.partials.logged-in-as')
            {!! Breadcrumbs::render() !!}

            <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="content-header">
                        @yield('page-header')
                    </div><!--content-header-->

                    @include('includes.partials.messages')
                    @yield('content')
                </div><!--animated-->
            </div><!--container-fluid-->
        </main><!--main-->

        @include('backend.includes.aside')
    </div><!--app-body-->

    @include('backend.includes.footer')

    <!-- Scripts -->
    @stack('before-scripts')
    {!! script(mix('js/manifest.js')) !!}
    {!! script(mix('js/vendor.js')) !!}
    {!! script(mix('js/backend.js')) !!}
    <script src="https://unpkg.com/cropperjs"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    {{--<script src="https://bakkiya.com/assets/js/vendors.js" ></script>--}}

    {{--<script src="https://bakkiya.com/assets/js/aiz-core.js" ></script>--}}

    @stack('after-scripts')
</body>
</html>
