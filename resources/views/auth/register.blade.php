<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Register - Funny</title>
  <link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/semantic-ui/2.1.4/semantic.min.css">

  <script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/semantic-ui/2.1.4/semantic.min.js"></script>

  <style type="text/css">
    body {
      background: url(images/home3.jpg);
      /*
      background-color: #6fc39a;*/
      background-image: linear-gradient(125deg, #35a28e, #a8e4a5);
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
    .content{
      color: #FFF
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            name: {
              identifier: 'name',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your name'
                }
              ]
            },
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : '邮箱不能为空'
                },
                {
                  type   : 'email',
                  prompt : '邮箱已被注册'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : '请输入密码'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>


<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
     <!-- <img src="assets/images/logo.png" class="image">-->
      <div class="content">
       Funny Li
      </div>
    </h2>
    <form class="ui large form" role="form" method="POST" action="{{ url('/auth/register') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="ui stacked segment">
		<div class="field">
          <div class="ui left icon input">
            <i class="add user icon"></i>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="用户名" >
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="mail icon"></i>
            <input type="text" name="email" placeholder="邮箱" value="{{ old('email') }}">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="密码">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password_confirmation" placeholder="确认密码">
          </div>
        </div>		
        <div class="ui fluid large green submit button"> 注册</div>
      </div>
			@if (count($errors) > 0)
      <div class="ui red message">
						<div class="alert alert-danger">

								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach

						</div>
					
      </div>
      @endif
    </form>

    <div class="ui message">
      Enjoy! <a href="/auth/login">登录</a>
    </div>
  </div>
</div>
</body>

</html>




