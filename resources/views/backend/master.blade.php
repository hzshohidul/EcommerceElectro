{{-- header --}} 
@include('backend.header')
{{-- header --}} 

{{-- Left Sidebar Start --}}
@include('backend.sidebar')
{{-- Left Sidebar End --}}
            
{{-- main content --}}
@yield('content');
{{-- main content --}}

{{-- footer --}}              
@include('backend.footer')
{{-- footer --}}