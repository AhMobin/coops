

<!--/ Nav Star /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a class="navbar-brand text-brand" href="{{ route('index.page') }}">CC<span class="color-b">OPH</span></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link @if(Request::is('/')) active @endif" href="{{ route('index.page') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Request::is('about-us')) active @endif" href="{{ route('about.page') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Request::is('our-story')) active @endif" href="{{ route('story.page') }}">Our Story</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link @if(Request::is('american-dream')) active @endif" href="{{ route('dream.page') }}">American Dream</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Request::is('our-goals')) active @endif" href="{{ route('goals.page') }}">Our Goals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Request::is('jobs-build-america')) active @endif" href="{{ route('jobs.page') }}">Jobs Build America</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Request::is('contact-us')) active @endif" href="{{ route('contact.page') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--/ Nav End /-->
