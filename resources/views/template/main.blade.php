<!DOCTYPE html>
<html lang="zxx">
<head>
    @include('template._head')
    @yield('css-extra')
</head>
<body id="spandiv">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5CVM782"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
    @include('template._header')
    @yield('content')
    @include('template._footer')
    @include('template._js')
    @yield('js-extra')
</body>
</html>
