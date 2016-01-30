<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://yastatic.net/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Мой первй блог</h1>
        <div>
            <div class="article">
                    <h3><?=$article['title']?></h3>
                    <em>Опубликовано <?=$article['date']?></em>
                    <p><?=$article['content']?></p>
            </div>

          </div>
          <footer>
            <p>Мой первый блог<br>
            Copyright &copy; 2016
            </p>
          </footer>
    </div>
</body>
</html>
