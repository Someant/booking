<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Funny.LI(Beta) - No funny No free</title>

  <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/semantic-ui/2.1.4/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="{{url('style.css')}}">


  <script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/semantic-ui/2.1.4/semantic.min.js"></script>
  <script src="{{url('js/Chart.min.js')}}"></script>

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
    background-color:#DFE8E2;
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
   <div class="ui borderless main menu" id="topmenu">
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
  <session>
         <div class="ui vertical footer segment">
          <div class="ui center aligned container ">
            <div class="ui horizontal inverted small divided link list segment raised">
              <a class="item" href="#">Site Map</a>
              <a class="item" href="#">Contact Us</a>
              <a class="item" href="#">About Us</a>
              <a class="item" href="#">Privacy Policy</a>
            </div>
          </div>
        </div>
  </session>      
        
   <script>
      $('select.dropdown').dropdown();
       
      $('#more').click(function(){
        var page=$(this).attr('data-page');
        var html=''; 
        $.ajax({
          url:"/home/ajax/2/?page="+page,
          type:"post",
          data:{'_token': "{{ csrf_token() }}"},
          dataType:"json",
          success:function(e){
            //alert(e.data[0].money);
            
            for(var i in e.data)
            {
              //alert(e.data[i].money);
              html=html+'<div class="item"><div class="right floated content"><div class="ui"><i class="yen icon"></i>'+e.data[i].money+'</div></div>'+
              '<div class="content"><div class="description"><i class="'+e.data[i].type+'"></i>'+e.data[i].add_time+'</div></div></div>';
            }
            if(e.data=='')
            {
              $('#more').attr('class',$('#more').attr('class')+' disabled');
              $('#more').html('No More');
            }
            else
            {
              $('#content').append(html);
              $('#more').attr('data-page',parseInt(page)+1);
            }
            
            
          }
        });
      }); 
      
      function alertObj(obj){
        var output = "";
        for(var i in obj){  
          var property=obj[i];  
          output+=i+" = "+property+"\n"; 
        }  
        alert(output);
      }
      
      
      $('.ui.form')
      .form({
        fields: {
          name: {
            identifier: 'money',
            rules: [
              {
                type   : 'empty',
                prompt : 'Please enter your moeny'
              },
              {
                type   : 'number'
                
              }
            ]
          }
        }
        });
 
      $(document).on('ajaxStart', function(){ 
          $('.dimmer').addClass('active');
      }); 
 
      $(document).on('ajaxComplete', function(){ 
          setTimeout(function(){ 
            $('.dimmer').removeClass('active');
         }, 200); 
      }); 

   </script>     
        
</body>
</html>