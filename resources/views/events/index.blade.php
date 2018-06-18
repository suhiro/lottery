@extends('layouts.master')

@section('content')
@include('layouts.topbar_b')
<section class="section">
<div class="container">


<div class="columns">
<div class="column">
    @if(count($events))
<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>

  <tbody>
    @foreach($events as $e)
    <tr>
        <td>{{$e->name}}</td>
        <td>{{$e->description}}</td>
        @if($e->finished)
          <td><span class="tag is-danger">Closed</span></td>
        @else
          <td><span class="tag is-success">Open</span></td>
        @endif
        @if($e->finished)
          <td><a class="button is-small" href="{{url("lottery/$e->id/open")}}">Open</a></td>
        @else
          <td><a class="button is-small" href="{{url("lottery/$e->id/close")}}">Close</a></td>
        @endif
    </tr>
    @endforeach
  </tbody>
</table>
@else
<p>There are no events currently
    @endif
</div>
</div>



    
</div>
</section>
@endsection
