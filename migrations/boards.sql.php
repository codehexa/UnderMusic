<?php

class Boards
{
    var $tableName;
    var $sql;

    function __construct(){
        $this->tableName = "boards";
    }

    function getSQL(){
        $this->sql = "CREATE TABLE `{$this->tableName}` (
          `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
          `title` varchar(255) COLLATE utf8_general_ci NOT NULL,
          `user_id` bigint(20) unsigned NOT NULL COLLATE utf8_general_ci NOT NULL,
          `ments` MEDIUMTEXT COLLATE utf8_general_ci COMMENT 'comments',
          `created_at` timestamp NULL DEFAULT NULL,
          `updated_at` timestamp NULL DEFAULT NULL,
          `add_ments_cnt` int(11) unsigned DEFAULT 0 COMMENT 'ments count',
          `status` enum('Y','N') COLLATE utf8_general_ci NOT NULL DEFAULT 'N' COMMENT 'current status',
          `cnt` int(11) unsigned DEFAULT 0,
          PRIMARY KEY (`id`),
          KEY `user_id` (`user_id`)
        ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";

        return $this->sql;
    }
}