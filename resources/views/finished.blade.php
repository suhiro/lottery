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
      
      <p id="info1">Magic Noodle would like to thank everyone for your continued support in making us who we are today. Our anniversary lottery event has finished, thank you for your participation and congratulations to those who won! The lucky winners are as following (please refer to last three digits of the lottery code):

      </p>
       <p id="info2">生根，發芽，成長 — 5年風雨，一路走來，大槐樹衷心感謝各位的支持！
本次5週年慶抽獎活動已結束，感謝大家的參與。
獲獎名單如下（請對照兌獎碼后三位）：

      </p>

    <div id="prizes">
      <ul id="prizesList">
        <li>June 16: $50 value gift card x3 
          <br>
          6月16日: 價值$50的禮品卡 三張

          <ul>
            @foreach($prizes as $p)
              @if($p->level == 0)
            <li>{{'***'.substr($p->code,3)}}</li>
              @endif
            @endforeach
          </ul>
        </li>
        <li>June 17: $100 value gift card x2
          <br>6月17日: 價值$100的禮品卡 兩張

        <ul>
            @foreach($prizes as $p)
              @if($p->level == 1)
            <li>{{'***'.substr($p->code,3)}}</li>
              @endif
            @endforeach
          </ul></li>
        <li>June 18: $200 value gift card x1
          <br>6月18日: 價值$200的禮品卡 一張

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
            <p>
              If you are the winner, our staff will get in touch with you shortly to arrange for prize pickup, thank you again for your participation.
            </p>
            <p>
我們的員工將盡快與幸運的中獎者聯繫安排領取獎品，再次感謝您的參與
            </p>
   
    </div>

   
 </section> 

    </body>
</html>
