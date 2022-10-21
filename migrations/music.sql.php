<?php

class Music
{
    var $tableName;
    var $sql;

    function __construct(){
        $this->tableName = "musics";
    }

    function getSQL(){
        $this->sql = "CREATE TABLE `{$this->tableName}` (
          `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
          `title` varchar(255) COLLATE utf8_general_ci NOT NULL,
          `user_id` bigint(20) unsigned NOT NULL COLLATE utf8_general_ci NOT NULL,
          `album_id` bigint(20) unsigned default 0 COLLATE utf8_general_ci COMMENT 'albums.id',
          `year` varchar(10) COMMENT 'make year',
          `cover_path` varchar(255) COLLATE utf8_general_ci NOT NULL,
          `created_at` timestamp NULL DEFAULT NULL,
          `updated_at` timestamp NULL DEFAULT NULL,
          `writers`   VARCHAR(255) NULL COMMENT 'producers text',
          `composers`   VARCHAR(255) NULL COMMENT   'composers ',
          `lyrics`  MEDIUMTEXT NULL COMMENT 'lyrics',
          `tracks`  int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'order',
          `status` enum('Y','N') COLLATE utf8_general_ci NOT NULL DEFAULT 'N' COMMENT 'current status',
          PRIMARY KEY (`id`),
          KEY `user_id` (`user_id`),
          KEY `album_id` (`album_id`)
        ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";

        return $this->sql;
    }
}