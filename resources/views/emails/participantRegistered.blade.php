@component('mail::message')
# 有新人参加抽奖了！

<p>{{$participant->firstName}} {{$participant->lastName}} 参加了 {{$participant->lottery->name}}的抽奖活动。</p>
<p>兑奖码： {{$participant->code}}</p>
<p>IP 地址： {{$participant->ip_address}}</p>



Thanks,<br>
{{ config('app.name') }}
@endcomponent
