
@includeIf('frontend.master.header')

@includeIf('frontend.master.navbar')

@includeWhen(Request::is('/'),'frontend.master.banner')



@yield('content')





@includeIf('frontend.master.footer')

