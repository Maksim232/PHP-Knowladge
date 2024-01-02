<a href="/">Главная</a>
<?php if ($username !== null) : ?>
    <p>Рады вас приветствовать, <?= $username ?>. <a href="/?controller=security&action=logout">[Выход]</a></p>
<?php else : ?>
    <form method="post">
        <a href="/?controller=security">Авторизации</a>
    </form>
<?php endif ?><br>