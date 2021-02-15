<?php

namespace App\Migrations;

class CreateTableMigration
{
	/**
     * Run the migration.
     * @return String A sql query
     */

	public function up()
	{
		return "CREATE TABLE `mapguess`.`maps` ( `id` INT NOT NULL AUTO_INCREMENT , `filename` TEXT NOT NULL COMMENT 'The filename of the image of the map' , `countries` TEXT NOT NULL COMMENT 'Countries on the map' , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
	}

	/**
     * Reverse the migration.
     * @return String A sql query
     */

	public function down()
	{
		return "DROP TABLE `mapguess`";
	}
}