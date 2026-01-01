<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/js/app.js'])

    <!-- Optional: Bootstrap 5 for improved UI -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #71a3c1 0%, #c9a2c8 100%);
            font-family: 'Inter', sans-serif;
        }

        .navbar {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .navbar-brand {
            font-weight: 600;
            color:  #71a3c1 !important;
        }

        .nav-link {
            color: #495057 !important;
            transition: color 0.2s ease;
        }

        .nav-link:hover {
            color: #71a3c1 !important;
        }

        main {
            padding-top: 0rem;
            padding-bottom: 0rem;
        }

        .container {
            max-width: 100%;
        }
    </style>
</head>

<body>
    <div id="app">
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
