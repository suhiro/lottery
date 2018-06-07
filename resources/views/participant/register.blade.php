@extends('layouts.master')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{url('participant_register')}}">
	{{csrf_field()}}
<div class="field">
  <label class="label">First name</label>
  <div class="control">
    <input class="input" type="text" name="firstName" placeholder="First name as it appears on your government issued photo ID" required>
  </div>
</div>

<div class="field">
  <label class="label">Last name</label>
  <div class="control">
    <input class="input " type="text" name="lastName" placeholder="Last name as it appears on your government issued photo ID" required>
   
  </div>
 <!--  <p class="help is-success">This username is available</p> -->
</div>

<div class="field">
  <label class="label">Email</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input " type="email" name="email" placeholder="Entry code will be send to this email" value="">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-exclamation-triangle"></i>
    </span>
  </div>
  <!-- <p class="help is-danger">This email is invalid</p> -->
</div>

<div class="field">
  <label class="label">Phone</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input " type="text" name="phone" placeholder="You maybe contacted through this phone number">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-exclamation-triangle"></i>
    </span>
  </div>
  <!-- <p class="help is-danger">This email is invalid</p> -->
</div>



<div class="field">
  <div class="control">
    <label class="checkbox">
      <input type="checkbox">
      I agree to the <a href="#">terms and conditions</a>
    </label>
  </div>
</div>



<div class="field is-grouped">
  <div class="control">
    <button type="submit" class="button is-link">Submit</button>
  </div>
  <div class="control">
    <button class="button is-text">Cancel</button>
  </div>
</div>
</form>
@endsection