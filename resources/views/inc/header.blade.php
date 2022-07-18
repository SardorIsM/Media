<header class="d-flex flex-column flex-md-row align-items-center justify-content-between p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
    <a class="h5 my-0 me-md-auto fw-normal" href="{{ route('welcome') }}">Media</a>
    <nav class="my-2 my-md-0 me-md-3">
        <a class="p-2 text-dark" href="{{ route('registr-society')  }}">Общество</a>
{{--        @if(!auth()->check())--}}
{{--            <a href="{{ route('login-page') }}" class="btn btn-outline-primary">Войти</a>--}}
{{--        @else--}}
{{--            <a href="logout" class="h5 my-0 me-md-auto fw-normal">Выйти</a>--}}
{{--        @endif--}}
            @if(Request::is('/'))
                <a href="{{ route('login-page') }}" class="btn btn-outline-primary">Войти</a>
            @elseif(Request::is('/login'))
                123
            @else
                <a href="logout" class="h5 my-0 me-md-auto fw-normal">Выйти</a>
            @endif
{{--        <a class="" href="#">Sign up</a>--}}
{{--        <a class="p-2 text-dark" href="#">Enterprise</a>--}}
{{--        <a class="p-2 text-dark" href="#">Support</a>--}}
{{--        <a class="p-2 text-dark" href="#">Pricing</a>--}}
    </nav>

</header>
