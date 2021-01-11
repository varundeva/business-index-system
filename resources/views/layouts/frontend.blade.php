@include('frontend.partials.head')
@include('frontend.partials.header')


<body class="gray-bg">
    @include('frontend.partials.loader')
    
    @yield('content')


    @include('frontend.partials.footer')