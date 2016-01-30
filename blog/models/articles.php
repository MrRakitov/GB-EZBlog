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
function articles_get ($id) {

    return ["id"=>1, "title"=>"It is a simple title", "date"=>"2016-01-30", "content"=>"Here will be an article"];

}

//Create a new article
//
function articles_new ($title, $date, $content) {

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
