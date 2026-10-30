<?php
date_default_timezone_set('Europe/Moscow');
$title = 'Щелочок Максим, группа 251-361, ЛР3 — Советы';
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
            <a href="<?php $link = 'methods.php'; $name = 'Способы заварки'; $current_page = false; echo $link; ?>"<?php if ($current_page) echo ' class="selected_menu"'; echo '>' . $name; ?></a>
            <a href="<?php $link = 'tips.php'; $name = 'Советы'; $current_page = true; echo $link; ?>"<?php if ($current_page) echo ' class="selected_menu"'; echo '>' . $name; ?></a>
        </nav>
    </header>
    <main>
        <h2>Как выбрать зёрна</h2>
        <p>Новичкам я советую начинать с арабики средней обжарки: она менее горькая и проще прощает ошибки при заварке. Обращайте внимание на дату обжарки на упаковке. Лучше всего кофе раскрывается в течение месяца после обжарки, а потом аромат постепенно слабеет. Молоть зёрна стоит прямо перед приготовлением, тогда вкус получается ярче.</p>

        <h2>Правила хорошего кофе</h2>
        <p>За время увлечения я составил для себя короткий список правил, которые помогают получать вкусный напиток каждый раз:</p>
        <ul>
            <?php
            $items = [
                'Не заливайте кофе кипятком, лучше подождать минуту после закипания',
                'Следите за пропорцией: около 60 граммов кофе на литр воды',
                'Хранить зёрна лучше в плотно закрытой банке в тёмном месте',
                'Не держите кофе в холодильнике, он впитывает посторонние запахи',
                'Записывайте результаты, чтобы повторить удачную заварку'
            ];
            foreach ($items as $item) {
                echo '<li>' . $item . '</li>';
            }
            ?>
        </ul>
        <p>Главное правило — не бояться экспериментировать. Меняйте помол, температуру воды и время заварки, пробуйте разные зёрна и записывайте, что получилось. Именно так и появился этот дневник.</p>
    </main>
    <footer>
        <?php echo 'Сформировано ' . date('d.m.Y') . ' в ' . date('H-i:s'); ?>
    </footer>
</body>
</html>
