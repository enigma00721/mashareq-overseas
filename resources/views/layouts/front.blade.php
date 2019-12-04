<!DOCTYPE html>
<html lang="en">

<head>

    @include('partial.head')    

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>        
        </div>
        <!-- end preloader -->


        <!-- Start header/mavbar -->
        @include('partial.navbar')
        <!-- end of header/navbar -->


        @yield('content')


        <!-- start site-footer -->
        @include('partial.footer')
        <!-- end site-footer -->

    </div>
    <!-- end of page-wrapper -->


    @include('partial.script')
</body>

</html>
