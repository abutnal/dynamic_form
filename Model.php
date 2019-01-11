<?php
include('database.php');
class Model extends Database{
	public function create($table, $data){
		$sql = "";
		$sql .="INSERT INTO ".$table."(".implode(", ", array_keys($data)).") VALUES (:".implode(", :", array_keys($data)).")";
		foreach ($data as $key => $value) {
				$binding[':'.$key] = $value;
		}
		$stmt = $this->con->prepare($sql);
		$run = $stmt->execute($binding);
		if ($run) {
			echo "Saved";
		}
	}

	public function update($data){
		echo "I ma ready to update existing records";
		echo "<br>";
		echo "<pre>";
		print_r($data);
	}
}
