<?php
class UserSQL {
    var $tableName;
    var $sql;

    function __construct(){
        $this->tableName = "users";

    }

    function getSQL(){
        $this->sql = "CREATE TABLE `{$this->tableName}` (
          `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
          `name` varchar(255) COLLATE utf8_general_ci NOT NULL,
          `email` varchar(255) COLLATE utf8_general_ci NOT NULL,
          `power` enum('ADMIN','STAFF','USER') COLLATE utf8_general_ci DEFAULT 'USER',
          `email_verified_at` timestamp NULL DEFAULT NULL,
          `password` varchar(255) COLLATE utf8_general_ci NOT NULL,
          `remember_token` varchar(100) COLLATE utf8_general_ci DEFAULT NULL,
          `created_at` timestamp NULL DEFAULT NULL,
          `updated_at` timestamp NULL DEFAULT NULL,
          `dp_sum` bigint(20) unsigned NOT NULL DEFAULT 0 COMMENT 'dp sum count',
          `user_token` varchar(255) COLLATE utf8_general_ci DEFAULT '' COMMENT 'app token',
          `reg_method` enum('IOS','ANDROID','WEB') COLLATE utf8_general_ci DEFAULT 'WEB' COMMENT 'register method',
          `poster_path` varchar(255) COLLATE utf8_general_ci DEFAULT 'no_poster' COMMENT 'user poster path url',
          `status` enum('Y','N') COLLATE utf8_general_ci NOT NULL DEFAULT 'N' COMMENT 'current status',
          PRIMARY KEY (`id`),
          UNIQUE KEY `users_email_unique` (`email`)
        ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";

        return $this->sql;
    }
}