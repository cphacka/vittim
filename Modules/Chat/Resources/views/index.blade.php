@extends('chat::layouts.app')

@section('content')
  <script>
    let username = '<?php echo $currentUser->chat_username; ?>';
    if (username != undefined)
      window.localStorage.setItem('currentLogin', username);
  </script>

  <noscript>Sorry, requires JavaScript to be enabled.</noscript> <!-- TODO: Translate this? -->
  <section id="matrixchat" style="height: 100%; overflow: auto;" class="notranslate"></section>
  <script src="{{ Module::asset('chat:bundles/8bdd9bb39f69e827e0f8/bundle.js') }}"></script>

@endsection
