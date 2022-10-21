<?php
require "../classes/db.class.php";
require "./users.sql.php";
require "./albums.sql.php";
require "./music.sql.php";
require "./musicians.sql.php";
require "./gallery.sql.php";
require "./news.sql.php";
require "./boards.sql.php";
require "./boards_added.sql.php";
require "./BoardPhotos.sql.php";

$db = new DB();
//$userObj = new UserSQL();

/*
$userSql = $userObj->getSQL();
$db->doQuery($userSql);

$albums = new Albums();
$albumsSql = $albums->getSQL();
$db->doQuery($albumsSql);

$music = new Music();
$music_sql = $music->getSQL();
$db->doQuery($music_sql);

$musicians = new Musicians();
$musicians_sql = $musicians->getSQL();
$db->doQuery($musicians_sql);

$gallery = new Gallery();
$gallery_sql = $gallery->getSQL();
$db->doQuery($gallery_sql);

$news = new News();
$news_sql = $news->getSQL();
$db->doQuery($news_sql);

$boards = new Boards();
$boards_sql = $boards->getSQL();
$db->doQuery($boards_sql);

$boardsAdded = new Boards_added();
$boardsAdded_sql = $boardsAdded->getSQL();
$db->doQuery($boardsAdded_sql);
*/

$boardsPhoto = new BoardPhotos();
$boardsPhoto_sql = $boardsPhoto->getSQL();
$db->doQuery($boardsPhoto_sql);
