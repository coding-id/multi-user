<?php
	mysqli_report(MYSQLI_REPORT_STRICT);
	Class Login {
		private $db;
		function __construct($mysql) {
			$this->db = $mysql;
		}

		function check($username, $password) {
			$query = "Select users.*, role.role as level from users INNER JOIN role ON users.role=role.id where users.username='$username' and users.password=md5('$password')";
			$result = $this->db->query($query);
			if ($result->num_rows != 0) {
				$data = $result->fetch_object();
				$_SESSION['id'] = $data->id;
				$_SESSION['level'] = $data->level;
				return true;
			}
			else {
				return false;
			}
		}
	}
?>