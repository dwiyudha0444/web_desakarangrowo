@if(Auth::user()->role!='user')
        @include('admin.head')

        @include('admin.navbar')

        @include('admin.sidebar')

        @yield('content')

        @include('admin.footer')
@else
  @include('admin.accessDenied')
@endif