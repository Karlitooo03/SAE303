<?php
require_once "poo_database.php";

class Model extends Database
{

	private $table;
	// Table de la base de données
	protected string $adherents;
	protected string $reservations;
	protected string $pilotes;
	protected string $avions;

	// Instance de connexion
	protected $db;
	//protected static $instance;

	function getTable()
	{
		return $this->table;
	}

	//Constructeur de la classe
	function __construct(string $adherents)
	{
		$this->table = $adherents;
		$this->db = Database::getInstance();
	}
	function __construct2(string $reservations)
	{
		$this->table = $reservations;
		$this->db = Database::getInstance();
	}
	function __construct3(string $pilotes)
	{
		$this->table = $pilotes;
		$this->db = Database::getInstance();
	}
	function __construct4(string $avions)
	{
		$this->table = $avions;
		$this->db = Database::getInstance();
	}
}
