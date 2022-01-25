<?php
include_once('assets/php/db.php');
include_once('assets/php/search.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/null.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Главная</title>
</head>

<body>
    <header>
        <div class="header-link-wrap">
            <div class="link-wrap">
                <a href="" class="link">Контакты</a>
                <div class="active-link-mark"></div>
            </div>
            <div class="link-wrap">
                <a href="" class="link">Проекты</a>
            </div>
        </div>
    </header>
    <div class="tools-and-list">
        <div class="tools">
            <div class="tools-wrap">
                <div class="search-wrap">
                    <div class="search-lable">Поиск:</div>
                    <form action="" onsubmit="return false;">
                        <input class="input-search" name="word" type="text">
                        <button class="search-button">Найти</button>
                    </form>
                </div>
                <div class="group-wrap">
                    <div class="group-lable">Группировка:</div>
                    <select class="input-group">
                        <option>...</option>
                        <?php
                        $sql = mysqli_query($link, 'SELECT * FROM `group_contacts`');
                        while ($result = mysqli_fetch_array($sql)) {
                        ?>
                            <option><?= $result['Name_group_contact']; ?></option>

                        <?php
                        }
                        ?>
                    </select>
                    <button class="group-button">Добавить</button>
                </div>
            </div>
        </div>
        <div class="list">
            <div class="list_wrap">
                <div class="column-name">
                    <div class="name">Id</div>
                    <div class="name">ФИО</div>
                    <div class="name">Номер</div>
                    <div class="name">E-mail</div>
                    <div class="name">Статус</div>
                </div>
                <div class="list-items">
                    <?php
                    $listContacts = mysqli_query($link, 'SELECT * FROM `contacts`');
                    while ($result = mysqli_fetch_array($listContacts)) {
                    ?>
                        <div class="item-wrap">
                            <div class="item-atrs">
                                <div class="item-atr"><?= $result['id']; ?></div>
                                <div class="item-atr"><?= $result['name']; ?></div>
                                <div class="item-atr"><?= $result['phone']; ?></div>
                                <div class="item-atr"><?= $result['email']; ?></div>
                                <div class="item-atr"><?= $result['status']; ?></div>
                            </div>
                            <button class="item-btn"><img src="assets/images/items-btn.png" alt=""></button>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="assets/js/jquery-3.6.0.js"></script>
<script src="assets/js/ajax.js"></script>
<script src="assets/js/main.js"></script>