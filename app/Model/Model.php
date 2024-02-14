<?php


class Model
{

	public function connect()
	{
		try {
			$string =  "odbc:DRIVER={".DRIVER."}; DBQ=".PATH."; Uid=; Pwd=".PASS.";";
			
			$conn =  new  PDO( $string ); // podrazumevana baza

			return $conn;

			//return $db;
			} catch ( PDOException $pe ) {
			echo $string;
			echo "<br><strong>Greska u povezivanju sa bazom:</strong><br>";
			echo $pe->getMessage();
			echo "</br>";
			echo "<h2>1. Proverite da li je ukljucen PHP_PDO_ODBC ekstenzija u PHP</h2>";
			echo "<h2>2. Proverite drajver koji se koristi za ODBC konekciju</h2>"; 
			echo "<h2>3. <a href='config/cfgedit.php' class='btn btn-primary'>Pokreni konfiguraciju</a></h2>"; 
			echo (PHP_INT_SIZE===8)? "PHP je 64 bit ":"PHP je 32 bit <br>";

			die();

	  		}
	}

	public function get($sql)
	{
		$data = $this->connect()->prepare($sql);
		$data->execute();
		return $data;

	}

	public function all($sql)
	{
		$data = $this->get($sql);
		return $data->fetchall(PDO::FETCH_ASSOC);
	}

	public function first($sql)
	{
		$sql = str_replace("select", "Select Top 1", $sql);
		$data = $this->get($sql);
		return $data->fetch(PDO::FETCH_ASSOC);
	}

	public function insert($table,$data) //Nazivi kolona se moraju slagati sa nazivima polja u POST-i
	{
	    $kolone = implode(', ', array_keys($data));
	    $vrednosti = ':' . implode(', :', array_keys($data));
	    $sql = "INSERT INTO $table ($kolone) VALUES ($vrednosti)";
	    $stmt = $this->connect()->prepare($sql);
	    
	    if ($stmt->execute($data)) {
	        // Ako je upit uspešno izvršen, vrati zadnji uneseni ID, specficno za MS Access
	        $stmt = $this->db->prepare("SELECT @@IDENTITY"); 
	        $stmt->execute();
	        return $stmt->fetchColumn();
	    } else {
	        // Ako je došlo do greške vrati false 
	        return false;
	    }
	}

	public function edit($table, $data, $where = null)  
	{
	    $izmene = [];
	    foreach ($data as $kolona => $vrednost) {
	        $izmene[] = "$kolona = :$kolona";
	    }
	    $izmena_string = implode(', ', $izmene);
	    
	    if ($where === null) {
	        // Ako nije definisan WHERE uslov, ažurira se prva kolona u tabeli
	        $sql = "UPDATE $table SET $izmena_string";
	    } else {
	        $sql = "UPDATE $table SET $izmena_string WHERE $where";
	    }

	    $stmt = $this->connect()->prepare($sql);
	    
	    if ($stmt->execute($data)) {
	        // Proverite da li je bar jedan red ažuriran
	        if ($stmt->rowCount() > 0) {
	            return true; // Uspesno izmenjen
	        } else {
	            return false; // Ni jedan red nije ažuriran
	        }
	    } else {
	        return false; // Greška pri izvršenju upita
	    }
	}
}
	
		

