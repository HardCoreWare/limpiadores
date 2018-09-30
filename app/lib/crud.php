<?php

class crud{

    private $pdo;

    public function __construct($host,$user,$password,$database){

        $this->begin($host,$user,$password,$database);

    }

    public function begin($host,$user,$password,$database){
        
        $connection="mysql:host=".$host.";dbname=".$database;

        try{

            $this->pdo= new PDO($connection,$user,$password);

        }
        
        catch(Exception $e){        

            die($e);

        }
      
    }

    /*********************************************************************************/



    /*
    pdo object turns null
    */
    public function end(){
        
        $this->pdo=null;
        
    }

    /*
    validates username and password
    returns 2 when both are correct
    returns 1 when the user exists but the password is incorrect
    returns 0 when the user does not exist
    */

    public function validate_password($table,$user_col,$password_col,$user,$password){
        
        //prepared query for validation
        try{
        
            $user_query="SELECT ".$user_col." FROM ".$table." WHERE ".$user_col." = ?";
            $user_params = array($user);
            $user_result=$this->pdo->prepare($user_query);
            $user_result->execute($user_params);

            if($user_value=$user_result->fetch(PDO::FETCH_ASSOC)){

                //validation of user 
                if($user_value[$user_col]==$user){
                
                    //password query after validation of user
                    $password_query="SELECT ".$password_col." FROM ".$table." WHERE ".$user_col." = ?";
                    $password_result=$this->pdo->prepare($password_query);
                    $password_result->execute($user_params);
                
                    // if we have result
                    if($password_value=$password_result->fetch(PDO::FETCH_ASSOC)){
                    
                        //
                        if($password_value[$password_col]==$password){

                            //both password and user are correct
                            return 2;

                        }

                        else{

                            //only user is correct
                            return 1;

                        }
                
                    }

                
                    // if no password result then we have 1
                    else{
                    
                        return 1;
                
                    }
                }

                // when user does no exist the result is 0
                else{
                    return 0;
                }

            }

            // if we dont have result in query, the final result will be 
            else{
                return 0;
            }

        }
        catch(Exception $e){
            die($e);
        }
    }

    /*********************************************************************************/

    /*
    insert data associative array matrix inside a table
    $data = array(
        [0]=>array(["col0"]=>val0,["col1"]=>val1,["col2"]=>val2),
        [1]=>array(["col0"]=>val0,["col1"]=>val1,["col2"]=>val2),
        [2]=>array(["col0"]=>val0,["col1"]=>val1,["col2"]=>val2));
    */
    public function insert_block($table,$data){
        
        try{
    
            foreach ($data as $i => $line) {
        
                $columns=implode(", ",array_keys($line));
                $values=implode("', '",array_values($line));
                $sql="INSERT INTO ".$table."(".$columns.")"." VALUES("."'".$values."'".");";
                $this->pdo->query($sql);
                
            }
        }
        
        catch(Exception $e){
            
            die($e);
            
        }
    }

    /*************************************************************************************/
    
    /*
    insert data associative array single line inside a table
    $data: [["col0"]=>"value0",["col1"]=>"value1",["col2"]=>"value2"];
    $table: "Table";
    */
    public function insert_line($table,$data){
        $columns=implode(", ",array_keys($data));
    
        $values=implode("', '",array_values($data));
        $sql="INSERT INTO ".$table."(".$columns.")"." VALUES("."'".$values."'".");";
        try{
            $this->pdo->query($sql);
            
        }
        
        catch(Exception $e){
            die($e);
        }
    }

    /***************************************************************************************/

    /*
    updates data
    */
    public function update($table,$data,$targets){
        $changes = array();
        foreach ($data as $key => $value) {

            $change = $key." = '".$value."'";
            $changes[]=$change;
        }
        $changes = implode(", ",$changes);

        try{
        
            $sql = "UPDATE ".$table." SET ".$changes." WHERE ".$targets;
            $this->pdo->query($sql);
        }

        catch(Exception $e){
            die($e);
        }
    }

    /********************************************************************************/

    /*
    select from table
    */
    public function select($table,$cols,$targets,$order,$type){
        
        $field_pack=implode(", ",$cols);    

        $sql="SELECT ".$field_pack." FROM ".$table." WHERE ".$targets." ORDER BY ".$order;

        try{
            
            switch($type){
            //
            case "assoc":
                $result=$this->pdo->query($sql,PDO::FETCH_ASSOC);
                $table=[];
                foreach($result as $row){
                            
                    $line=[];
                    foreach($row as $key=>$value){            
            
                        $line[$key]=$value;
        
                    }
                
                    $table[]=$line;

                }
                    
                return $table;
        
            break;
            //
            case "mixed":

                $result=$this->pdo->query($sql,PDO::FETCH_ASSOC);
                $table=[];
                $body=[];
                $head=[];
                $h_s=false;

                foreach($result as $i=>$row){
                            
                    $line=[];

                    if(!$h_s){
                        foreach($row as $key=>$value){            
                            $head[]=$key;
    
                        }
                        $h_s=true;
                    }

                    else {
                    }

                    $line=[];

                    foreach($row as $key=>$value){            
                        $line[]=$value;
                    }

                    $body[]=$line;
                }

                $table['head']=$head;
                $table['body']=$body;
                    
                return $table;

            break;
            //
            default:

                $result=$this->pdo->query($sql,PDO::FETCH_ASSOC);
                $table=[];

                foreach($result as $row){
                            
                    $line=[];
                    foreach($row as $key=>$value){            
            
                        $line[$key]=$value;
        
                    }
                
                    $table[]=$line;
                }
                    
                return $table;

            }

        }
        catch(Exception $e){
            die($e);
            return null;
        }
    }

    /*********************************************************************************/


    /*
    DELETE FROM Table
    table   : table to change
    target  : conditions
    */
    public function delete($table,$target){
        
        $sql="DELETE FROM ".$table." WHERE ".$target;
            
        try{    
            $this->pdo->query($sql);
        }

        catch(Exception $e){
            die($e);
        }
    }
}
?>

