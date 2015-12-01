<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<center>
    <table>
        <tr>
            <th>Дата</th>
            <th>Название</th>
            <th>Текст новости</th>
        </tr>
        <tr>
            <th><BR></th>
        </tr>
        <?php foreach ($items as $item): ?>
            <tr>
                <td><?php echo $item['dt']; ?></td>
                <td><?php echo $item['news']; ?></td>
                <td><a href="show_news.php/?id=<?php echo $item['id']; ?>">читать новость
                        полностью >>>>> </a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</center>
<br /><br />
<a href="./add.php">Добавить новость</a>
<br /><br />
<a href="./delete.php">Удалить новость</a>
<br /><br />
<a href="./update.php">Редактировать новость</a>
</body>
</html>
