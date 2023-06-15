<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>СРИАД - система регистрации и анализа движений</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <div class="container">
        <div class="head">
            <div class="image-flex">
                <img src="Group 9.svg"/>
            </div>
                <p class="def">Система регистрации и анализа движений</p>
        </div>
        <div class="add-button"> 
            <h2>Новый пользователь</h2>
            <a href="index.php" class="add">все пациенты</a>
        </div>
        <div class="form">
            <form method="post" action="index.php">
                <div class="first">
                    <p>Полное имя</p>
                    <p>Дата рождения</p>
                    <p>Укажите пол</p>
                </div>
                <div class="first_input">
                    <input name="second_name" type="text" placeholder="Породько">
                    <input name="first_name" type="text" placeholder="Вадим">
                    <input name="middle_name" type="text" placeholder="Евгеньевич">
                    <input name="birthday" type="text" placeholder="2020-12-12" id="dr">
                    <p>
                        <input name="male" type="radio" value="муж">Муж</p>
                    <p>
                        <input name="male" type="radio" value="жен">Жен</p>
                </div>
                <div class="second">
                    <p>Рост, см</p>
                    <p>Вес, кг</p>
                    <p>Диагноз пациента</p>
                </div>
                <div class="parametry">
                    <input name="height" type="text" placeholder="176" id="he">
                    <input name="weight" type="text" placeholder="66" id="we">
                    <input name="diagnosis" type="text" placeholder="Ожирение" id="illness">
                    <input type="submit" name="ok" value="Сохранить"> 
                </div>
        </div>
        <div>
            <img src="Vector.png" class="foot" width="400"/>
        </div>
    </div>
    </body>
</html>