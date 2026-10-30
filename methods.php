<?php
date_default_timezone_set('Europe/Moscow');
$title = 'Щелочок Максим, группа 251-361, ЛР3 — Способы заварки';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Кофейный дневник</h1>
        <nav>
            <a href="<?php $link = 'index.php'; $name = 'Главная'; $current_page = false; echo $link; ?>"<?php if ($current_page) echo ' class="selected_menu"'; echo '>' . $name; ?></a>
            <a href="<?php $link = 'methods.php'; $name = 'Способы заварки'; $current_page = true; echo $link; ?>"<?php if ($current_page) echo ' class="selected_menu"'; echo '>' . $name; ?></a>
            <a href="<?php $link = 'tips.php'; $name = 'Советы'; $current_page = false; echo $link; ?>"<?php if ($current_page) echo ' class="selected_menu"'; echo '>' . $name; ?></a>
        </nav>
    </header>
    <main>
        <h2>Три способа заварки</h2>
        <p>За время увлечения я попробовал несколько способов приготовления кофе. Каждый из них даёт свой вкус: турка делает напиток густым и крепким, френч-пресс — мягким, а аэропресс — чистым и ярким. В таблице ниже я собрал время приготовления и мои впечатления от каждого способа.</p>
        <table>
            <tr><th>Способ</th><th>Время</th><th>Вкус</th></tr>
            <tr><td>Турка</td><td>5 минут</td><td>Крепкий, насыщенный</td></tr>
            <tr><td>Френч-пресс</td><td>4 минуты</td><td>Мягкий, с кислинкой</td></tr>
            <tr><td>Аэропресс</td><td>2 минуты</td><td>Чистый, яркий</td></tr>
        </table>

        <h2>Что нужно для заварки</h2>
        <p>Для любого способа понадобится небольшой набор вещей, который есть у каждого любителя кофе:</p>
        <ul>
            <?php
            $items = [
                'Свежеобжаренные зёрна',
                'Кофемолка или молотый кофе',
                'Кухонные весы для точной дозировки',
                'Чистая вода без сильного привкуса',
                'Таймер, чтобы не передержать напиток'
            ];
            foreach ($items as $item) {
                echo '<li>' . $item . '</li>';
            }
            ?>
        </ul>
        <p>Лучше всего начать с турки: она проста в использовании и не требует специального оборудования. Когда привыкнете к вкусу, можно переходить к френч-прессу и аэропрессу.</p>
    </main>
    <footer>
        <?php echo 'Сформировано ' . date('d.m.Y') . ' в ' . date('H-i:s'); ?>
    </footer>
</body>
</html>
