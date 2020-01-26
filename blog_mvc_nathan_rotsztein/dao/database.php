<?php namespace dao;



define('MYSQL', 'mysql');
define('FIREBIRD', 'firebird');


$GLOBALS['database_type'] = MYSQL;
	


class Database
{
	private $_connection;

   
    public function load() 
    {
    	switch ($GLOBALS['database_type']) {
    		case MYSQL:
    			$this->_load_mysql();
    			break;
    		
            case FIREBIRD:
               
                break;
    		
         

            default:
    			break;
    	}
    }


	private function _load_mysql()
	{
		$host = "localhost"; 
		$user = "root";
		$password = "";
		$db_name = "nathan"; 

        $this->_connection = mysqli_connect($host, $user, $password, $db_name);
        
      
        if (mysqli_connect_errno()) 
        {
        	
            printf("Échec de la connexion : %s\n", mysqli_connect_error()); 
            exit();
        }		
	}

	
	private function _load_firebird()
	{
		
	}

	
	public function get_connection()
	{
		return $this->_connection;
	}    


    public function close() 
    {
    	switch ($GLOBALS['database_type']) {
    		case MYSQL:
    			mysqli_close($this->_connection);
    			break;
    		
    		case FIREBIRD:
    			
    			break;    		
    		
    		default:
    			break;
    	}
    }
}

?>
