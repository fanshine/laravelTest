<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="assets/css/global.css" rel="stylesheet"/>
    <title>Laravel Test</title>
</head>
<body>
    <div class="header_wrapper">
        <div id="header">
            @yield('header')
        </div>
    </div>
    <div class="content_wrapper">
        <div id="content">
            <div class="article">@yield('content')</div>
        </div>
    </div>
    <div class="footer_wrapper">
        <div id="footer">
            @yield('footer')
        </div>
    </div>
</body>
</html>