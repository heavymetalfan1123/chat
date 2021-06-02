<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <!-- Эти файл стилей необходим для работы шаблона, не удаляем его -->
    <link rel="stylesheet" href="uikit.min.css">
</head>
<body class="uk-background-muted uk-padding">
    <div class="uk-container uk-card uk-card-body uk-padding uk-container-small uk-background-default uk-margin-bottom">
        <h1>Регистрация на сайте </h1>
        <p>
            Мы рады, что Вы решили початиться на нашем сайте. Пожалуйста, заполните анкету.
        </p>

        <!-- Здесь нужно выводить сообщения об ошибке -->
        

        <!-- Линия - разделитель -->
        <hr class="uk-divider-small">
        
        <!-- Форма для регистрации -->
        <form>
            <label> текст<strong class="uk-text-danger">(обязательно)</strong></label>
            <input type="text" name='text' class="uk-input"  >
            <label>никнейм <strong class="uk-text-danger">(обязательно)</strong></label>
            <input type="text"  name='name' class="uk-input" >
            
            <input type="submit" class="uk-input">
        </form>
        
    </div>
    
    
    <!-- Здесь выводим результат регистрации -->
    <div class="uk-alert-primary" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p><?php 

    $pass=$_GET['text'];

    $email = $_GET['name'];

    $fail = fopen("text.txt",'a+');
    $t = date("d.m.y.h.m");
    if (isset($fail)){
        if (str_len($pass)>0) && (str_len($email)>0){
            
            fwrite($fail,"$pass :$t  $email".PHP_EOL);
        }


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
