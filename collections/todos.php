<?php

class todos extends database\collection
{
    protected static $modelName = 'todo';

    //This is the function to write to find tasks by user ID for listing on their homepage.
    //Don't forget to return the record set see findAll in the collection class
    //public static  function findTasksbyID($userid) {

           /*     echo 'test';
            $tableName = get_called_class();
            $sql = 'SELECT * FROM ' . $tableName . ' WHERE ownerid = '. $userid;

            //grab the only record for find one and return as an object
            $recordsSet = self::getResults($sql, $email);

            if (is_null($recordsSet)) {
                return FALSE;
            } else {
                echo $recordsSet;
            }*/


            public function findTasksbyID($userid) {
            $tableName = get_called_class();
            $sql = 'SELECT * FROM ' . $tableName . ' WHERE ownerid = ? ';

            return self::getResults($sql, $userid);
        }






}

?>
