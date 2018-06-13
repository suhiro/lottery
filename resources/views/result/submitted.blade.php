@extends('layouts.master')
@section('content')



  <section id="container">
    <header>
      <img src="image/MagicNoodle_Banner_Letters.png" id="anniversaryText" alt="Fifth Anniversary">
    </header>
    

  <div id="icon">
<div class="has-text-primary">
  <i class="fas fa-check-circle fa-7x"></i>
</div>
  </div>

  <div id="thanks">
    <h1>{{$participant->firstName}}, Thanks for registering!</h1>
    <h1>感謝您的支持！</h1>
    <h1>祝您好運！</h1>
  </div>

<div class="columns is-centered">
	<div class="clolumn">
 <article class="message is-primary">
  <div class="message-header">
    <p>Good Luck</p>
  </div>
  <div class="message-body">
    Lottery Code 兑奖码:  <strong>{{$participant->code}}</strong>
    <p>There are currently {{count($participants)}} participants in this lottery event.</p>
  </div>
</article>
</div>
</div>

  <div id="mainButton">
      <a href="http://www.magicnoodle.ca"><button class="button">Finish 完成</button></a>
             
    </div>
 </section> 
@endsection
