<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Fifth Anniversary</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>
    <body>

        <section id="container">
    <header>
      <img src="image/MagicNoodle_Banner_Letters.png" id="anniversaryText" alt="Fifth Anniversary">
    </header>
    
    <div id="mainInfo"> 
      
      <p id="info1">The current lottery event has finished. Thank you for your paticipation. The list of winners is below (last three digits of the lottery code). If you are the winner, out staff will contact you shortly.
        <br>
      感谢您的参与！ 本次抽奖活动已经结束啦！ 获奖者名单在下面可查询（兑奖码后三位）！ 如果您是幸运的中奖者，我们的员工会稍后主动联系您！
      </p>
      <p id="info1">Magic Noodle is celebrating our 5th anniversary and we'd like to share our joy with you. Starting from June 16, 2018, we'll be drawing daily for lucky winners with the following prizes:
      </p>

      <p id="info2">
        生根，發芽，成長，五年風雨，一路走來，大槐樹衷心感謝您的支持。
         <br>
        從2018年6月16日起，我們將在活動期間內抽出總計共六位幸運兒，獲得不同數額的禮品卡
      </p>

    <div id="prizes">
      <ul id="prizesList">
        <li>June 16: $50 value gift card x3 
          <ul>
            @foreach($prizes as $p)
              @if($p->level == 0)
            <li>{{'***'.substr($p->code,3)}}</li>
              @endif
            @endforeach
          </ul>
        </li>
        <li>June 17: $100 value gift card x2
        <ul>
            @foreach($prizes as $p)
              @if($p->level == 1)
            <li>{{'***'.substr($p->code,3)}}</li>
              @endif
            @endforeach
          </ul></li>
        <li>June 18: $200 value gift card x1
        <ul>
            @foreach($prizes as $p)
              @if($p->level == 2)
            <li>{{'***'.substr($p->code,3)}}</li>
              @endif
            @endforeach
          </ul></li>
      </ul>

      
            <hr>
            <br>
   
    </div>

   
 </section> 

    </body>
</html>
