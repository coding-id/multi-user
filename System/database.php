<?php
	class Database {
		private $mysqli;
		private $host;
		private $user;
		private $pass;
		private $db;

		function __construct($host,$user,$pass,$db) {
			$this->host = $host;
			$this->user = $user;
			$this->pass = $pass;
			$this->db = $db;

			$this->mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
			if (!$this->mysqli) {
				return false;
			}
			return true;
		}

		public function query($query) {
			$result = $this->mysqli->query($query);
			if (!$result) {
				die($this->mysqli->error);
			}
			else {
				return $result;
			}
		}
	}
?>