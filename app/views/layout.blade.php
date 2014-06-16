<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ isset($title)?$title:'' }}</title>
  {{ HTML::style('css/bootstrap.min.css') }}
  {{ HTML::style('css/bootstrap-theme.min.css') }}
  {{ HTML::style('css/style.css') }}
</head>
<body>
  @yield('nav')
  
  <div class="container">
    @yield('content')
  </div>
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  {{ HTML::script('js/bootstrap.min.js') }}
</body>
</html>