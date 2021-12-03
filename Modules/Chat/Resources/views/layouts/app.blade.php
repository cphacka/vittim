<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chat</title>

      <link rel="apple-touch-icon" sizes="57x57" href="{{ Module::asset('chat:vector-icons/57_57.png') }}">
      <link rel="apple-touch-icon" sizes="60x60" href="{{ Module::asset('chat:vector-icons/60_60.png') }}">
      <link rel="apple-touch-icon" sizes="72x72" href="{{ Module::asset('chat:vector-icons/72_72.png') }}">
      <link rel="apple-touch-icon" sizes="76x76" href="{{ Module::asset('chat:vector-icons/76_76.png') }}">
      <link rel="apple-touch-icon" sizes="114x114" href="{{ Module::asset('chat:vector-icons/114_114.png') }}">
      <link rel="apple-touch-icon" sizes="120x120" href="{{ Module::asset('chat:vector-icons/120_120.png') }}">
      <link rel="apple-touch-icon" sizes="144x144" href="{{ Module::asset('chat:vector-icons/144_144.png') }}">
      <link rel="apple-touch-icon" sizes="152x152" href="{{ Module::asset('chat:vector-icons/152_152.png') }}">
      <link rel="apple-touch-icon" sizes="180x180" href="{{ Module::asset('chat:vector-icons/180_180.png') }}">
      <link rel="manifest" href="{{ Module::asset('chat:manifest.json') }}">
      <meta name="referrer" content="no-referrer">
      <link rel="shortcut icon" href="{{ Module::asset('chat:vector-icons/57_57.png') }}">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta name="apple-mobile-web-app-title" content="Celeviki.com">
      <meta name="application-name" content="Celeviki.com">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="msapplication-TileImage" content="vector-icons/180_180.png') }}">
      <meta name="msapplication-config" content="{{ Module::asset('chat:vector-icons/browserconfig.93cf611.xml') }}">
      <meta name="theme-color" content="#ffffff">

       {{-- Style --}}
      <link rel="stylesheet" href="{{ Module::asset('chat:bundles/8bdd9bb39f69e827e0f8/bundle.css') }}">
      <link rel="stylesheet" disabled="disabled" title="Legacy" href="{{ Module::asset('chat:bundles/8bdd9bb39f69e827e0f8/theme-legacy.css') }}">
      <link rel="stylesheet" disabled="disabled" title="Light" href="{{ Module::asset('chat:bundles/8bdd9bb39f69e827e0f8/theme-light.css') }}">
      <link rel="stylesheet" disabled="disabled" title="Light-custom" href="{{ Module::asset('chat:bundles/8bdd9bb39f69e827e0f8/theme-light-custom.css') }}">



    </head>
    <body style="height: 100%; margin: 0;" data-vector-indexeddb-worker-script="{{ Module::asset('chat:bundles/8bdd9bb39f69e827e0f8/indexeddb-worker.js') }}">
        @yield('content')

        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/chat.js') }}"></script> --}}
    </body>
</html>
