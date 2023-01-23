{{-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <script type="text/javascript">
        var map = [
            "&\#1632;", "&\#1633;", "&\#1634;", "&\#1635;", "&\#1636;",
            "&\#1637;", "&\#1638;", "&\#1639;", "&\#1640;", "&\#1641;"
        ]

        var replaceDigits = function() {
            document.body.innerHTML =
                document.body.innerHTML.replace(
                    /\d(?=[^<>]*(<|$))/g,
                    function($0) {
                        return map[$0]
                    }
                );
        }
        window.onload = replaceDigits
    </script> --}}

    @include('site.layout.css')
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        @include('site.layout.header')

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        @yield('content')

        @include('site.layout.footer')


        @include('site.layout.js')
</body>


</html>
