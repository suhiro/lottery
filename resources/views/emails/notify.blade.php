@component('mail::message')
# Thanks for Participating in Magic Noodle Lottery Event

<p>Your lottery code: {{$participant->code}}</p>
<p>Please keep the code as it will be used to redeem the prize if you win!</p>
<p>您的的兑奖码: {{$participant->code}}</p>
<p>请妥善保存兑奖码。如果中奖，此码为兑换凭证。</p>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
