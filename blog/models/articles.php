<?php

//View all articles
//
function articles_all ($link) {

    //The query
    $query = "SELECT * FROM articles ORDER BY id DESC";
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));

    //Extract the result from DB
    $n = mysqli_num_rows($result);
    $articles = array();

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }


    return $articles;

}

//Get article with specific id
//
function articles_get ($link, $id_article) {

    //The query
    $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id_article);
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));

    $article = mysqli_fetch_assoc($result);

    return $article;
}

//Create a new article
//
function articles_new ($link, $title, $date, $content) {

    //Prepare
    $title = trim($title);
    $content = trim($content);

    //Check
    if ($title == '')
        return false;

    //The query
    $t = "INSERT INTO articles (title, date, content) VALUES ('%s','%s', '%s')";

    $query = sprintf($t, mysqli_real_escape_string($link, $title),mysqli_real_escape_string($link, $date),mysqli_real_escape_string($link, $content));

//    echo $query;
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    return true;
}

//
//
function articles_edit ($id, $title, $date, $content) {

}

//Delete article with specific id
//
function articles_delete ($id) {

}




?>
