<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Новый сайт успешно создан и готов к работе</title>
  <!-- b0a8e2d8ccb04b24683d347076e80d29e451a385:d3aa2e6571e673001cb012eda23bd97d02234f0b -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.10/lodash.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans&amp;subset=cyrillic,latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption&amp;subset=cyrillic,latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css"
        integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css"
        integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
  <style>


    #ru, #en {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      font-family: 'PT Sans', Arial, sans-serif;
      font-size: 16px;
      height: 100%;
      min-height: 768px;
      margin: 0;
    }

    html {
      height: 100%;
    }

    .top, .bottom, hr {
      flex-shrink: 0;
    }

    hr {
      height: 2px;
      border: 0;
      box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);
      margin: 0;
    }

    a {
      color: #2fa3e7;
      text-decoration: none
    }

    a:focus, a:hover {
      color: #157ab5;
      text-decoration: none
    }

    body {
      font-family: 'PT Sans', Arial, sans-serif;
      font-size: 16px;
      height: 100%;
      margin: 0;
    }

    .b-alert {
        font-family: 'PT Sans', Arial, sans-serif;
        position: relative;
        padding: 20px 20px 20px 65px;
        min-height: 60px;
        box-sizing: border-box;
        border: 1px solid #000;
        border-radius: 0;
        background-color: #fff;
        background-repeat: no-repeat;
        color: #000;
        text-align: left;
        font-size: 16px;
        line-height: 20px;
        -webkit-box-shadow: 0 2px 4px rgba(146,149,163,.5);
        box-shadow: 0 2px 4px rgba(146,149,163,.5)
    }

    .b-alert:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/alert.svg)
    }

    .b-alert:before {
        content: "";
        display: block;
        position: absolute;
        top: 19px;
        left: 0;
        width: 45px;
        height: 20px;
        border-radius: 0 4px 4px 0;
        background-repeat: no-repeat;
        background-position: center right 4px
    }

    .b-alert.b-alert--info {
        border-color: #2fa3e7
    }

    .b-alert.b-alert--info:before {
        background-color: #2fa3e7
    }

    .b-alert.b-alert--warning {
        border-color: #fba700
    }

    .b-alert.b-alert--warning:before {
        background-color: #fba700
    }

    .b-alert.b-alert--danger {
        border-color: #bd2327
    }

    .b-alert.b-alert--danger:before {
        background-color: #bd2327
    }

    .b-alert.b-alert--success {
        border-color: #6ec331
    }

    .b-alert.b-alert--success:before {
        background-color: #6ec331
    }

    .b-alert.b-alert--icon-alarm:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/alarm.svg)
    }

    .b-alert.b-alert--icon-backup:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/backup.svg)
    }

    .b-alert.b-alert--icon-card:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/card.svg)
    }

    .b-alert.b-alert--icon-check:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/check.svg)
    }

    .b-alert.b-alert--icon-database:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/database.svg)
    }

    .b-alert.b-alert--icon-delete:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/delete.svg)
    }

    .b-alert.b-alert--icon-domain:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/domain.svg)
    }

    .b-alert.b-alert--icon-info:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/info.svg)
    }

    .b-alert.b-alert--icon-locked:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/locked.svg)
    }

    .b-alert.b-alert--icon-mail:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/mail.svg)
    }

    .b-alert.b-alert--icon-phone:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/phone.svg)
    }

    .b-alert.b-alert--icon-php:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/php.svg)
    }

    .b-alert.b-alert--icon-redis:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/redis.svg)
    }

    .b-alert.b-alert--icon-setup:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/setup.svg)
    }

    .b-alert.b-alert--icon-support:before {
        background-image: url(https://cp.beget.com/img/icons/new_alert/support.svg)
    }

    h1, h2 {
      font-family: 'PT Sans Caption', Arial, sans-serif;
      font-weight: normal;
      margin: 0;
    }

    h1 {
      font-size: 21px;
      line-height: 30px;
    }

    h2 {
      font-size: 18px;
    }

    @media screen and (min-width: 801px) {

      body {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-height: 768px;
      }

      .top {
        background-color: #f7f9fa;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
      }

      .bottom {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
      }

      header, footer, .hint {
        width: 690px;
        margin: 0 auto;
      }

      .hint {
        padding-top: 30px;
      }

      header {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
      }

      main {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 740px;
        margin: 0 auto;
      }

      footer {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        width: 690px;
      }

      .logo img {
        max-width: 100%;
        max-height: 75px;
        position: relative;
        top: 15px;
      }

      nav {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding-right: 10px;
      }

      nav a {
        padding: 0 15px
      }

      .octo {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
      }

      .octo img {
        height: 230px;
        max-height: 230px;
      }

      .icon img {
        height: 75px;
      }

      .footer-col {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        padding: 15px 0;
      }

      .footer-col > * {
        padding: 2px;
      }

      .bottom-mobile {
        display: none;
      }
    }

    @media screen and (max-width: 800px) {

      .top {
        margin: 0 auto;
        background-color: #f7f9fa;
      }

      .bottom {
        margin: 0 auto;
        width: 95%;
      }

      header, footer, main {
        width: 95%;
      }

      header, footer, main, .hint {
        margin: 0 auto;
      }

      .hint {
        padding-top: 30px;
        margin-bottom: 30px;
      }

      .logo {
        display: block;
        width: 60%;
        margin: 0 auto;
      }

      .logo img {
        width: 100%;
      }

      .icon img {
        display: none;
      }

      .octo {
        width: 60%;
        margin: 0 auto;
      }

      .octo img {
        width: 100%;
      }

      header nav {
        display: none;
      }

      .bottom {
        display: none;
      }

      .bottom-mobile footer {
        display: table;
        width: 95%;
        margin-bottom: 35px;
      }

      .bottom-mobile footer span {
        text-align: right;
        display: table-cell;
      }

      .bottom-mobile footer txt {
        display: table-cell;
      }

      .bottom-mobile footer h2 {
        margin-top: 20px;
        margin-bottom: 5px;
      }

      .bottom-mobile footer p {
        display: table-row;
        width: 100%;
        line-height: 25px;
      }
    }

    .instruction-row, li {
      margin-bottom: .5rem;
    }

    .fa-li {
      color: #84c738;
    }

    .fa-ul {
      margin-left: 1.3em;
    }

    span.key {
      background-color: white;
      padding: 5px;
      border-radius: 5px;
      box-shadow: 0 0 4px 0 rgba(86, 94, 113, 0.2);
    }

    .gallery {
      padding-top: 20px;
      display: none;
    }

    .gallery a {
      display: block;
      margin-bottom: 30px;
      margin-top: 15px;
    }
  </style>
</head>
<body>
<div id="ru">
  <div class="top">
    <header>
      <noindex>
        <a href="http://beget.com" target="_blank" title="Перейти на сайт хостинг-провайдера" class="logo" rel="nofollow">
          <img src="https://cp.beget.com/i/logo.png">
        </a>
      </noindex>
      <nav>
        <noindex><a href="https://cp.beget.com" target="_blank" rel="nofollow">Панель управления</a></noindex>
        <noindex><a href="https://beget.com/ru/domain-register" target="_blank" rel="nofollow">Регистрация доменов</a></noindex>
        <noindex><a href="https://beget.com/ru/virtual-hosting" target="_blank" rel="nofollow">Тарифы</a></noindex>
      </nav>
    </header>
    <main>
      <div class="octo">
        <img src="https://cp.beget.com/img/octo/octo_coffee.png">
      </div>
      <div class="b-alert b-alert--success b-alert--icon-check">
          Новый сайт успешно создан и готов к работе. Если у Вас возникли вопросы, мы с удовольствием ответим на них.
      </div>
      <div class="hint" id="cache-hint"></div>
    </main>
  </div>
  <hr>
  <div class="bottom-mobile">
    <footer>
      <h2>Тех. поддержка</h2>
      <p>
        <txt>Почта:</txt>
        <span><noindex><a href="mailto:support@beget.com" rel="nofollow">support@beget.com</a></noindex></span></p>
      <p>
        <txt>Россия:</txt>
        <span>+7 (800) 700-06-08</span></p>
      <p>
        <txt>Украина:</txt>
        <span>+380 (800) 802-192</span></p>
    </footer>
  </div>
  <div class="bottom">
    <footer>
      <div class="footer-col">
        <div>Тех. поддержка:</div>
        <div>Бухгалтерия:</div>
        <div>Руководство:</div>
        <div>Telegram:</div>
        <div>Skype:</div>
      </div>
      <div class="footer-col" style="padding-right: 100px;">
        <noindex><a href="mailto:support@beget.com" rel="nofollow">support@beget.com</a></noindex>
        <noindex><a href="mailto:bills@beget.com" rel="nofollow">bills@beget.com</a></noindex>
        <noindex><a href="mailto:manager@beget.com" rel="nofollow">manager@beget.com</a></noindex>
        <noindex><a href="tg://resolve?domain=begetbot" rel="nofollow">@begetbot</a></noindex>
        <noindex><a href="https://join.skype.com/bot/ceda3526-d09b-4157-b6f0-91a646073c7e?add" target="_blank" rel="nofollow">Добавить в контакты</a></noindex>
      </div>
      <div class="footer-col">
        <div>Россия:</div>
        <div>СПб:</div>
        <div>Москва:</div>
        <div>Украина:</div>
        <div>Киев:</div>
      </div>
      <div class="footer-col">
        <b>+7 (800) 700-06-08</b>
        <b>+7 (812) 3854136</b>
        <b>+7 (495) 721-80-88</b>
        <b>+380 (800) 802-192</b>
        <b>+380 (44) 300-02-18</b>
      </div>
    </footer>
  </div>
</div>

<div id="en" style="display: none">
  <div class="top">
    <header>
      <noindex>
        <a href="http://beget.com" target="_blank" title="Web hosting home page" class="logo" rel="nofollow">
          <img src="https://cp.beget.com/i/logo.png">
        </a>
      </noindex>
      <nav>
        <noindex><a href="https://cp.beget.com" target="_blank" rel="nofollow">Control Panel</a></noindex>
        <noindex><a href="https://beget.com/en/domain-register" target="_blank" rel="nofollow">Domain registration</a></noindex>
        <noindex><a href="https://beget.com/en/virtual-hosting" target="_blank" rel="nofollow">Plans</a></noindex>
      </nav>
    </header>
    <main>
      <div class="octo">
        <img src="https://cp.beget.com/img/octo/octo_coffee.png">
      </div>
      <div class="b-alert b-alert--success b-alert--icon-check">
          The new site has been successfully created and is ready to work. If you have any questions we will be happy to answer them.
      </div>
      <div class="hint" id="cache-hint"></div>
    </main>
  </div>
  <hr>
  <div class="bottom-mobile">
  </div>
  <div class="bottom">
  </div>
</div>
<script type="text/template" id="hotkeyTemplate">
  <% if ((browser.isOpera || browser.isFirefox || browser.isChrome) && browser.isMac) { %>
  <span class="key">⌘</span> + <span class="key">R</span>
  <% } %>
  <% if ((browser.isOpera || browser.isFirefox || browser.isChrome) && !browser.isMac) { %>
  <span class="key">Ctrl</span> + <span class="key">R</span>
  <% } %>
  <% if (browser.isIE || browser.isEdge) { %>
  <span class="key">Ctrl</span> + <span class="key">F5</span>
  <% } %>
  <% if (browser.isSafari) { %>
  <span class="key">⌥</span> + <span class="key">⌘</span> + <span class="key">E</span>
  <% } %>
</script>
<script type="text/template" id="instructionTemplateRu">
  <div>
    <% _.forEach(data, function(item, index) { %>
    <div class="instruction-row">
      <div><%- index + 1 %>. <%- item.text %></div>
      <% if (item.image) { %>
        <noindex>
          <a href="<%- item.image.normal %>" data-srcset="<%- item.image.normal %> 1x, <%- item.image.retina %> 2x"
             data-fancybox="instruction" data-caption="<%- item.text %>" rel="nofollow">
            <img src="<%- item.image.normal %>" srcset="<%- item.image.normal %> 1x, <%- item.image.retina %> 2x" width="99"
                 alt="<%- item.text %>">
          </a>
        </noindex>
      <% } %>
    </div>

    <% }) %>
  </div>
</script>
<script type="text/template" id="instructionTemplateEn">
  <% if (browser.isFirefox) { %>
  <div>
    <div class="instruction-row">1. Open the browser menu (three horizontal bars in the upper right corner of the window)</div>
    <div class="instruction-row">2. Select "Preferences"</div>
    <div class="instruction-row">3. Go to the "Privacy & Security" section.</div>
    <div class="instruction-row">4. Click "Clear history..."</div>
    <div class="instruction-row">5. In the window that appears, click "Clear Now”</div>
  </div>
  <% } %>
  <% if (browser.isChrome && !browser.isYandex) { %>
  <div>
    <div class="instruction-row">1. Open the browser menu (three horizontal bars in the upper right corner of the window)</div>
    <div class="instruction-row">2. Select "More tools" > "Clear browsing data..."</div>
    <div class="instruction-row">3. Click "Clear data"</div>
  </div>
  <% } %>
  <% if (browser.isSafari) { %>
  <div>
    <div class="instruction-row">1. In the menu bar select “Safari” > “Preferences”</div>
    <div class="instruction-row">2. Enable “Show Develop menu in menu bar” in Advanced section and close the window</div>
    <div class="instruction-row">3. In the menu bar select “Develop” > “Empty caches”</div>
  </div>
  <% } %>
  <% if (browser.isYandex) { %>
  <div>
    <div class="instruction-row">1. Open the browser menu (three horizontal bars in the upper right corner of the window)</div>
    <div class="instruction-row">2. Go to the "History" > "Settings - Clear browsing data"</div>
    <div class="instruction-row">3. Select "Cookies and other site data" and "Cached files", click "Clear browsing data"</div>
  </div>
  <% } %>
  <% if (browser.isOpera) { %>
  <div>
    <div class="instruction-row">1. Type ”opera://settings/clearBrowserData" in the address bar, press Enter</div>
    <div class="instruction-row">2. Select "Cookies and other site data" and "Cached images and files", click "Clear browsing data"</div>
  </div>
  <% } %>
  <% if (browser.isIE) { %>
  <div>
    <div class="instruction-row">1. Select “Tools” > “Delete browsing history"</div>
    <div class="instruction-row">2. Select “Temporary Internet files and website files” and press “Delete”</div>
  </div>
  <% } %>
</script>
<script type="text/template" id="cacheTemplateRu">
  <div class="hint">
    <h2>Проблема уже решена? Попробуйте сбросить кэш</h2>
    <ul class="fa-ul">
      <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a class="clear-cache"
                                                                          onclick="clearCache(event)" href="#">Очистите
        кэш автоматически</a></li>
      <% if (browser.isSafari) { %>
      <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Нажмите <b id="hotkey"></b>, затем перезагрузите
        страницу.
      </li>
      <% } else { %>
      <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Перезагрузите страницу, нажав <b id="hotkey"></b>
      </li>
      <% } %>
      <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a onclick="toggleInstruction(event)" href="#">Очистите кэш из настроек браузера <i class="fas fa-angle-down instruction-collapse-angle"></i></a>
        <div class="gallery">
          <div id="instruction"></div>
          Если не помогло - вы можете связаться с нашей службой технической поддержки с помощью раздела «Обратная связь»
          в панели управления хостингом или любым удобным для вас способом.
        </div>
      </li>

    </ul>
  </div>
</script>
<script type="text/template" id="cacheTemplateEn">
  <div class="hint">
    <h2>Is the problem solved? Try to reset the cache</h2>
    <ul class="fa-ul">
      <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a class="clear-cache"
                                                                          onclick="clearCache(event)" href="#">Clear the
        cache automatically</a></li>
      <% if (browser.isSafari) { %>
      <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Press <b id="hotkey"></b> and reload the page
      </li>
      <% } else { %>
      <li><span class="fa-li"><i class="fas fa-angle-right"></i></span>Reload the page by pressing <b id="hotkey"></b>
      </li>
      <% } %>
      <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a onclick="toggleInstruction(event)" href="#">Clear the cache from your browser settings <i class="fas fa-angle-down instruction-collapse-angle"></i></a>
        <div class="gallery">
          <div id="instruction"></div>
          If it does not help - you can contact our technical support service using the "Feedback" section in the
          hosting management panel or in any way convenient for you.
        </div>
      </li>
    </ul>
  </div>
</script>
<script type="text/template" id="bottomEn">
  <footer>
    <div class="footer-col">
      <div>Support:</div>
    </div>
    <div class="footer-col" style="padding-right: 100px;">
      <noindex><a href="mailto:support@beget.com" rel="nofollow">support@beget.com</a></noindex>
    </div>
    <div class="footer-col">
      <div>Management:</div>
    </div>
    <div class="footer-col">
      <noindex><a href="mailto:manager@beget.com" rel="nofollow">manager@beget.com</a></noindex>
    </div>
  </footer>
</script>
<script type="text/template" id="bottomRu">
  <footer>
    <div class="footer-col">
      <div>Тех. поддержка:</div>
      <div>Бухгалтерия:</div>
      <div>Руководство:</div>
      <div>Telegram:</div>
      <div>Skype:</div>
    </div>
    <div class="footer-col" style="padding-right: 100px;">
      <noindex><a href="mailto:support@beget.com" rel="nofollow">support@beget.com</a></noindex>
      <noindex><a href="mailto:bills@beget.com" rel="nofollow">bills@beget.com</a></noindex>
      <noindex><a href="mailto:manager@beget.com" rel="nofollow">manager@beget.com</a></noindex>
      <noindex><a href="tg://resolve?domain=begetbot" rel="nofollow">@begetbot</a></noindex>
      <noindex><a href="https://join.skype.com/bot/ceda3526-d09b-4157-b6f0-91a646073c7e?add" target="_blank" rel="nofollow">Добавить в контакты</a></noindex>
    </div>
    <div class="footer-col">
      <div>Россия:</div>
      <div>СПб:</div>
      <div>Москва:</div>
      <div>Украина:</div>
      <div>Киев:</div>
    </div>
    <div class="footer-col">
      <b>+7 (800) 700-06-08</b>
      <b>+7 (812) 3854136</b>
      <b>+7 (495) 721-80-88</b>
      <b>+380 (800) 802-192</b>
      <b>+380 (44) 300-02-18</b>
    </div>
  </footer>
</script>
<script type="text/template" id="bottomMobileEn">
  <footer>
    <h2>Support</h2>
      <p><txt>Mail: </txt><span><noindex><a href="mailto:support@beget.com" rel="nofollow">support@beget.com</a></noindex></span></p>
  </footer>
</script>
<script type="text/template" id="bottomMobileRu">
  <footer>
    <h2>Тех. поддержка</h2>
    <p><txt>Почта: </txt><span><noindex><a href="mailto:support@beget.com" rel="nofollow">support@beget.com</a></noindex></span></p>
    <p><txt>Россия:</txt> <span>+7 (800) 700-06-08</span></p>
    <p><txt>Украина:</txt> <span>+380 (800) 802-192</span></p>
  </footer>
</script>

<script>
    var browser = {
        // Opera 8.0+
        isOpera: (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0,
        // Firefox 1.0+
        isFirefox: typeof InstallTrigger !== 'undefined',
        // Safari 3.0+ "[object HTMLElementConstructor]"
        isSafari: /constructor/i.test(window.HTMLElement) || (function (p) {
            return p.toString() === "[object SafariRemoteNotification]";
        })(!window['safari'] || (typeof safari !== 'undefined' && safari.pushNotification)),
        // Internet Explorer 6-11
        isIE: /*@cc_on!@*/false || !!document.documentMode,
        // Edge 20+
        isEdge: !(/*@cc_on!@*/false || !!document.documentMode) && !!window.StyleMedia,
        // Chrome 1+
        isChrome: !!window.chrome && !!window.chrome.webstore,
        isYandex: !!window.yandex,
        isMac: window.navigator.platform.toUpperCase().indexOf('MAC') >= 0
    };

    var instructions = {
        firefox: [
            {
                "text": "Откройте меню браузера (три горизонтальные полоски в правом верхнем углу окна)"
            },
            {
                "text": 'Выберите "Настройки"',
                "image": {
                    normal: "https://cp.beget.com/shared/9fc46578a3f3beebbc6e3058537a3fcf/firefox2.png",
                    "retina": "https://cp.beget.com/shared/5fc2dd546f53e0902e15a3a70e4fe653/firefox22x.png"
                }
            },
            {
                "text": 'Перейдите в раздел “Приватность и защита”',
                "image": {
                    normal: "https://cp.beget.com/shared/6b5c3dfee3602b060a644965f11eabed/firefox3.png",
                    "retina": "https://cp.beget.com/shared/1f93b61fdeeed1161d5ff5aa36e76dc4/firefox32x.png"
                }
            },
            {
                "text": 'Нажмите кнопку "Удалить историю"',
                "image": {
                    normal: "https://cp.beget.com/shared/a41c785d3b44adcba2e1b90db2b77a37/firefox4.png",
                    "retina": "https://cp.beget.com/shared/1a512f91bcc8975205f979acf71d7d29/firefox42x.png"
                }
            },
            {
                "text": 'В появившемся окне нажмите “Удалить сейчас”',
                "image": {
                    "normal": "https://cp.beget.com/shared/a4f7c26338626b94ead39246a91aa4b3/firefox5.png",
                    "retina": "https://cp.beget.com/shared/745b3450fc1f4471ff21f6d64fc737b1/firefox52x.png"
                }
            }

        ],
        chrome: [
            {
                "text": "Откройте меню браузера (три горизонтальные полоски в правом верхнем углу окна)"
            },
            {
                "text": 'Выберите "Дополнительные инструменты" > "Очистить данные просмотров"',
                "image": {
                    "normal": "https://cp.beget.com/shared/f38d02735868ba6f0f0f6d0056fcb600/chrome2.png",
                    "retina": "https://cp.beget.com/shared/3c7ced0b4d09861e1884f5661f239fc0/chrome22x.png"
                }
            },
            {
                "text": 'В окне "Очистить историю" выберите "Изображения и другие файлы, сохранённые в кэше" и нажмите кнопку "Удалить данные"',
                "image": {
                    "normal": "https://cp.beget.com/shared/82ed82f2d8ca8099998398f34f6aa01a/chrome3.png",
                    "retina": "https://cp.beget.com/shared/5433ccd2ab6359de9db5b621c3a0b633/chrome32x.png"
                }
            }

        ],
        safari: [
            {
                "text": 'В меню браузера выберите пункт “Safari” > “Настройки”',
                "image": {
                    "normal": "https://cp.beget.com/shared/80113015aafa3f261ff2fe54ebd6508d/safari1.png",
                    "retina": "https://cp.beget.com/shared/f8f7096f67c0e3d82446d0ce6217b27d/safari12x.png"
                }
            },
            {
                "text": 'В  дополнениях включите опцию “Показывать меню «Разработка» в строке меню” и закройте окно',
                "image": {
                    "normal": "https://cp.beget.com/shared/1193ae0503f94daafb5dd14c87a1ddde/safari2.png",
                    "retina": "https://cp.beget.com/shared/138c05f2803ea0b167a7f975265ce43b/safari22x.png"
                }
            },
            {
                "text": 'В меню браузера выберите пункт “Разработка” > “Очистить кэши”',
                "image": {
                    "normal": "https://cp.beget.com/shared/87421068ec6d6013cade7cc6a37e9566/safari3.png",
                    "retina": "https://cp.beget.com/shared/13520f6e24d62a88aa7c54519eb1a647/safari32x.png"
                }
            }

        ],
        yandex: [
            {
                "text": 'Откройте меню браузера (три горизонтальные полоски в правом верхнем углу окна)'
            },
            {
                "text": 'Перейдите во вкладку "История"',
                "image": {
                    "normal": "https://cp.beget.com/shared/80ce1ee88a6a1cec9f2c7620f08a58c2/yandex2.png",
                    "retina": "https://cp.beget.com/shared/0693faca5588f69ca7da9fe4212cdc97/yandex22x.png"
                }
            },
            {
                "text": 'Нажмите "Очистить историю" (справа)',
                "image": {
                    "normal": "https://cp.beget.com/shared/ff268c78b70d486538ecede196a9c1f2/yandex3.png",
                    "retina": "https://cp.beget.com/shared/12096cc377f80dda5798cfe745bb66ec/yandex32x.png"
                }
            },
            {
                "text": 'Отметьте пункты "Файлы cookie и другие данные сайтов и модулей" и "файлы, сохраненные в кэше",  нажмите кнопку "Очистить историю"',
                "image": {
                    "normal": "https://cp.beget.com/shared/80e7ada09ac4b7da555a5119237ff108/yandex4.png",
                    "retina": "https://cp.beget.com/shared/daa75ad57baee73ff347e589e11fc90f/yandex42x.png"
                }
            }

        ],
        opera: [
            {
                "text": 'Введите в адресной строке “opera://settings/clearBrowserData”, нажмите клавишу Enter',
                "image": {
                    "normal": "https://cp.beget.com/shared/cfb3606fa62fb6a2f951d3e7cd24a8d9/opera1.png",
                    "retina": "https://cp.beget.com/shared/f72a61de7929ef3236d54a7eda5f27e2/opera12x.png"
                }
            },
            {
                "text": 'Поставьте галочки у пунктов "Файлы cookie и прочие данные сайтов" и "Кэшированные изображения и файлы", нажмите кнопку "Очистить историю посещений"',
                "image": {
                    "normal": "https://cp.beget.com/shared/d336439cc49a04a1885186dc1930c02c/opera2.png",
                    "retina": "https://cp.beget.com/shared/6d6888aac8d3896da5cd201e8d31670b/opera22x.png"
                }
            }
        ],
        ie: [
            {
                "text": 'Выберите “Сервис” > “Удаление журнала обозревателя…”',
                "image": {
                    "normal": "https://cp.beget.com/shared/3585ac62cef9f65d999df211007ce578/explorer.png",
                    "retina": "https://cp.beget.com/shared/33ae907b8ce690fe724d9616cb809d35/explorer2x.png"
                }
            }
        ],
    };

    function clearCache(event) {
        event.preventDefault();
        window.location.reload(true);
    }

    function toggleInstruction(e) {
        e.preventDefault();
        $(".gallery").slideToggle();
    };

    var language = window.navigator.language || navigator.userLanguage,
        ru = document.getElementById("ru"),
        en = document.getElementById("en");

    language = language.substr(0, 2).toLowerCase();

    var mainDiv = ru;

    if (language !== "ru") {
        document.title = "The new site has been successfully created and is ready to work"
        ru.style.display = "none"
        en.style.display = "flex"
        mainDiv = en;
    }
    var data = instructions.chrome;

    if (browser.isFirefox) {
        data = instructions.firefox;
    }
    if (browser.isChrome && !browser.isYandex) {
        data = instructions.chrome;
    }
    if (browser.isYandex) {
        data = instructions.yandex;
    }
    if (browser.isSafari) {
        data = instructions.safari;
    }
    if (browser.isOpera) {
        data = instructions.opera;
    }
    if (browser.isIE) {
        data = instructions.ie;
    }

    window.onload = function () {
        if (language === "ru") {
            mainDiv.querySelector("#cache-hint").innerHTML = _.template(document.getElementById("cacheTemplateRu").innerHTML)({browser: browser});
            mainDiv.querySelector("#hotkey").innerHTML = _.template(document.getElementById("hotkeyTemplate").innerHTML)({browser: browser});
            mainDiv.querySelector("#instruction").innerHTML = _.template(document.getElementById("instructionTemplateRu").innerHTML)({data: data});
            mainDiv.querySelector(".bottom").innerHTML = document.getElementById("bottomRu").innerHTML;
            mainDiv.querySelector(".bottom-mobile").innerHTML = document.getElementById("bottomMobileRu").innerHTML;
        } else {
            mainDiv.querySelector("#cache-hint").innerHTML = _.template(document.getElementById("cacheTemplateEn").innerHTML)({browser: browser});
            mainDiv.querySelector("#hotkey").innerHTML = _.template(document.getElementById("hotkeyTemplate").innerHTML)({browser: browser});
            mainDiv.querySelector("#instruction").innerHTML = _.template(document.getElementById("instructionTemplateEn").innerHTML)({data: data});
            mainDiv.querySelector(".bottom").innerHTML = document.getElementById("bottomEn").innerHTML;
            mainDiv.querySelector(".bottom-mobile").innerHTML = document.getElementById("bottomMobileEn").innerHTML;
        }
        $('[data-fancybox="instruction"]').fancybox({
            afterLoad: function (instance, current) {
                var pixelRatio = window.devicePixelRatio || 1;

                if (pixelRatio > 1.5) {
                    current.width = current.width / pixelRatio;
                    current.height = current.height / pixelRatio;
                }
            }
        });
    };

</script>
</body>
</html>
