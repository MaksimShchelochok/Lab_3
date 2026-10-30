<?php
date_default_timezone_set('Europe/Moscow');
$title = 'Щелочок Максим, группа 251-361, ЛР3 — Главная';
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
            <a href="<?php $link = 'index.php'; $name = 'Главная'; $current_page = true; echo $link; ?>"<?php if ($current_page) echo ' class="selected_menu"'; echo '>' . $name; ?></a>
            <a href="<?php $link = 'methods.php'; $name = 'Способы заварки'; $current_page = false; echo $link; ?>"<?php if ($current_page) echo ' class="selected_menu"'; echo '>' . $name; ?></a>
            <a href="<?php $link = 'tips.php'; $name = 'Советы'; $current_page = false; echo $link; ?>"<?php if ($current_page) echo ' class="selected_menu"'; echo '>' . $name; ?></a>
        </nav>
    </header>
    <main>
        <h2>О моём хобби</h2>
        <p>Я студент Московского Политеха. Во время учёбы часто засиживаюсь допоздна, и так кофе стал моим главным увлечением. Сначала я пил обычный растворимый, потом купил турку, а позже попробовал френч-пресс и аэропресс. Теперь я веду записи: какие зёрна купил, как заваривал и что получилось. Эта страница — мой кофейный дневник, и здесь я собираю всё, что узнал.</p>

        <?php
        $photos = [
            'https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=600',
            'https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=600'
        ];
        echo '<img src="' . $photos[date('s') % 2] . '" alt="Меняющаяся фотография кофе">';
        ?>
        <img src="https://images.unsplash.com/photo-1447933601403-0c6688de566e?w=600" alt="Кофейные зёрна">

        <h2>Что мне нравится в кофе</h2>
        <p>Кофе для меня — не только напиток, но и повод остановиться посреди загруженного дня. Вот что мне нравится больше всего:</p>
        <ul>
            <?php
            $items = [
                'Запах свежемолотых зёрен',
                'Возможность попробовать новый способ заварки',
                'Разный вкус у зёрен из разных стран',
                'Спокойные минуты перед парами'
            ];
            foreach ($items as $item) {
                echo '<li>' . $item . '</li>';
            }
            ?>
        </ul>
        <p>Фотография вверху меняется в зависимости от секунды: если секунда чётная, вы видите одну чашку, если нечётная — другую.</p>
    </main>
    <footer>
        <?php echo 'Сформировано ' . date('d.m.Y') . ' в ' . date('H-i:s'); ?>
    </footer>
</body>
</html>
