<?php

//View all articles
//
function articles_all () {
    $art1 = ["id"=>1, "title"=>"Title 1", "date"=>"2016-01-30", "content"=>"Content 1"];
    $art2 = ["id"=>2, "title"=>"Title 2", "date"=>"2016-01-30", "content"=>"Content 2"];

    $arr[0] = $art1;
    $arr[1] = $art2;

    return $arr;

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
