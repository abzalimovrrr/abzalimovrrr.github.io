
<html>
    
    <meta charset="utf-8">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Калькулятор кредитных процентов</title>

  <!-- CSS -->
  <link rel="stylesheet" href="css/main.css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.png" type="image/png">
</head>

<body class="style-body reset-body">

  <section class="calculation">
    <div class="container calculation_container">
      <h2 class="calculation__title">Кредитный калькулятор</h2>

      <div class="calculation__sliders">
        <div class="calculation__slider calculation__loan-amount">
          <div class="calculation__area-slider">
            <div class="calculation__slider-label">
              <div class="calculation__slider-title">Сколько вам нужно</div>
              <div class="calculation__slider-result"><span>30 000</span>₽</div>
            </div>
            <input class="calculation__slider-button" type="range" min="30000" max="30000000" step="10000" value="30000">
          </div>
          <div class="calculation__hint">
            <div class="calculation__hint-left">
              от <span>30 000</span>₽
            </div>
            <div class="calculation__hint-right">
              до <span>30 000 000</span>₽
            </div>
          </div>
        </div>
        <div class="calculation__slider calculation__number-months">
          <div class="calculation__area-slider">
            <div class="calculation__slider-label">
              <div class="calculation__slider-title">Срок кредита</div>
              <div class="calculation__slider-result"><span>6</span> месяцев</div>
            </div>
            <input class="calculation__slider-button" type="range" min="6" max="360" step="1" value="6">
          </div>
          <div class="calculation__hint">
            <div class="calculation__hint-left">
              от <span>6</span> месяцев
            </div>
            <div class="calculation__hint-right">
              до <span>30</span> лет
            </div>
          </div>
        </div>
        <div class="calculation__slider calculation__interest-rate">
          <div class="calculation__area-slider">
            <div class="calculation__slider-label">
              <div class="calculation__slider-title">Процент по кредиту</div>
              <div class="calculation__slider-result"><span class="percent">5</span> %</div>
            </div>
            <input class="calculation__slider-button" type="range" min="0.05" max="0.30" step="0.01" value="0.05">
          </div>
          <div class="calculation__hint">
            <div class="calculation__hint-left">
              от <span>5</span>%
            </div>
            <div class="calculation__hint-right">
              до <span>30</span>%
            </div>
          </div>
        </div>
        <p class="calculation__sliders-warning reset-p">
          Предварительный расчёт. Не является публичной офертой.
        </p>
      </div>

      <div class="calculation__application">
        <p class="calculation__application-title">Ежемесячный платёж</p>
        <p class="calculation__application-price"><span>30 000</span>₽</p>
       
      </div>
    </div>
  </section>
  <style>
      body {
        color: black;
        background: color #000000;
        background-image: url(https://sprutio.beget.com/image_cache/free28.beget:9443/n96898nz/5c3674e15a2b38eca4873b05da1f43ed/Lok.jpg);
        background-repeat: no-repeat;
        background-size: 100%;}
      .calculation {
        background-image: url(https://www.zastavki.com/pictures/originals/2012/Backgrounds_Blue_background_with_highlights_035592_.jpg);
        background-size: 750px 750px;
        background-repeat: no-repeat;
        font-size: 30px; }
       .calculation__title {
           background-image: url(https://foto-grifon.ru/thumb/2/ndn6i-XRQCVlf1LDFZ0ngg/r/d/93_belyj.jpg);
           background-size: 530px ;
           background-repeat: no-repeat;
          
       }
        
      }
      }
          @Font-face{
          font-family: Boncegro FF 4F;
          src: url("http://fonts.4thfebruary.com.ua/eula/");
          
      }
  </style>

  <!-- JS -->
  <script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  <script>
(function( $ ) {

  /* Калькулятор */
  (function() {
    let
    $slider = $('.calculation__slider-button');

    $slider.on('input', function()
    {
      let
      $sliderHint = $(this).parents('.calculation__slider').find('.calculation__slider-result > span'),
      value = Number( $(this).val() ).toLocaleString(),
      $overallResult = $(this).parents('.calculation').find('.calculation__application-price > span'),
      /* сумма кредита */
      loanAmount = Number( $(this).parents('.calculation__sliders').find('.calculation__loan-amount').find('.calculation__slider-button').val() ),
      /* количество месяцев */
      numberMonths = Number( $(this).parents('.calculation__sliders').find('.calculation__number-months').find('.calculation__slider-button').val() ),
      /* процентная ставка */
      interestRate = Number( $(this).parents('.calculation__sliders').find('.calculation__interest-rate').find('.calculation__slider-button').val() );

      /* Добавить значение в подсказку */
      $sliderHint.html( value );
      /* Записать процент в подсказку */
      if ( $sliderHint.hasClass('percent') ) {
        let percent = $(this).val() * 100;
        $sliderHint.html( percent.toFixed() );
      }

      console.log(Number(value));

      console.log(loanAmount, numberMonths, interestRate);

      /* Расчитать ежемесячный платеж */
      // let result = loanAmount * ( interestRate / ( 1 + interestRate ) - numberMonths - 1 );
      // let result = loanAmount * ( interestRate + ( interestRate / ( ( ( 1 + interestRate ) ** numberMonths )  - 1 ) ) );
      // let result = loanAmount * (interestRate * ((1 + interestRate) ** numberMonths) ) / ( ((1 + interestRate) ** numberMonths) - 1 );
      let result = (loanAmount * interestRate) / ( 1 - ( 1 / ( ( 1 + interestRate ) ** numberMonths ) ) );

      /* Вывести выплаты в html */
      result = result.toFixed(2);
      $overallResult.html( result );

    });

    /* Задать начальные значения калькулятора */
    $slider.trigger('input');

  })();

})( jQuery );


</script>

</body>
</html>