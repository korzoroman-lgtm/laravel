<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
            background-color: #fdfdfc;
            color: #1b1b18;
            line-height: 1.5;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background-color: #fff;
            border-bottom: 1px solid #e3e3e0;
            padding: 15px 0;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1b1b18;
            text-decoration: none;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        nav a {
            color: #1b1b18;
            text-decoration: none;
            font-size: 0.95rem;
            transition: color 0.2s;
        }

        nav a:hover {
            color: #f53003;
        }

        main {
            padding: 60px 0;
        }

        .hero {
            text-align: center;
            padding: 80px 0;
        }

        .hero h1 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #1b1b18;
        }

        .hero p {
            font-size: 1.1rem;
            color: #706f6c;
            max-width: 600px;
            margin: 0 auto 30px;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #1b1b18;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-size: 0.95rem;
            font-weight: 500;
            transition: all 0.2s;
        }

        .btn:hover {
            background-color: #000;
            transform: translateY(-1px);
        }

        .btn-outline {
            background-color: transparent;
            border: 1px solid #e3e3e0;
            color: #1b1b18;
        }

        .btn-outline:hover {
            background-color: #1b1b18;
            color: #fff;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 60px 0;
        }

        .feature-card {
            background: #fff;
            border: 1px solid #e3e3e0;
            border-radius: 8px;
            padding: 30px;
            transition: all 0.2s;
        }

        .feature-card:hover {
            border-color: #1b1b18;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .feature-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #1b1b18;
        }

        .feature-card p {
            color: #706f6c;
            font-size: 0.95rem;
        }

        footer {
            background-color: #fff;
            border-top: 1px solid #e3e3e0;
            padding: 30px 0;
            text-align: center;
            color: #706f6c;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 1.8rem;
            }

            nav ul {
                gap: 20px;
            }

            .header-content {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <a href="/" class="logo">{{ config('app.name', 'My App') }}</a>
                <nav>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            {{ $slot }}
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'My App') }}. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
