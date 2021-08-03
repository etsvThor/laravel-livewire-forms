# Laravel Livewire Forms

![Laravel Livewire Forms](https://i.imgur.com/YB0gEJ8.gif)

A dynamic, responsive [Laravel Livewire](https://laravel-livewire.com) form component with realtime validation, file uploads, array fields, and more.

# Installation

Make sure you've [installed Laravel Livewire](https://laravel-livewire.com/docs/installation/).

Installing this package via composer:

    composer require EtsvThor/laravel-livewire-forms
    
This package was designed to work well with [Laravel frontend scaffolding](https://laravel.com/docs/master/frontend).

If you're just doing scaffolding now, you'll need to add `@stack('scripts')`, `@livewireScripts`, and `@livewireStyles` blade directives to your `resources/views/layouts/app.blade.php` file:

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
    
    ...

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
    @stack('scripts')

This package also uses [Font Awesome](https://fontawesome.com) for icons. If you don't already have it installed, it's as simple as:

    npm install @fortawesome/fontawesome-free
    
Then add the following line to `resources/sass/app.scss`:
    
    @import '~@fortawesome/fontawesome-free/css/all.min.css';
    
Now all that's left is to compile the assets:
    
    npm install && npm run dev

# Documentation
[See the documentation here](DOCS.md)
