<!DOCTYPE html>
<html lang="en">
    
<head>

    <title>
        @yield('title','Dashboard')
    </title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @include('layout.sections.styles.styles')

</head>