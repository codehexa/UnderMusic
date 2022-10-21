<?php

class BoardPhotos
{
    var $tableName;
    var $sql;

    function __construct(){
        $this->tableName = "boards_photos";
    }

    function getSQL(){
        $this->sql = "CREATE TABLE `{$this->tableName}` (
          `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
          `user_id` bigint(20) unsigned NOT NULL COLLATE utf8_general_ci NOT NULL,
          `board_id` bigint(20) unsigned NOT NULL COLLATE utf8_general_ci NOT NULL,
          `photo_path` varchar(255) COLLATE utf8_general_ci COMMENT 'photo path',
          `created_at` timestamp NULL DEFAULT NULL,
          `updated_at` timestamp NULL DEFAULT NULL,
          `status` enum('Y','N') COLLATE utf8_general_ci NOT NULL DEFAULT 'N' COMMENT 'current status',
          PRIMARY KEY (`id`),
          KEY `user_id` (`user_id`),
          KEY `board_id` (`board_id`)
        ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";

        return $this->sql;
    }
}