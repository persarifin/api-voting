@include('css')
@include('headermobile')
@include('slidebar')
<div class="page-container">
@include('header')
@yield('content')
</div>
@include('js')