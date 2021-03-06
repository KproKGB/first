<?php
class newDiary {

    function dbCreate(){
        $_sql = "CREATE DATABASE IF NOT EXISTS diary CHARACTER SET utf8";
        if(mysqli_query(DB::getLink(), $_sql) or die ('Error_sql_db_create'))
            echo "База данных 'diary' создана<br><br>";
    }

    function tableCreate(){
        $_sql = "CREATE TABLE IF NOT EXISTS `users` (
        `id` INTEGER AUTO_INCREMENT,
        `login` VARCHAR(20) NOT NULL,
         `pass` CHAR(32) NOT NULL,
          `name` VARCHAR(235) NOT NULL,
          `surname` VARCHAR(235) NOT NULL,
          `email` VARCHAR(235) NOT NULL,
          `class` VARCHAR(20) NOT NULL,
          PRIMARY KEY (`id`))";

        if(mysqli_query(DB::getLink(), $_sql) or die ('Error_sql_tab_user'))
            echo "Таблица 'users' создана<br><br>";


        $_sql = "CREATE TABLE IF NOT EXISTS `lessons` (
                `id` INTEGER AUTO_INCREMENT,
                `title` VARCHAR(50) NOT NULL,
                  PRIMARY KEY (`id`))";

        if(mysqli_query(DB::getLink(), $_sql) or die ('Error_sql_tab_lessons'))
            echo "Таблица 'lessons' создана<br><br>";

        $_sql = "CREATE TABLE IF NOT EXISTS `estimates` (
                `id` INTEGER AUTO_INCREMENT,
                `value` INTEGER NOT NULL,
                `lesson_id` INTEGER NOT NULL,
                `user_id` INTEGER NOT NULL,
                `date` TIMESTAMP NOT NULL,
                PRIMARY KEY (`id`))";

        if(mysqli_query(DB::getLink(), $_sql) or die ('Error_sql_tab_estimates'))
            echo "Таблица 'estimates' создана<br><br>";

    }
}