<?php
// class to interface with the database.
class ScrumDB
{
  private static $conn;
	private static $hostName = "localhost";
	private static $databaseName = "scrum_team_db";
	private static $userName = "root";
	private static $password = "";

    public function connectTo()
    {
		//self::$databaseName = $databaseName; //Assigned above instead of passed to the method
		self::$conn = new mysqli(self::$hostName, self::$userName, self::$password, self::$databaseName );
		if (self::$conn->connect_error) {
			return("Connect Error to " . self::$hostName); //return error condition
        }
		return("Connection successful to hostName = " . self::$hostName . ", databaseName = " . self::$databaseName); //return success statement

	}

	public function showDatabases()
	{
    self::connectTo(); //make this a standalone function that uses default values assigned above
		$query = "SHOW DATABASES";
		$result = mysqli_query (self::$conn, $query);
		self::$conn->close();
		return $result;
	}

	public function showTables()
	{
    self::connectTo(); //make this a standalone function that uses default values assigned above
		$query = "SHOW TABLES FROM " . self::$databaseName;
		$result = mysqli_query (self::$conn, $query);
		self::$conn->close();
		return $result;
	}

	public function getRecords($tableName)
	{
    self::connectTo();	//make this a standalone function that uses default values assigned above
		$query = "SELECT * FROM " . $tableName;
		$result = mysqli_query (self::$conn, $query);
		self::$conn->close();
		return $result;
	}

  public function getOneRecord($tableName, $ID)
  {
    self::connectTo();	//make this a standalone function that uses default values assigned above
    $query = "SELECT * FROM " . $tableName . " WHERE ID = " . $ID;
    $result = mysqli_query(self::$conn, $query);
    self::$conn->close();
    return $result;
  }

  public function updateRecord($tableName, $ID, $data){
    self::connectTo();
    $query = "UPDATE " . $tableName . " SET ";
    foreach ($data as $key => $value) {
      $query .= $key . " = " . $value . ", ";
    }

    $query = substr($query, 0, -2);
    $query .= "WHERE ID = " . $ID;
    $result = mysqli_query(self::$conn, $query);
    self::$conn->close();
    return $result;
  }

  public function deleteRecord($tableName, $ID){
    self::connectTo();
    $query = "DELETE FROM " . $tableName . " WHERE ID = " . $ID;
    $result = mysqli_query (self::$conn, $query);
    self::$conn->close();
    return $result;
  }

  public function insertRecord($tableName, $data){
    self::connectTo();
    $columns = "(";
    $values = "(";
    foreach ($data as $column => $value) {
      $columns .= $column . ", ";
      $values .= $value . ", ";
    }
    $columns = substr($columns, 0, -2);
    $values = substr($values, 0, -2);
    $query = "INSERT INTO " . $tableName . " " . $columns . ") VALUES " . $values . ")";
    $result = mysqli_query(self::$conn, $query);
    self::$conn->close();
    return $result;
  }
}

 ?>
