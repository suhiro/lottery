@extends('layouts.master')

@section('content')
@include('layouts.topbar_b')
<section class="section">
<div class="container">


<div class="columns">
<div class="column">
    @if(count($prizes))
<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Winning code</th>
      <th>Winner</th>
      <th>Redeemed</th>
      <th>Action</th>
    </tr>
  </thead>

  <tbody>
    @foreach($prizes as $p)
    <tr>
        <td>{{$p->name}}</td>
         <td>{{$p->description}}</td>
            <td>{{$p->code}}</td>
            @if($p->participant)
             <td>{{$p->participant->firstName}} {{$p->participant->lastName}}</td>
            @else
            <td></td>
            @endif
               <td>
               @if($p->redeemed)
               <span class="tag is-success">yes</span>
               @else
               <span class="tag is-danger">no</span>
               @endif
                </td>

          <td>
            @if($p->code)
              <button type="button" class="button is-link">Notify</button>
            @else
              <a class="button is-warning" href="{{url("prize/$p->id/generate")}}">Generate</a>
            @endif

          </td>
    </tr>
    @endforeach
  </tbody>
</table>
@else
<p>There are no prizes currently
    @endif
</div>
</div>



    
</div>
</section>
@endsection
