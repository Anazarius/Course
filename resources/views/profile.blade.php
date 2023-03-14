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
    <div class="tab-content">
        <div id="Profile">
            <h1>Профиль</h1>

            <form action="./index.blade.php" method="post">

                <div class="top-row">
                    <div>
                        <img class="profile_img" src="/images/icons/icon_site.png" alt="Profile image">
                    </div>
                    <div class="field-wrap">
                        <label>
                            Тимофей
                        </label>
                        <input type="text"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Капленков
                        </label>
                        <input type="text"/>
                    </div>
                </div>

                <div class="field-wrap">
                    <label>
                        Anazarius
                    </label>
                    <input type="text"/>
                </div>

                <div class="field-wrap">
                    <label>
                        12345678
                    </label>
                    <input type="password"/>
                </div>

                <div class="field-wrap">
                    <label>
                        anazarius.anz@gmail.com
                    </label>
                    <input type="email"/>
                </div>

                <button type="submit" class="button button-block"/>Сохранить</button>

            </form>

        </div>

        <div id="login">
        </div>

    </div>
</div>
    <script src="/resources/js/reg.js"></script>
<footer>
    <div class="footer">
        <div class="row">
            <ul>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Privacy Policy</a></li>
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

