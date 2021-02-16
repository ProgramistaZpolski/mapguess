<?php

namespace App\Migrations;

class PopulateTableMigration
{
	/**
	 * Run the migration.
	 * @return String A sql query
	 */

	public function up()
	{
		return "INSERT INTO `maps` (`id`, `filename`, `countries`) VALUES
		(1, '001.png', 'Germany,Poland'),
		(2, '002.png', 'Japan,South Korea'),
		(3, '003.png', 'China,Taiwan'),
		(4, '004.jpg', 'USA,Canada'),
		(5, '005.png', 'Norway,Sweden,Denmark'),
		(6, '006.png', 'Isle Of Man,United Kingdom'),
		(7, '007.png', 'Panama,Columbia'),
		(8, '008.jpg', 'Finland,Russia'),
		(9, '009.png', 'France,United Kingdom'),
		(10, '010.png', 'Poland,Russia');
		
		ALTER TABLE `maps`
  			ADD PRIMARY KEY (`id`);
			  
		ALTER TABLE `maps`
  			MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
		COMMIT;";
	}

	/**
	 * Reverse the migration.
	 * @return String A sql query
	 */

	public function down()
	{
		return "TRUNCATE `mapguess`.`maps`";
	}
}
