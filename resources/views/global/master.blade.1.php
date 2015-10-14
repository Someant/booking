<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Funny.LI(Beta) - No funny No free</title>

  <link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('dist/components/reset.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('dist/components/site.css')}}">


  <link rel="stylesheet" type="text/css" href="{{url('dist/components/grid.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('dist/components/header.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('dist/components/image.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('dist/components/menu.css')}}">

  <link rel="stylesheet" type="text/css" href="{{url('dist/components/divider.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('dist/components/list.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('dist/components/segment.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('dist/components/dropdown.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('dist/components/icon.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('dist/components/transition.css')}}">
  
  <link rel="stylesheet" type="text/css" href="{{url('dist/components/button.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('dist/components/input.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('dist/semantic.css')}}">


  <script src="{{url('assets/library/jquery.min.js')}}"></script>
  <script src="{{url('dist/components/transition.js')}}"></script>
  <script src="{{url('dist/components/dropdown.js')}}"></script>
  <script src="{{url('dist/components/visibility.js')}}"></script>
  <script src="{{url('dist/components/form.js')}}"></script>
  <script src="{{url('dist/semantic.js')}}"></script>
  <script>
  $(document)
    .ready(function() {

      // fix main menu to page on passing
      $('.main.menu').visibility({
        type: 'fixed'
      });
      $('.overlay').visibility({
        type: 'fixed',
        offset: 80
      });

      // lazy load images
      $('.image').visibility({
        type: 'image',
        transition: 'vertical flip in',
        duration: 500
      });

      // show dropdown on hover
      $('.main.menu  .ui.dropdown').dropdown({
        on: 'hover'
      });
    })
  ;
  </script>

  <style type="text/css">

  body {
    background-color: #FFFFFF;
  }
  .main.container {
    margin-top: 2em;
  }

  .main.menu {
    margin-top: 4em;
    border-radius: 0;
    border: none;
    box-shadow: none;
    transition:
      box-shadow 0.5s ease,
      padding 0.5s ease
    ;
  }
  .main.menu .item img.logo {
    margin-right: 1.5em;
  }

  .overlay {
    float: left;
    margin: 0em 3em 1em 0em;
  }
  .overlay .menu {
    position: relative;
    left: 0;
    transition: left 0.5s ease;
  }

  .main.menu.fixed {
    background-color: #FFFFFF;
    border: 1px solid #DDD;
    box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
  }
  .overlay.fixed .menu {
    left: 800px;
  }

  .text.container .left.floated.image {
    margin: 2em 2em 2em -4em;
  }
  .text.container .right.floated.image {
    margin: 2em -4em 2em 2em;
  }

  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
  

  </style>

</head>
<body>
   <div class="ui borderless main menu">
    <div class="ui text container">
      <div href="#" class="header item">
        <img class="logo" src="{{asset('assets/images/logo.png')}}">
        Funny
      </div>
      <a href="{{url('home')}}" class="item">Home</a>
      <a href="{{url('home/booking')}}" class="item">Bookings</a>
        <div class="ui right floated  dropdown item">
          <img class="ui avatar image" src="{{asset('images/rachel.png')}}"> {{ Auth::user()->name }}  <i class="dropdown icon"></i>
          <div class="menu">
            <a class="item">Message</a>
            <a class="item">Report</a>
            <a class="item" href="{{ url('auth/logout') }}">Logout</a>
          </div>
        </div>
    </div>
  </div>

        <div class="container">
            @yield('content')
        </div>
        
   <script>
      $('select.dropdown').dropdown();
   </script>     
        
</body>
</html>