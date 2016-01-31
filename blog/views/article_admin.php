<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Мой первый блог</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://yastatic.net/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
       <h1>Мой первый блог</h1>
        <div>
        <form action="index.php?action=add" method="post">
            <label>Название<br>
                <input type="text" name="title" value="" class="form-item" autofocus required>
            </label>
            <br>
            <label>Дата<br>
                <input type="date" name="date" value="" class="form-item" required>
            </label>
            <br>
            <label>Содержимое<br>
                <textarea class="form-item" name="content" required></textarea>
            </label><br>
            <input type="submit" value="Сохранить" class="btn">
        </form>
        </div>
    <footer>
        <p>Мой первый блог<br>Copyright &copy; 2016</p>
    </footer>
    </div>
</body>
</html>
