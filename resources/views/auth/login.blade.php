{{--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
 --}}
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ Metronic::printAttrs('html') }} {{ Metronic::printClasses('html') }}>
<head>
    <meta charset="utf-8"/>

    {{-- Title Section --}}
    <title>{{ config('app.name') }} | @yield('title', $page_title ?? '')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />

    {{-- Fonts --}}
    {{ Metronic::getGoogleFontsInclude() }}

    {{-- Global Theme Styles (used by all pages) --}}
    @foreach(config('layout.resources.css') as $style)
        <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($style)) : asset($style) }}" rel="stylesheet" type="text/css"/>
    @endforeach


    <link rel="stylesheet" type="text/css" href="{{ asset('auth/login.css') }}" />
</head>

<body>
    <div class="login-page">
        <div class="wrapper">
            <div class="container">
                <h1>Welcome</h1>
                <form class="form">
                    <input type="text" placeholder="Username" id="username">
                    <input type="password" placeholder="Password" id="password">
                    <button type="submit" id="login-button">Login</button>
                </form>
            </div>

            <ul class="bg-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>

    {{-- Global Config (global config for global JS scripts) --}}
    <script>
        var KTAppSettings = {!! json_encode(config('layout.js'), JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES) !!};
    </script>

    {{-- Global Theme JS Bundle (used by all pages)  --}}
    @foreach(config('layout.resources.js') as $script)
        <script src="{{ asset($script) }}" type="text/javascript"></script>
    @endforeach

    <script src="{{ asset('auth/login.js') }}"></script>
</body>
</html>

