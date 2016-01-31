<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Мой первый блог</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://yastatic.net/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Мой первый блог</h1>
        <a href="admin">Панель администратора</a>
        <div>
            <?php foreach($articles as $a): ?>
            <div class="article">
                    <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                    <em>Опубликовано <?=$a['date']?></em>
                    <p><?=articles_intro($a['content'])?></p>
            </div>
            <?php endforeach ?>
          </div>
          <footer>
            <p>Мой первый блог<br>
            Copyright &copy; 2016
            </p>
          </footer>
    </div>
</body>
</html>
