

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title>血液型アンケート</title>
</head>

<body>
  <div class="main">
  <form action="bloodtype_create.php" method="POST">
    <fieldset>
      <legend>血液型アンケート（入力画面）</legend>
      
      <div>
        A型: <a href="javascript:void(0);" onclick="document.A.submit()"><input type="radio" name="bloodtype" value="A"></a>
      </div>
      <div>
        B型: <a href="javascript:void(0);" onclick="document.B.submit()"><input type="radio" name="bloodtype" value="B"></a>
      </div>
      <div>
        O型: <a href="javascript:void(0);" onclick="document.O.submit()"><input type="radio" name="bloodtype" value="O"></a>
      </div>
      <div>
        AB型: <a href="javascript:void(0);" onclick="document.AB.submit()"><input type="radio" name="bloodtype" value="AB"></a>
      </div>
      <div>
        <p><input type="submit" name ="add" value="登録" /></p>
      </div>
      <a href="bloodtype_read.php">一覧画面</a>
    </fieldset>
  </form>
  </div>
  
  <div class="content">
    <a class="modal_open" href="" data-target="modal01">A型</a><br>
    <a class="modal_open" href="" data-target="modal02">B型</a><br>
    <a class="modal_open" href="" data-target="modal03">O型</a><br>
    <a class="modal_open" href="" data-target="modal04">AB型</a>
  </div>
  <div id="modal01" class="modal">
    <div class="modal_wrapper"></div>
    <div class="modal_content">
      <a class="modal_close close_btn" href="">×</a>
        <p>A型の特徴</p>
        <ul class="contact-box-txt1">
          <li>几帳面で真面目</li>
          <li>コツコツした作業が得意</li>
          <li>他人を気遣うため優しい</li>
        </ul>
    </div>
  </div>
  <div id="modal02" class="modal">
    <div class="modal_wrapper"></div>
    <div class="modal_content">
      <a class="modal_close close_btn" href="">×</a>
        <p>B型の特徴</p>
        <ul class="contact-box-txt1">
          <li>好奇心が旺盛</li>
          <li>心を開くまでに時間がかかる</li>
          <li>興味のない事にはとことん無関心</li>
        </ul>
    </div>
  </div>
  <div id="modal03" class="modal">
    <div class="modal_wrapper"></div>
    <div class="modal_content">
    <a class="modal_close close_btn" href="">×</a>
      <p>O型の特徴</p>
      <ul class="contact-box-txt1">
        <li>おおらかで大雑把</li>
        <li>人と違うところで笑う</li>
        <li>大抵の事は寝たら解決する</li>
       </ul>
    </div>
  </div>
  <div id="modal04" class="modal">
    <div class="modal_wrapper"></div>
    <div class="modal_content">
    <a class="modal_close close_btn" href="">×</a>
      <p>AB型の特徴</p>
      <ul class="contact-box-txt1">
        <li>A型とB型両方の特徴を持っており、二面性をもつ方が多い</li>
        <li>天才肌、ミステリアスな印象と相まってカリスマ性がある</li>
        <li>変なところで几帳面で真面目</li>
       </ul>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
   $(function(){
      $('.modal_open').each(function(){
          $(this).on('click',function(){
              var target = $(this).data('target');
              var modal = document.getElementById(target);
              $(modal).fadeIn();
              return false;
          });
      });
      $('.modal_close').on('click',function(){
          $('.modal').fadeOut();
          return false;
      });
  });
  </script>
</html>