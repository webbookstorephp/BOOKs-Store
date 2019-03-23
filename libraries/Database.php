<?php
    class Database{
        private $host = 'localhost';
        private $uname = 'root';
        private $psw = '';
        private $dbName = 'test123';
        private $conn;

        public function __construct()
        {
            $this->conn = $this->connectDB(); 
			if (mysqli_connect_error())
				echo "Failed to connect to SQL: " . mysqli_connect_error();
			else
				mysqli_set_charset($this->conn,"utf8");
        }

		public function connectDB() {
			$conn = mysqli_connect($this->host,$this->uname,$this->psw,$this->dbName) or die();
			return $conn;
		}

        public function insert($table, array $data)
        {
            $sql = "INSERT INTO {$table} ";
            $columns = implode(',', array_keys($data));
            $values = "";
            $sql .= '('.$columns.')';
            foreach($data as $field => $value){
                if(is_string($value)){
                    $values .= "'".mysqli_real_escape_string($this->conn, $value)."',";
                }else {
                    $values .= mysqli_real_escape_string($this->conn, $value).',';
                }
            }
            $values = substr($values, 0, -1);
            $sql .= " VALUES (".$values.')';
            mysqli_query($this->conn, $sql) or die("error insert query: ".mysqli_error($this->conn));
            return mysqli_insert_id($this->conn);
        }

        public function update($table, array $data, array $conditions)
        {
            $sql = "UPDATE {$table}";
            $set = "SET";
            $where = "WHERE";
            foreach($data as $field => $value)
            {
                if(is_string($value)){
                    $set .= $field .'='.'\''.mysqli_real_escape_string($this->conn, xss_clean($value)) .'\',';
                }else {
                    $set .= $field .'='.mysqli_real_escape_string($this->conn, xss_clean($value)) .',';
                }
            }
            $set = substr($set,0,-1);

            foreach($conditions as $field => $value)
            {
                if(is_string($value)){
                    $where .= $field .'='.'\''.mysqli_real_escape_string($this->conn, xss_clean($value)) .'\' AND ';
                } else {
                    $where .= $field .'='.mysqli_real_escape_string($this->conn, xss_clean($value)) .'AND';
                }
            }
            $where = substr($where,0,-5);
            $sql .= $set . $where;

            mysqli_query($this->conn,$sql) or die("Error update query: ".mysqli_error($this->conn));
            return mysqli_affected_rows($this->conn);
        }

        public function updateView($sql)
        {
            $result = mysqli_query($this->conn, $sql) or die("Error update query: ". mysqli_error($this->conn));
            return mysqli_affected_rows($this->conn);
        }

        public function countTable($table)
        {
            $sql = "SELECT id FROM {$table}";
            $result =  mysqli_query($this->conn, $sql) or die("Error select query: ". mysqli_error($this->conn));
            $num = mysqli_num_rows($result);
            return $num;
        }

        public function delete($table, $id)
        {
            $sql = "DELETE FROM {$table} WHERE id = {$id}";
            mysqli_query($this->conn,$sql) or die("Error delete query: ". mysqli_error($this->conn));
            return mysqli_affected_rows($this->conn);
        }

        public function deleteWhere($table, $data = array())
        {
            foreach($data as $id)
            {
                $id = intval($id);
                $sql = "DELETE FROM {$table} WHERE id={$id}";
                mysqli_query($this->conn, $sql) or die("Error 'delete where' query: ".mysqli_error($this->conn));
            }
            return true;
        }

        public function fetchSql($sql)
        {
            $result = mysqli_query($this->conn, $sql) or die("Error select query: ".mysqli_error($this->conn));
            $data = [];
            if($result)
            {
                while($num = mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }
            return $data;            
        }

        public function fetchID($table, $id)
        {
            $sql = "SELECT * FROM {$table} WHERE id = {$id}";
            $result = mysqli_query($this->conn, $sql) or die("Error select query: ".mysqli_error($this->conn));
            return mysqli_fetch_assoc($result);
        }

        public function fetchOne($table, $query)
        {
            $sql = "SELECT * FROM {$table} WHERE ";
            $sql .= $query;
            $sql .= " LIMIT 1";
            $result = mysqli_query($this->conn, $sql) or die("Error select query: ".mysqli_error($this->conn));
            return mysqli_fetch_assoc($result);
        }
        
        public function deleteSql($table, $sql)
        {
            $sql = "DELETE FROM {$table} WEHRE {$sql}";
            mysqli_query($this->conn, $sql) or die("Error delete query: ".mysqli_error($this->conn));
            return mysqli_affected_rows($this->conn);
        }

        public function fetchAll($table)
        {
            $sql = "SELECT * FROM {$table} WHERE 1";
            $result = mysqli_query($this->conn,$sql) or die("Error select query: ".mysqli_error($this->conn));
            $data = [];
            if($result)
            {
                while($num = mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }
            return $data;
        }

        public function fetchJones($table, $sql, $total = 1, $page, $row, $pagi = true)
        {
            $data = [];
            if($pagi == true)
            {
                $pageNumber = ceil($total / $row);
                $start = ($page - 1) * $row;
                $sql .= " LIMIT {$start}, {$row}";
                $data = ["page" => $pageNumber];

                $result = mysqli_query($this->conn,$sql) or die("Error paginations: ".mysqli_error($this->conn));
            }
            else
            {
                $result = mysqli_query($this->conn,$sql) or die("Error paginations: ".mysqli_error($this->conn));
            }

            if($result)
            {
                while($num = mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }
            return $data;
        }

        public function fetchJone($table, $sql, $total = 1, $page, $row, $pagi = true)
        {
            $data = [];
            if($pagi == true)
            {
                $total = $this->countTable($table);
                $pageNumber = ceil($total / $row);
                $start = ($page - 1) * $row;
                $sql .= " LIMIT {$start}, {$row}";
                $data = ["page" => $pageNumber];

                $result = mysqli_query($this->conn,$sql) or die("Error paginations: ".mysqli_error($this->conn));
            }
            else
            {
                $result = mysqli_query($this->conn,$sql) or die("Error paginations: ".mysqli_error($this->conn));
            }

            if($result)
            {
                while($num = mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }
            return $data;
        }

        public function fetchJoneDetail($table, $sql, $page = 0, $total, $pagi)
        {
            $result = mysqli_query($this->conn, $sql) or die("Error paginations: ".mysqli_error($this->conn));
            $pageNumber = ceil($total/$pagi);
            $start = ($page - 1)*$row;
            $sql .= " LIMIT {$start}, {$row}";

            $result = mysqli_query($this->conn, $sql);
            $data = [];
            $data = [ "page" => $pageNumber];
            if($result)
            {
                while($num = mysqli_fetch_assoc($result))
                {
                    $data[] = $num;
                }
            }
            return $data;
        }

        public function total($sql)
        {
            $result = mysqli_query($this-conn, $sql);
            return mysqli_fetch_assoc($result);
        }
    }
?>