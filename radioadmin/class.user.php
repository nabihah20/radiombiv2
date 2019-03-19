<?php

require_once('dbconfig.php');

class USER
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	public function register($unama,$emel,$password)
	{
		try
		{
			$new_password = password_hash($password, PASSWORD_DEFAULT);
			
			$stmt = $this->conn->prepare("INSERT INTO users(unama,emel,password) 
		                                               VALUES(:unama, :emel, :password)");
												  
			$stmt->bindparam(":unama", $unama);
			$stmt->bindparam(":emel", $emel);
			$stmt->bindparam(":password", $new_password);										  
				
			$stmt->execute();	
			
			return $stmt;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}				
	}
	
	
	public function doLogin($unama,$emel,$password)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT uid, unama, emel, password FROM users WHERE unama=:unama OR emel=:emel ");
			$stmt->execute(array(':unama'=>$unama, ':emel'=>$emel));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() == 1)
			{
				if(password_verify($password, $userRow['password']))
				{
					$_SESSION['user_session'] = $userRow['uid'];
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}
	
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}
}
?>