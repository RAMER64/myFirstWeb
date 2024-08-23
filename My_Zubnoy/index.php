<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Servise.css">
    <script src="Scripts/inputBlock.js"></script>
    <title>Мой зубной: Услуги</title>
</head>
<body>
    <div class="mainPage">МОЙ ЗУБНОЙ🦷</div>
    <div class="menu">
        <ul>
            <li><a href="WebSite.html">Главная</a></li>
            <li><a href="Servise.html">Услуги</a></li>
            <li><a href="Contacts.html">Контакты</a></li>
            <li><a href="AboutUs.html">О нас</a></li>
        </ul>
    </div>
    <div class="mainServise">
        <div class="BoxFlex">
            <div class="uslugi">
            </div>
            <form action="mail.php" method="post">
                <h1 style="text-transform: uppercase; color: rgb(255, 255, 255); text-align: center;">Записаться на приём</h1>
                <input name="name" type="text" id="name" placeholder="Имя" required title="Введите имя" minlength="3"  autocomplete="0"><script>document.getElementById('name').onkeydown = function (e) {return !(/^^[ 0-9:-@!-/[-`{-}~]$$/.test(e.key));}</script>
                <input name="phone" id="phone" type="tel" placeholder="Телефон +7" required title="Введите номер телефона"  autocomplete="0"><script>document.getElementById('phone').onkeydown = function (e) {return !(/^^[ А-Яа-яA-Za-z:-@!-/[-`{-}~]$$/.test(e.key));}</script>
                <input name="email" type="email" id="mail" placeholder="E-mail" title="Введите электронную почту" ><script>document.getElementById('mail').onkeydown = function (e) {return !(/^^[ &=+<>,_' -- ]$$/.test(e.key));}</script>
                <select name="time" required>
                    <option value="" disabled selected style="display: none;" required>Выберите время</option>
                    <optgroup label="Выберите время"></optgroup>
                    <option>10:00-12:00</option>
                    <option>12:00-14:00</option>
                    <option>14:00-16:00</option>
                    <option>16:00-18:00</option>
                </select>
                <input type="submit" class="submit" >
            </form>
        </div>
    </div>
    <div class="futerDown">
        <p>ООО "Мой зубной" © 2023 г.</p>
        <script src="Scripts/imask.js"></script>
        <script src="Scripts/Phone.js"></script>
        <a href="confidecional.html" class="political">Политика конфиденциальности</a>
        <a href="pamyatka.html">ПАМЯТКИ ПАЦИЕНТУ</a>
    </div>
</body>
</html>