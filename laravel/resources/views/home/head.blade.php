<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Organize os alimentos e acompanhe a despensa da sua casa.">
    <title>{{ $title ?? 'Despensa em Dia | Sistema Casa' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
    <style>
        :root {
            --home-green: #256b4d;
            --home-green-dark: #194d37;
            --home-cream: #f7f8f3;
            --home-ink: #1d2c25;
        }

        body {
            background: #fff;
            color: var(--home-ink);
        }

        .navbar-brand-mark {
            align-items: center;
            background: var(--home-green);
            border-radius: 0.75rem;
            color: #fff;
            display: inline-flex;
            font-size: 0.875rem;
            font-weight: 700;
            height: 2.5rem;
            justify-content: center;
            width: 2.5rem;
        }

        .home-hero {
            background: var(--home-cream);
            overflow: hidden;
            position: relative;
        }

        .home-hero::after {
            background: #e7efe8;
            border-radius: 50%;
            content: "";
            height: 22rem;
            position: absolute;
            right: -8rem;
            top: -12rem;
            width: 22rem;
        }

        .hero-content,
        .hero-card {
            position: relative;
            z-index: 1;
        }

        .hero-title {
            color: var(--home-green-dark);
            letter-spacing: -0.04em;
            max-width: 39rem;
        }

        .hero-card {
            border: 0;
            border-radius: 1.25rem;
            box-shadow: 0 1rem 3rem rgba(29, 44, 37, 0.1);
        }

        .feature-card {
            border: 1px solid #e9eee9;
            border-radius: 1rem;
            height: 100%;
        }

        .feature-number {
            align-items: center;
            background: #eaf3ed;
            border-radius: 0.75rem;
            color: var(--home-green);
            display: inline-flex;
            font-size: 0.875rem;
            font-weight: 700;
            height: 2.5rem;
            justify-content: center;
            width: 2.5rem;
        }

        .btn-success {
            --bs-btn-bg: var(--home-green);
            --bs-btn-border-color: var(--home-green);
            --bs-btn-hover-bg: var(--home-green-dark);
            --bs-btn-hover-border-color: var(--home-green-dark);
            --bs-btn-active-bg: var(--home-green-dark);
            --bs-btn-active-border-color: var(--home-green-dark);
        }
    </style>
</head>
<body>
