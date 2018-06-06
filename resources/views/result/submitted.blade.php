@extends('layouts.master')
@section('content')

<article class="message is-primary">
  <div class="message-header">
    <p>Thank you! {{$participant->firstName}}</p>
    
  </div>
  <div class="message-body">
    Your ballot code is <strong>{{$participant->code}}</strong>
    <p>There are currently {{count($participants)}} participants in this lottery event </p>
  </div>
</article>



<a class="button is-link" href="{{route('home')}}">Back</a>

@endsection
