<?php

function DB($function,$obj,$arg1='',$arg2=''){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Transfer";
    global $conn;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
	switch($function){
		case 'find':
                    return FindObj($obj,$arg1);
                    break;
                case 'FindByParams':
                    return FindByParams($obj, $arg1, $arg2);
                    break;
	}
}

function FindObj($obj,$orderby){
    global $conn;
	$tablename = 'Transfer';

	$query = sprintf("SELECT * FROM Schools where ID='%s' ",
	$obj->getID());
	$result = $conn->query($query);
	$row = $result->fetch_assoc();
	
	return $obj->Populate($row);
}

function FindByParams($obj,$params, $orderby){
    global $conn;
    $objs = array();
    $fld = $params['fld'];
    $val = $params['val'];
    $fld2 = isset($params['fld2']) ? $params['fld2'] : "";
    $val2 = isset($params['val2']) ? $params['val2'] : "";
    $fld3 = isset($params['fld3']) ? $params['fld3'] : "";
    $val3 = isset($params['val3']) ? $params['val3'] : "";
    $opp = isset($params['opp']) ? $params['opp'] : "=";
    $opp2 = isset($params['opp2']) ? $params['opp2'] : "=";
    $opp3 = isset($params['opp3']) ? $params['opp3'] : "=";
    
    $tablename = get_class($obj);
    
    $query;
    
    if ($fld3 != ""){
        $query = sprintf("SELECT * FROM $tablename where $fld $opp '%s' AND $fld2 $opp2 '%s' AND $fld3 $opp3 '%s' order by $orderby; ",
        $conn->real_escape_string($val),$conn->real_escape_string($val2),$conn->real_escape_string($val3));
    }
    else if ($fld2 != ""){
        $query = sprintf("SELECT * FROM $tablename where $fld $opp '%s' AND $fld2 $opp2 '%s' order by $orderby; ",
        $conn->real_escape_string($val),$conn->real_escape_string($val2));
    }
    else{
        $query = sprintf("SELECT * FROM $tablename where $fld $opp '%s' order by $orderby; ",
        $conn->real_escape_string($val));
    }
    
    $result = $conn->query($query) or die("FindAllByParams $tablename $query <br />" . mysqli_error() );
	while ($row = $result->fetch_array(MYSQL_ASSOC))
	{
		$newobj = new $tablename;
		array_push($objs,$newobj->Populate($row));
	}
    //var_dump($objs);
    return $objs;
}

?>
