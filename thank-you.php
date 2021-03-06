<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Shop</title>
</head>

<body>



  <div class="wrapper">
    <div class="header__wrapper">
      <div class="container">
        <header class="header">
      
          <a href="./shop.html" class="cart__btn">
            <svg class="header__svg" viewBox="0 0 511 511.99913" xmlns="http://www.w3.org/2000/svg"><path d="m512.496094 172v80c0 11.046875-8.953125 20-20 20h-13.152344l-8.425781 74.988281c-1.148438 10.21875-9.804688 17.765625-19.851563 17.769531-.746094 0-1.496094-.042968-2.257812-.128906-10.976563-1.230468-18.875-11.132812-17.640625-22.105468l10.421875-92.753907c1.136718-10.117187 9.691406-17.769531 19.875-17.769531h11.035156v-40h-432v40h341c11.046875 0 20 8.957031 20 20 0 11.046875-8.953125 20-20 20h-307.226562l19.75 164.761719c2.40625 20.089843 19.480468 35.238281 39.714843 35.238281h247.125c20.382813 0 37.472657-15.277344 39.75-35.535156 1.230469-10.976563 11.128907-18.871094 22.105469-17.640625 10.976562 1.234375 18.875 11.132812 17.644531 22.109375-4.554687 40.511718-38.730469 71.066406-79.5 71.066406h-247.125c-40.46875 0-74.617187-30.300781-79.433593-70.480469l-20.316407-169.519531h-13.488281c-11.046875 0-20-8.953125-20-20v-80c0-11.046875 8.953125-20 20-20h70.9375l105.683594-143.839844c6.539062-8.898437 19.054687-10.816406 27.957031-4.273437 8.902344 6.539062 10.816406 19.054687 4.277344 27.957031l-88.28125 120.15625h231.589843l-88.285156-120.15625c-6.539062-8.902344-4.625-21.417969 4.277344-27.957031 8.902344-6.542969 21.417969-4.628907 27.960938 4.273437l105.679687 143.839844h70.199219c11.046875 0 20 8.957031 20 20zm-275.996094 160v80c0 11.046875 8.953125 20 20 20 11.042969 0 20-8.953125 20-20v-80c0-11.046875-8.957031-20-20-20-11.046875 0-20 8.953125-20 20zm80 0v80c0 11.046875 8.953125 20 20 20 11.042969 0 20-8.953125 20-20v-80c0-11.046875-8.957031-20-20-20-11.046875 0-20 8.953125-20 20zm-160 0v80c0 11.046875 8.953125 20 20 20 11.042969 0 20-8.953125 20-20v-80c0-11.046875-8.957031-20-20-20-11.046875 0-20 8.953125-20 20zm0 0"/></svg>
            <span class="cart__span js_cart__span">0</span>
           </a> 
           <div class="logo__box">
            <a href="./index.html" class="header__logo logo js_website-name"></a>
          </div>
        </header>
      </div>
    </div>

    <main class="main">
        <div class="thank-you__wrapper" >
          <section class="thank-you">
            <div class="container">
                <div class="block">
                  <h1 class="title">Thank you</h1>
                  <p class="text">Your order was completed successfully!</p>
                  <?php if($_GET["order_id"]){ ?> 
      <p class="text" style="font-size: 3rem">Your Order ID is: <?php echo htmlspecialchars($_GET["order_id"]); ?></p>
    <?php } ?>
                </div>
            </div>
          </section>
      </div>
      </main>

    <div class="footer__wrapper">
      <footer class="footer">
        <div class="footer__top">
          <div class="container">
            <div class="footer__policies">
            <div class="footer__block">
              <p class="footer__subtitle">Policies</p>
              <ul class="list list-col">
                <li class="item">
                  <a href="./contacts.html" class="footer__link">Contact Us</a>
                </li>
                <li class="item">
                  <a href="./return.html" class="footer__link">Return Policy</a>
                </li>
                <li class="item">
                  <a href="./purchase.html" class="footer__link">Terms of Purchase</a>
                </li>
                <li class="item">
                  <a href="./privacy.html" class="footer__link">Privacy Notice</a>
                </li>
                <li class="item">
                  <a href="./shipping.html" class="footer__link">Shipping Policy</a>
                </li>
                <li class="item">
                  <a href="./use.html" class="footer__link">Terms of Use</a>
                </li>
                <li class="item">
    <a href="./cancellation.html" class="footer__link">Cancellation</a>
  </li>
              </ul>
            </div>
            <div class="footer__block footer__block--jus">
              <p class="footer__subtitle">Contact us</p>
              <ul class="list">
                <li class="item item--df">
               
                  <a href="" class="footer__link js_website-email"></a>
                </li>
                <li class="item item--df">
                 
                  <a href="" class="footer__link js_website-phone"></a>
                </li>
                <li class="item item--df">
                  
                  <p class="text js_website-address"></p>
                </li>
              </ul>
       
            </div>
        
          </div>
          <div class="footer__block footer__block--df">
            <a href="./index.html" class="footer__logo logo js_website-name"></a>
            <p class="text text--mb js_website-corp"></p>
            <span class="footer__span">?? All rights reserved</span>
          </div>
          </div>
        </div>
      

       
  
      </footer>
  
  </div>
  </div>

 
  <script type="module" src="./js/on-load.js"></script>
  <script type="module" src="./js/website-data.js"></script> 
</body>

</html>