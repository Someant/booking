<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Funny(Beta) - No funny No free</title>

  <link rel="stylesheet" type="text/css" href="{{url('style.css')}}">

  <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/semantic-ui/2.1.4/semantic.min.css">

  <script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/semantic-ui/2.1.4/semantic.min.js"></script>
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
    background: linear-gradient(125deg, #35a28e, #a8e4a5);
  }
  .main.container {
    margin-top: 2em;
  }
  
  .ui.text.container{
    font-family: miranafont,"Hiragino Sans GB",STXihei,"Microsoft YaHei",SimSun,sans-serif;
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
  
  .ui.vertical.segment{
    border-bottom: none;
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
      <a href="{{url('home')}}" class="item active">Home</a>
      <a href="{{url('home/booking')}}" class="item">About</a>
    </div>
   </div>
   

        <div class="container">   
          <div class="ui text container" id="userpanel">
          <div class="ui red progress active indicating" data-percent="36">
                <div class="bar" style="transition-duration: 300ms; width: 36%;">
                  <div class="progress">15%</div>
                </div>
            </div>
            <div class="ui raised segment">
              <h4 class="ui horizontal divider header"><i class="tag icon"></i> Description </h4>
                <p class="ui center aligned header">A simple record and memos tools.</p>
                <h4 class="ui horizontal divider header"><i class="bar chart icon"></i> Infomation</h4>
                <table class="ui definition table">
                  <tbody>
                    <tr>
                      <td class="two wide column">Start time</td>
                      <td>2015/7</td>
                    </tr>
                    <tr>
                      <td class="two wide column">Lanauage</td>
                      <td>PHP5.5</td>
                    </tr>
                    <tr>
                      <td class="two wide column">Framework</td>
                      <td>Semantic-ui2.0 and Laravel5.0</td>
                    </tr>
                    <tr>
                      <td class="two wide column">Publish</td>
                      <td>Unknown</td>
                    </tr>
                    <tr>
                      <td class="two wide column">Version</td>
                      <td>Beta</td>
                    </tr>
                  </tbody>
                </table>
            </div>
          </div>
        </div>         
        </div>
        <div class="ui vertical footer segment">
          <div class="ui center aligned container">
            <div class="ui horizontal inverted small divided link list">
              <a class="item" href="#">Site Map</a>
              <a class="item" href="#">Contact Us</a>
              <a class="item" href="#">About Us</a>
              <a class="item" href="#">Privacy Policy</a>
            </div>
          </div>
        </div>
        
   <script>
     $('.logo').hover(function(){
       $(this).attr({'src':'/assets/images/logo2.png'});
     });
     
     $('.logo').mouseleave(function(){
       $(this).attr({'src':'/assets/images/logo.png'});
     });
   </script>     
        
</body>
</html>