@extends('layouts.app')

@section('title', '| Add User')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    <h1><i class='fa fa-user-plus'></i> Add User</h1>
    <hr>

    {{ Form::open(array('url' => 'users')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', '', array('class' => 'form-control')) }}
    </div>

    <h5><b>Give Role</b></h5>
    
    <div class='form-group'>
        @foreach ($roles as $role)
            {{ Form::radio('roles[]',  $role->id ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

        @endforeach
    </div>
    <!--  <select class="form-control">
           <option value="">Select role</option>
          @foreach($roles as $role)
           <option value="{{$role->id}}">{{$role->name}}</option>
          @endForeach     
     </select> -->

   <!--  <div class="form-group">
    <label for="roles">Give Role</label>
    <select class="form-control" id="id">
        <option value="">Select role</option>
      @foreach($roles as $role)
           <option value="{{$role->id}}">{{$role->name}}</option>
      @endForeach  
    </select>
    </div> -->

    <div class="form-group">
        {{ Form::label('password', 'Password') }}<br>
        {{ Form::password('password', array('class' => 'form-control')) }}

    </div>

    <div class="form-group">
        {{ Form::label('password', 'Confirm Password') }}<br>
        {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

    </div>

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection