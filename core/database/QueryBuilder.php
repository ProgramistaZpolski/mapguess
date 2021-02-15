<?php

class QueryBuilder
{
	protected $pdo;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table)
	{
		$query = $this->pdo->prepare("select * from {$table}");
		$query->execute();
		return $query->fetchAll(PDO::FETCH_OBJ);
	}

	public function sql($query)
	{
		$query = $this->pdo->prepare($query);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_OBJ);
	}

	public function insert($table, $parameters)
	{
		$columns = implode(', ', array_keys($parameters));
		$values = ':' . implode(', :', array_keys($parameters));
		$sqlString = sprintf(
			'insert into %s (%s) values (%s)',
			$table,
			$columns,
			$values
		);

		try {
			$query = $this->pdo->prepare($sqlString);
			$query->execute($parameters);
		} catch (Exception $e) {
			die('Something went wrong.');
		}
	}
}