@extends('global.master')
@section('content')


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
      @if($status)
      <div class="ui success message">
							<ul class="list">
									<li>Save successfully!</li>
							</ul>					
      </div>      
      @endif

    <div class="ui middle aligned animated list selection relaxed">
    <div class="content">
    <form action="{{ URL('home/setting') }}" class="ui form" method="post">
      <div class="ui segment raised">
        <div class="field">
          <label>Username</label>
          <div class="ui left input">
            <input type="text" value="{{ $userinfo->name }}" name="name" placeholder="0.0">
          </div>
        </div>
        <div class="field">
          <label>Money/Month</label>
          <div class="ui left input">
            <input type="text" value="{{ $userinfo->flow }}" name="flow" placeholder="0.0">
          </div>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">      
    </div>
    <div class="actions">
         <button class="fluid primary ui button">Save</button>
    </div>
    </form>
    </div>
    </div>
  </div>
 @stop