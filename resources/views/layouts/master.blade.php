<!DOCTYPE html>
<html lang="en" class="route-index">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="A lottery app created by Hiro Su">

  <title>{{config('app.name')}}</title>
  <link rel="stylesheet" href="https://bulma.io/css/bulma-docs.min.css?v=201806022344">
  <link rel="canonical" href="https://bulma.io/">
  </head>
 <body>
 	@yield('content')


<footer class="footer" style="position:fixed;bottom:0;width:100%">
  <div class="container">
    <div class="content has-text-centered">
      <p>
        &copy; {{Carbon\Carbon::now()->year}} Hiro Su,  <strong>Powered</strong> by Magic Noodle Tech Team
      </p>
    </div>
  </div>
</footer>

 	@yield('pageJS')
 </body>
 </html>