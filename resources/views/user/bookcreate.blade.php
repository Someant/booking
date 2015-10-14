@extends('global.master')
@section('content')

  <div class="ui text container" id="userpanel">
    <div class="ui text container" id="userpanel">
      @if (count($errors) > 0)
      <div class="ui error message">
							<ul class="list">
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>					
      </div>
      @endif

    <div class="ui middle aligned animated list selection relaxed">
    <div class="content">
      <div class="ui segment raised">
      <form action="{{ URL('home/booking') }}" class="ui form" method="post">

        <div class="field">
          <label>Money</label>
          <div class="ui left action input">
            <button class="ui teal labeled icon button"><i class="yen icon"></i>RMB </button>
            <input type="text" value="" name="money" placeholder="0.0">
          </div>
        </div>
        <div class="field">
        <div class="ui form">
          <div class="field">
            <label>Type</label>
            <select class="ui search dropdown" name="type">
              <option value="" default>Select Type ʕ•̫͡•ʔ</option>
              <option value="1">衣 :) /V\</option>
              <option value="2">食 :) -o0o-</option>
              <option value="3">住 :) |--|</option>
              <option value="4">行 :) o``o</option>
              <option value="0">Ohter</option>
            </select>        
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

        <button class="ui fluid primary button" type="submit">Save         <i class="checkmark icon"></i></button>

      </form>
    </div>  
    </div>
    </div>
  </div>
 @stop