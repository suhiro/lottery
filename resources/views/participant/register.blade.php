@extends('layouts.master')
@section('content')
<section id="container">
    <header>
      <img src="image/MagicNoodle_Banner_Letters.png" id="anniversaryText" alt="Fifth Anniversary">
    </header>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="columns is-centered">
  <div class="column is-four-fifths ">
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
  
    <input class="input " type="email" name="email" placeholder="Entry code will be send to this email" value="">
  
  <!-- <p class="help is-danger">This email is invalid</p> -->
</div>

<div class="field">
  <label class="label">Phone</label>
  
    <input class="input " type="text" name="phone" placeholder="You maybe contacted through this phone number">

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




    <button type="submit" class="button is-primary is-large">Submit</button>


</form>

</div>
</div>


@endsection