 @include('front.layouts.includes.head');
     <body>
    <x-front-header-component/>
    
        
    @yield('content')
        <!--=================================
        Hero Area
    ===================================== -->

    
    <x-front-footer-component/>


    <!-- Use Minified Plugins Version For Fast Page Load -->
 @include('front.layouts.includes.foot');
    