<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin._header-css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
@include('admin.headerenav')
@include('admin._siderbar')

 @yield('icerik')
@include('admin._footer')



@include('admin.footerjs')
</body>
</html>
