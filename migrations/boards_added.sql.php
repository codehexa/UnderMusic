<?php

class Boards_added
{
    var $tableName;
    var $sql;

    function __construct(){
        $this->tableName = "boards_added";
    }

    function getSQL(){
        $this->sql = "CREATE TABLE `{$this->tableName}` (
          `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
          `board_id` bigint(20) unsigned NOT NULL DEFAULT 0,
          `user_id` bigint(20) unsigned NOT NULL COLLATE utf8_general_ci NOT NULL,
          `ments` MEDIUMTEXT COLLATE utf8_general_ci COMMENT 'comments',
          `created_at` timestamp NULL DEFAULT NULL,
          `updated_at` timestamp NULL DEFAULT NULL,
          `status` enum('Y','N') COLLATE utf8_general_ci NOT NULL DEFAULT 'N' COMMENT 'current status',
          `cnt` int(11) unsigned DEFAULT 0,
          PRIMARY KEY (`id`),
          KEY `user_id` (`user_id`),
          KEY `board_id` (`board_id`)
        ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";

        return $this->sql;
    }
}