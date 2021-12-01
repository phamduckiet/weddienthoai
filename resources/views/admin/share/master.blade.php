<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">


@include('admin.share.headcss')


<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    @include('admin.share.header')
    @include('admin.share.leftMenu')

    <div class="app-content content ">
       @yield('content')
    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

@include('admin.share.footer')
@include('admin.share.footercss')
@yield('js')
</body>


</html>
