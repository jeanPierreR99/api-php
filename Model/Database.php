
    <?php
class Database
{
    protected $connection = null;
 
    public function __construct()
    {
        try {
            $this->connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);
            $this->connection -> set_charset("utf8");
         
            if ( mysqli_connect_errno()) {
                throw new Exception("Could not connect to database.");   
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());   
        }           
    }

//----------------------------------consultas------------------------------------------------------------------------------------------
//get    
public function consulta($query = "")
    {
        try {
            $stmt = $this->ejecucionConsulta( $query );
            $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);               
            $stmt->close();
 
            return $result;
        } catch(Exception $e) {
            throw New Exception( $e->getMessage() );
        }
        return false;
    }

//post
    public function consultaPost($query = "")
    {
        try {
            $stmt = $this->ejecucionConsulta( $query );
            $result = $stmt->post_result()->fetch_all(MYSQLI_ASSOC);               
            $stmt->close();
 return $result;
        } catch(Exception $e) {
            throw New Exception( $e->getMessage() );
        }
        return false;
    }

//ejecucion-query
    private function ejecucionConsulta($query)
    {
        try {
            $stmt = $this->connection->prepare( $query );
 
            if($stmt === false) {
                throw New Exception("Unable to do prepared statement: " . $query);
            }
 
            $stmt->execute();
 
            return $stmt;
        } catch(Exception $e) {
            throw New Exception( $e->getMessage() );
        }   
    }
}