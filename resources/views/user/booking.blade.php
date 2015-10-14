<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Booking - Funny</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="../../dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="../../dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/transition.css">
  
  <link rel="stylesheet" type="text/css" href="../../dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/label.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/popup.css">
  <link rel="stylesheet" type="text/css" href="../../dist/semantic.css">


  <script src="//upcdn.b0.upaiyun.com/libs/jquery/jquery-2.0.3.min.js"></script>
  <script src="../../dist/components/transition.js"></script>
  <script src="../../dist/components/dropdown.js"></script>
  <script src="../../dist/components/visibility.js"></script>
  
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
  <div class="ui borderless main menu">
    <div class="ui text container">
      <div href="#" class="header item">
        <img class="logo" src="../../assets/images/logo.png">
        Funny.LI
      </div>
      <a href="#" class="item">List</a>
      <a href="#" class="item active">Booking</a>
      <a href="#" class="ui right floated dropdown item">
        <img class="ui avatar image" src="../../images/rachel.png">
        {{ Auth::user()->name }} <i class="dropdown icon"></i>
        <div class="menu">
          <div class="item">私信</div>
          <div class="item">订阅</div>
          <div class="item">退出</div>

        </div>
      </a>
    </div>
  </div>
{{var_dump(Auth::user())}}
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

    <div class="ui middle aligned animated list relaxed">
      
        <a class="item">
          <div class="right floated content">
            <div class="ui small label">剩余时间：19h:12m:36s</div>
          </div>
          <i class="alarm outline icon"></i>
          <div class="content">
            <div class="header">买菜</div>
            <div class="description">文本总是左对齐的以确保它们挨着你的图标</div>
          </div>
        </a>
        <a class="item">
          <div class="right floated content">
            <div class="ui small label">剩余时间：1d:19h:12m:36s</div>
          </div>          
          <i class="calendar outline icon"></i>
          <div class="content">
            <div class="header">吃饭</div>
            <div class="description">老丈人要来2333.</div>
          </div>
        </a>
        <a class="item">
          <div class="right floated content">
            <div class="ui small label">剩余时间：7d</div>
          </div>          
          <i class="spinner icon"></i>
          <div class="content">
            <div class="header">睡觉</div>
            <div class="description">早睡早起身体好.</div>
          </div>
        </a>
        <a class="item">
          <div class="right floated content">
            <div class="ui small label">剩余时间：19h:12m:36s</div>
          </div>
          <i class="alarm outline icon"></i>
          <div class="content">
            <div class="header">买菜</div>
            <div class="description">文本总是左对齐的以确保它们挨着你的图标</div>
          </div>
        </a>
        <a class="item">
          <div class="right floated content">
            <div class="ui small label">剩余时间：1d:19h:12m:36s</div>
          </div>          
          <i class="calendar outline icon"></i>
          <div class="content">
            <div class="header">吃饭</div>
            <div class="description">老丈人要来2333.</div>
          </div>
        </a>
        <a class="item">
          <div class="right floated content">
            <div class="ui small label">剩余时间：7d</div>
          </div>          
          <i class="spinner icon"></i>
          <div class="content">
            <div class="header">睡觉</div>
            <div class="description">早睡早起身体好.</div>
          </div>
        </a>
      </div>
      <div class="ui page grid">
        <button class="fluid ui button">Morn</button>
      </div>
  </div>
  <div class="ui modal">
    <i class="close icon"></i>
    <div class="header">
      <h5>新增事件</h5>
    </div>
    <div class="content">

      <form action="{{ URL('user/booking') }}" class="ui form">
        <div class="field">
          <label>Event</label>
          <select class="ui fluid dropdown" name="event">
            <option value="1">计划事件<i class="alarm outline icon"></i></option>
            <option value="2">重复事件</option>
            <option value="3">定时任务</option>
    
          </select>
        </div>
        <div class="field">
          <label>Description</label>
          <textarea name="description"></textarea>
        </div>

      </form>
      
    </div>
    <div class="actions">
      <div class="ui black deny button">
        取消
      </div>
      <div class="ui positive right labeled icon button">
        确定
        <i class="checkmark icon"></i>
      </div>
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
<script>
 $('#add').click(function(){   
    $('.ui.modal').modal('show');
 });
</script>
</body>

</html>
