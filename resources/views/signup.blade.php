<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Регистрация/Авторизация</title>
    <link rel="shortcut icon" href="/images/icons/icon_site.png" type="image/x-icon">
  <link rel="stylesheet" href="/resources/css/reg.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body class="body1">
  <div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">
          <h1>Регистрация</h1>

          <form action="/" method="post">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                  First name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>

            <div class="field-wrap">
              <label>
                Second name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Login<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off"/>
          </div>

          <div class="field-wrap">
              <label>
                  Password<span class="req">*</span>
              </label>
              <input type="password"required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
                Email<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>

          <button type="submit" class="button button-block"/>Зарегистрироваться</button>

          </form>

        </div>

        <div id="login">
          <h1>Войти</h1>

          <form action="/" method="post">

            <div class="field-wrap">
            <label>
              Login<span class="req">*</span>
            </label>
            <input type=""required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>

          <p class="forgot"><a href="#">Forgot Password?</a></p>

          <button class="button button-block"/>Войти</button>

          </form>

        </div>

      </div>

</div>
    <script src="/resources/js/reg.js"></script>
  <footer>
      <div class="footer">
          <div class="row">
              <ul>
                  <li><a href="#">Регистрация/вход</a></li>
                  <li><a href="#">Список услуг</a></li>
                  <li><a href="#">Профиль</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                  <li><a href="#">Career</a></li>
              </ul>
          </div>

          <div class="row">
              DEBUT © 2023 || Designed By: Anazarius
          </div>
      </div>
  </footer>
</body>
</html>
