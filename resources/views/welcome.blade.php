@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="hero">
    <h1>Welcome to {{ config('app.name', 'My App') }}</h1>
    <p>Build amazing web applications with Laravel. This is a simple and clean starting point for your next project.</p>
    <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
        <a href="https://laravel.com/docs" class="btn" target="_blank">Documentation</a>
        <a href="https://laracasts.com" class="btn btn-outline" target="_blank">Laracasts</a>
    </div>
</div>

<section id="features" class="features">
    <div class="feature-card">
        <h3>Fast Development</h3>
        <p>Laravel provides a clean and elegant syntax while being powerful enough to handle the most complex web applications.</p>
    </div>
    <div class="feature-card">
        <h3>Secure by Default</h3>
        <p>Built with security in mind. Laravel protects your application against the most serious security threats.</p>
    </div>
    <div class="feature-card">
        <h3>Modern Tools</h3>
        <p>Enjoy the benefits of modern PHP and built-in tools for routing, authentication, caching, and more.</p>
    </div>
</section>

<section id="about" class="hero" style="padding: 40px 0;">
    <h2>About This Template</h2>
    <p>This is a simple, clean Laravel template designed for quickstart. It includes a base layout with header, navigation, and footer. Extend this layout in your views to build your application.</p>
</section>
@endsection
