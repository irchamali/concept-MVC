<?php 

class Criteria_model {

	private $table = 'electre_criterias';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllCriteria()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getCriteriaById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_criteria=:id_criteria');
		$this->db->bind('id_criteria', $id);
		return $this->db->single();
	}

	public function tambahDataCriteria($data)
	{
		$query = "INSERT INTO electre_criterias VALUES ('', :criteria, :code, :weight)";

		$this->db->query($query);
		$this->db->bind('criteria', $data['criteria']);
		$this->db->bind('code', $data['code']);
		$this->db->bind('weight', $data['weight']);

		$this->db->execute();

		return $this->db->rowCount();
	}
	
	public function hapusDataCriteria($id)
	{
		$query = "DELETE FROM electre_criterias WHERE id_criteria = :id_criteria";
		$this->db->query($query);
		$this->db->bind('id_criteria', $id);

		$this->db->execute();

		return $this->db->rowCount();
		//jika berhasil dihapus maka ini akan menghasilkan angka 1
	}

	public function ubahDataCriteria($data)
	{
		$query = "UPDATE electre_criterias SET 
		criteria = :criteria,
		code = :code,
		weight = :weight
		WHERE id_criteria = :id_criteria";

		$this->db->query($query);
		$this->db->bind('criteria', $data['criteria']);
		$this->db->bind('code', $data['code']);
		$this->db->bind('weight', $data['weight']);
		$this->db->bind('id_criteria', $data['id_criteria']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function cariDataCriteria()
	{
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM electre_criterias WHERE criteria LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword', "%$keyword%");
		return $this->db->resultSet();

	}

}