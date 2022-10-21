<?php

class Musicians
{
    var $tableName;
    var $sql;

    function __construct(){
        $this->tableName = "musicians";
    }

    function getSQL(){
        $this->sql = "CREATE TABLE `{$this->tableName}` (
          `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
          `name` varchar(255) COLLATE utf8_general_ci NOT NULL,
          `user_id` bigint(20) unsigned NOT NULL COLLATE utf8_general_ci NOT NULL,
          `album_count` int(11) unsigned default 0 COLLATE utf8_general_ci COMMENT 'album_count',
          `sub_scripts` MEDIUMTEXT COMMENT 'sub scription',
          `created_at` timestamp NULL DEFAULT NULL,
          `updated_at` timestamp NULL DEFAULT NULL,
          `status` enum('Y','N') COLLATE utf8_general_ci NOT NULL DEFAULT 'N' COMMENT 'current status',
          PRIMARY KEY (`id`),
          KEY `user_id` (`user_id`)
        ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";

        return $this->sql;
    }
}