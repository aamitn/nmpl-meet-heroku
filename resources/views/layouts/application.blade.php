<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ getSelectedLanguage()->direction }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fafafa">

<meta name="title" content="NMPL Meet- Enterprise Grade Video Conferencing">
<meta name="description" content="Video Conferencing - Made Easy . Without our end-toend encrypted secure video conferencing solutions , make sure never to miss a single bit of your productive meetings.">
<meta name="keywords" content=" VideoConferencing Video VideoCall Call Conferencing Meetings Online Meeting chat voice interactive webinars seminars Meet NMPL Meet NMPLMeet Meeting Meetings IoT bot SOFTWARE DEISGN WEB APPAmit Kumar Nandi Amit Nandi Amit NandiNandi Mechatronics Mechatronicsnandi Mechatronicsnandi mechatronics pvt. ltd.Nandi Mechatroncis Pvt. Ltd.KineSimKinesimKINESIMnandimechatronics.menandimechatronicsNandi			  amit kumar nandi">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="image" content="https://www.enempl.com">

<meta itemprop="name" content="NMPL Meet - Enterprise Grade Video Conferencing">
<meta itemprop="description" content="Video Conferencing - Made Easy . Without our end-toend encrypted secure video conferencing solutions , make sure never to miss a single bit of your productive meetings.">
<meta itemprop="image" content="https://www.enempl.com">

<meta property="og:url" content="https://enempl.com">
<meta property="og:type" content="website">
<meta property="og:title" content="NMPL Meet - Enterprise Grade Video Conferencing">
<meta property="og:description" content="Video Conferencing - Made Easy . Without our end-toend encrypted secure video conferencing solutions , make sure never to miss a single bit of your productive meetings.">
<meta property="og:image" content="https://www.enempl.com/assets/img/meta.png">

<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="enempl.com">
<meta property="twitter:url" content="https://enempl.com">
<meta name="twitter:title" content="NMPL Meet - Enterprise Grade Video Conferencing">
<meta name="twitter:description" content="Video Conferencing - Made Easy . Without our end-toend encrypted secure video conferencing solutions , make sure never to miss a single bit of your productive meetings.">
<meta name="twitter:image" content="https://www.enempl.com/assets/img/meta.png">
<meta name="twitter:image:src" content="https://www.enempl.com/assets/img/meta.png">
<meta name="twitter:player" content="https://www.youtube.com/watch?v=cfqESPPY9EQ&t=5s">
<meta name="twitter:site" content="@ibigwiz">
<meta name="twitter:creator" content="@ibigwiz">
<meta name="og:site_name" content="NMPL Meet - Enterprise Grade Video Conferencing">
<meta name="fb:admins" content="1558631895">
<meta name="fb:app_id" content="591935754763731">
<meta name="og:type" content="product">

<meta name="product:availability" content="IN STOCK">
<meta name="product:price:currency" content="INR">
<meta name="product:price:amount" content="40K">
<meta name="product:brand" content="NMPL Meet Managed and Self - hosted">
<meta name="language" content="English">
<meta name="revisit-after" content="1 days">
<meta name="author" content="Nandi mecahtronics Pvt. Ltd.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification" content="Oeb9ojsNiPsDJod_fV54S6M-N4fIKUUfVKQIN4f69Rs" />



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   	<!-- <title>@yield('title')</title> -->
	<title>NMPL Meet</title>

    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />

    <!-- Styles -->
    <style type="text/css">
        :root {
            --secondary-color: #536d79;
            --primary-color: {{ getSetting('PRIMARY_COLOR') }};
        }

    </style>
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fa.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('storage/images/FAVICON.png') }}">
    @yield('style')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm application-header">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('storage/images/PRIMARY_LOGO.png') }}"
                    alt="{{ getSetting('APPLICATION_NAME') }}" width="160px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    @if (isDemoMode())
                        <button class="btn btn-primary btn-sm">Demo Mode</button>
                        <button class="btn btn-warning ml-1 btn-sm"
                            onclick="location.href='https://codecanyon.net/item/jupitermeet-video-conference/31388330'">Buy
                            Now!</button>
                    @endif

                    @if (getLanguages()->count() > 1)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-globe"></i> {{ getSelectedLanguage()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach (getLanguages() as $language)
                                    <a class="dropdown-item @if (getSelectedLanguage()->name == $language->name) active @endif"
                                        href="{{ route('language', ['locale' => $language->code]) }}">{{ $language->name }}</a>
                                @endforeach
                            </div>
                        </li>
                    @endif

                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('pricing') )
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pricing') }}">{{ __('Pricing') }}</a>
                            </li>
                        @endif

                        @if (Route::has('login') && getSetting('AUTH_MODE') == 'enabled')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register') && getSetting('AUTH_MODE') == 'enabled')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        @if (Auth::user()->role == 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin') }}">{{ __('Admin') }}</a>
                            </li>
                        @endif

                        @if (getSetting('AUTH_MODE') == 'enabled')
                            @if (Route::has('pricing') && count(paymentGateways()) != 0 && getSetting('PAYMENT_MODE') == 'enabled')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('pricing') }}">{{ __('Pricing') }}</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                            </li>
                        @endif

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile.profile') }}">
                                    {{ __('Profile') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <main class="pt-4 mb-5 mb-md-0">
            @yield('content')
        </main>

        <footer class="application-footer">
            <div class="container-fluid">
                <div class="row d-flex align-items-top">
                    <div class="col-12 col-md-9 text-md-left text-center pad-res">
                        <ul class="footer-links">
                            <li>
                                <a href="{{ route('termsAndConditions') }}"
                                    target="_blank">{{ __('Terms & Conditions') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('privacyPolicy') }}"
                                    target="_blank">{{ __('Privacy Policy') }}</a>
                            </li>
                        </ul>
                        <p>{{ __('Copyright') }} &copy; {{ date('Y') }}
                            {{ getSetting('APPLICATION_NAME') }}. {{ __('All rights reserved') }}</p>
                    </div>
                    <div class="col-12 col-md-3 text-md-right text-center pad-res">
                        <div class="social-data">
                            <p><strong>{{ __('Share with your friends') }}</strong></p>
                            <ul class="social-links">
                                <li>
                                    <a href="" target="_blank" id="fbShare" rel="noreferrer">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" target="_blank" id="twitterShare" rel="noreferrer">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" target="_blank" id="waShare" rel="noreferrer">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="cookie">
            <p><i class="fa fa-cookie-bite"></i>
                {{ __('This website uses cookies to ensure you get the best experience on our website') }}
                <a href="{{ route('privacyPolicy') }}"> {{ __('Learn more') }}</a>
            </p>
            <button class="btn btn-theme confirm-cookie">{{ __('Got it') }}</button>
        </div>
    </div>

    <script>
        const cookieConsent = "{{ getSetting('COOKIE_CONSENT') }}";
        const googleAnalyticsTrackingId = "{{ getSetting('GOOGLE_ANALYTICS_ID') }}";
        const socialInvitation = "{{ getSetting('SOCIAL_INVITATION') }}";

        const languages = {
            error_occurred: "{{ __('An error occurred, please try again') }}",
            data_updated: "{{ __('Data updated successfully') }}",
            no_meeting: "{{ __('The meeting does not exist') }}"
        }
    </script>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('script')
</body>

</html>
