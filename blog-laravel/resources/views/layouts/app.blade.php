<html>
<head>
    <link rel="stylesheet" href="css/app.css">
    <title>{{config("app.name")}}</title>
</head>
<body>
    @include("navbar")
    <div class="container">
    @yield("content")
    </div>
</body>
</html>

