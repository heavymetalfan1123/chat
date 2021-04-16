<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <!-- Эти файл стилей необходим для работы шаблона, не удаляем его -->
    <link rel="stylesheet" href="css/uikit.min.css">
</head>
<body class="uk-background-muted uk-padding">
    <div class="uk-container uk-card uk-card-body uk-padding uk-container-small uk-background-default uk-margin-bottom">
        <h1>Регистрация на сайте </h1>
        <p>
            Мы рады, что Вы решили зарегистрироваться на нашем сайте. Пожалуйста, заполните анкету.
        </p>

        <!-- Здесь нужно выводить сообщения об ошибке -->
        

        <!-- Линия - разделитель -->
        <hr class="uk-divider-small">
        
        <!-- Форма для регистрации -->
        <form>
            <label> имя<strong class="uk-text-danger">(обязательно)</strong></label>
            <input type="text" name='email' class="uk-input"  >
            <label>тексттттт <strong class="uk-text-danger">(обязательно)</strong></label>
            <input type="text"  name='pass' class="uk-input" >
            
            <input type="submit" class="uk-input">
        </form>
        
    </div>
    
    
    <!-- Здесь выводим результат регистрации -->
    <div class="uk-alert-primary" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p><?php 

    $pass=$_GET['pass'];

    $email = $_GET['email'];

    $fail = fopen("text.txt",'a+');
    $t = date("d.m.y.h.m");
    if (isset($fail)){

        fwrite($fail,"$pass :$t  $email".PHP_EOL);


    }
    else {
        echo " ты чего не ввел все";
    }
    
    
    fclose($fail);

    $TEXT = file_get_contents("text.txt");
    $TEXT=str_replace(PHP_EOL,"<br>",$TEXT);

    echo "$TEXT<br>";

    
     
    ?>
    </div>

    <!-- Эти скрипты необходимы для работы шаблона, не удаляем их -->
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</body>
</html>
