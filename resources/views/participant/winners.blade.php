@extends('layouts.master')

@section('content')
@include('layouts.topbar_b')
<section class="section">
<div class="container">


<div class="columns">
<div class="column">
   @if(count($participants))
<table class="table">
  <thead>
    <tr>
      <th>First name</th>
      <th>Last name</th>
      <th>phone</th>
      <th>email</th>
      <th>code</th>
      <th>valid</th>
      <th>winner</th>
      <th>redeemed</th>
      <th>ip address</th>
      <th>platform</th>
      <th>entry</th>
    </tr>
  </thead>

  <tbody>
    @foreach($participants as $p)
    <tr>
        <td>{{$p->firstName}}</td>
         <td>{{$p->lastName}}</td>
          <td>{{$p->phone}}</td>
           <td>{{$p->email}}</td>
            <td>{{$p->code}}</td>
             
              <td>
               @if($p->valid)
               <span class="tag is-success">yes</span>
               @else
               <span class="tag is-danger">no</span>
               @endif
                </td>

            <td>
               @if($p->winner)
               <span class="tag is-success">yes</span>
               @else
               <span class="tag is-danger">no</span>
               @endif
                </td>

               <td>
               @if($p->redeemed)
               <span class="tag is-success">yes</span>
               @else
               <span class="tag is-danger">no</span>
               @endif
                </td>
                <td>{{$p->ip_address}}</td>
                 <td>{{$p->location_id}}</td>
                  <td>{{$p->created_at}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@else
<p>There are no participants currently
    @endif
</div>
</div>



    
</div>
</section>
@endsection
