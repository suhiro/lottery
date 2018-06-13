<!DOCTYPE html>
<html lang="en" class="route-index">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="A lottery app created by Hiro Su">

 <title>Fifth Anniversary</title>
  <link rel="stylesheet" href="https://bulma.io/css/bulma-docs.min.css?v=201806022344">
  <link rel="canonical" href="https://bulma.io/">
  <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  </head>
 <body>
 	@yield('content')


<!--  <footer>
    <p>© COPYRIGHT {{Carbon\Carbon::now()->year}} MAGIC NOODLE<span>DESIGNED BY CREATIVE GRAPHICS INC. </span></p>
    <p>App Powered by Magic Noodle Tech Team</p>
  </footer> -->

 	@yield('pageJS')
 </body>
 </html>