<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="landing-body">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Bhayangkara</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto landing-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">REGISTER</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        {{ $slot }}
    </div>
</body>

</html>
