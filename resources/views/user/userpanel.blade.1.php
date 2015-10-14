<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Sticky Example - Semantic</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="../dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="../dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/transition.css">
  
  <link rel="stylesheet" type="text/css" href="../dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/input.css">
  <link rel="stylesheet" type="text/css" href="../../dist/semantic.css">


  <script src="assets/library/jquery.min.js"></script>
  <script src="../dist/components/transition.js"></script>
  <script src="../dist/components/dropdown.js"></script>
  <script src="../dist/components/visibility.js"></script>
  <script src="../dist/components/form.js"></script>
  <script src="../../dist/semantic.js"></script>
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
@section('content')

  <div class="ui borderless main menu">
    <div class="ui text container">
      <div href="#" class="header item">
        <img class="logo" src="assets/images/logo.png">
        JUST GO
      </div>
      <a href="#" class="item">List</a>
      <a href="#" class="item">Articles</a>
      <a href="#" class="ui right floated dropdown item">
        <img class="ui avatar image" src="images/rachel.png">
         {{ Auth::user()->name }}<i class="dropdown icon"></i>
        <div class="menu">
          <div class="item">私信</div>
          <div class="item">订阅</div>
          <div class="item">退出</div>

        </div>
      </a>
    </div>
  </div>

  <div class="ui text container" id="userpanel">
    <div class="ui text container" id="userpanel">
    <div class="ui middle aligned animated list relaxed">      
        <div class="item">
          <div class="right floated content" data-content="Add users to your feed">
            <button class="ui icon button" id="add">
              <i class="plus icon"></i>
            </button>
            <button class="ui icon button">
              <i class="setting icon"></i>
            </button>
          </div>
        </div>
    </div>
    <div class="ui middle aligned animated list selection relaxed">
      @foreach ($money as $money)
      <div class="item">
        <div class="right floated content">
          <div class="ui"><i class="yen icon"></i>{{$money->money}}元</div>
        </div>
        <img class="ui avatar image" src="images/rachel.png">
        <div class="content">
          <a class="header">{{Auth::user()->name }}</a>
          <div class="description">{{@substr($money->created_at,0,11)}} <a>{{$money->description}}</a> </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

        <!--
  <div class="ui inverted vertical footer segment">
    <div class="ui center aligned container">
      
      <div class="ui stackable inverted divided grid">

        <div class="three wide column">
          <h4 class="ui inverted header">Group 1</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Group 2</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Group 3</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
      
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
      <div class="ui inverted section divider"></div>
      <img src="assets/images/logo.png" class="ui centered mini image">
      <div class="ui horizontal inverted small divided link list">
        <a class="item" href="#">Site Map</a>
        <a class="item" href="#">Contact Us</a>
        <a class="item" href="#">Terms and Conditions</a>
        <a class="item" href="#">Privacy Policy</a>
      </div>
    </div>
  </div>
  -->
  <div class="ui modal">
    <i class="close icon"></i>
    <div class="header">
      <h5>Money</h5>
    </div>
    <div class="content">

      <form action="{{ URL('home/') }}" class="ui form" method="post">
        <div class="field">
          <label>Time</label>
          <div class="ui left action input">
            <button class="ui teal labeled icon button"><i class="cart icon"></i> Date </button>
            <input type="text" value="Today" name="time">
          </div>
        </div>
        <div class="field">
          <label>How much？</label>
          <div class="ui left action input">
            <button class="ui teal labeled icon button"><i class="yen icon"></i>RMB </button>
            <input type="text" value="0.0" name="money">
          </div>
        </div>
        <div class="field">
          <label>How much？</label>
          <div class="ui left action input">
          <div class="ui selection dropdown">
            <input name="gender" type="hidden">
            <div class="default text">性别</div>
            <i class="dropdown icon"></i>
            <div class="menu">
              <div class="item" data-value="male">男</div>
              <div class="item" data-value="female">女</div>
            </div>
          </div>
          </div>
        </div>
        <div class="field">
          <label>Description</label>
          <textarea name="description"></textarea>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

      
    </div>
    <div class="actions">
      <div class="ui black deny button">
        取消
      </div>
        <button class="ui primary button" type="submit">Save         <i class="checkmark icon"></i></button>

      </form>
    </div>
  </div>
 <script>
  $('#add').click(function(){   
      $('.ui.modal').modal('show');
  });
  
  $.ajax({

  statusCode: {

    404: function() {

      alert("page not found");

    }

  }

});


</script>
</body>

</html>
