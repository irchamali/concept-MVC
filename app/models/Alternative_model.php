<?php 

class Alternative_model {
	// private $alt = [
	// 	[
	// 		"nama" => "Sawangan",
	// 		"kode" => "A1",
	// 		"luas" => "5000Ha"
	// 	],
	// 	[
	// 		"nama" => "Mangunsari",
	// 		"kode" => "A2",
	// 		"luas" => "6000Ha"
	// 	],
	// 	[
	// 		"nama" => "Tirtosari",
	// 		"kode" => "A3",
	// 		"luas" => "7000Ha"
	// 	]
	// ];

//PDO: php data object
	// private $dbh; //database handler
	// private $stmt;

	// public function __construct()
	// {
	// 	//data source name: dsn
	// 	$dsn = 'mysql:host=localhost;dbname=db_dss';
	// 	try {
	// 		$this->dbh = new PDO ($dsn, 'root', '');
	// 	} catch(PDOException $e){
	// 		die($e->getMessage());
	// 	}
	// }


	private $table = 'electre_alternatives';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllAlternative()
	{
		// return $this->alt;
		// $this->stmt = $this->dbh->prepare('SELECT * FROM electre_alternatives');
		// $this->stmt->execute();
		// return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getAlternativeById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_alternative=:id_alternative');
		$this->db->bind('id_alternative', $id);
		return $this->db->single();
	}

	public function tambahDataAlternative($data)
	{
		$query = "INSERT INTO electre_alternatives VALUES ('', :name, :code, :info, :plants)";

		$this->db->query($query);
		$this->db->bind('name', $data['name']);
		$this->db->bind('code', $data['code']);
		$this->db->bind('info', $data['info']);
		$this->db->bind('plants', $data['plants']);

		$this->db->execute();

		return $this->db->rowCount();
	}
	
	public function hapusDataAlternative($id)
	{
		$query = "DELETE FROM electre_alternatives WHERE id_alternative = :id_alternative";
		$this->db->query($query);
		$this->db->bind('id_alternative', $id);

		$this->db->execute();

		return $this->db->rowCount();
		//jika berhasil dihapus maka ini akan menghasilkan angka 1
	}

	public function ubahDataAlternative($data)
	{
		$query = "UPDATE electre_alternatives SET 
		name = :name,
		code = :code,
		info = :info, 
		plants = :plants
		WHERE id_alternative = :id_alternative";

		$this->db->query($query);
		$this->db->bind('name', $data['name']);
		$this->db->bind('code', $data['code']);
		$this->db->bind('info', $data['info']);
		$this->db->bind('plants', $data['plants']);
		$this->db->bind('id_alternative', $data['id_alternative']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariDataAlternative()
	{
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM electre_alternatives WHERE name LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword', "%$keyword%");
		return $this->db->resultSet();

	}

}