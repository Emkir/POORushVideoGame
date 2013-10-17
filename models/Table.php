<?php

abstract class Table
{
    protected $tableName;
    protected $primaryKey;
    protected $fields;

    public function __construct()
    {
        if (!empty($this->tableName))
            $this->detectFields();
        else
            die('Table: table name is required');
    }

    private function detectFields()
    {
        $data = myFetchAllAssoc("SHOW COLUMNS FROM `".$this->tableName."`");

        foreach($data AS $field)
        {
            $this->fields[$field['Field']] = $field;

            if($field['Key'] == 'PRI')
            {
                $this->primaryKey = $field['Field'];
            }
        }
    }

    public function delete()
    {
        if (empty($this->primaryKey) || empty($this->tableName))
            die('cannot uset class Table without tablename and primary key setted');

        if ($this->{$this->primaryKey} === null)
            die('Trying to delete without having a primary key value');

        $query = "delete from `".$this->tableName."`".
            "where `".$this->primaryKey."`='".$this->{$this->primaryKey}."'";

        myQuery($query);
    }

    public function save()
    {
        $pk = $this->primaryKey;

        if($this->$pk != null) // UPDATE
        {
            $nbFields = count($this->fields);
            $counter = 0;

            $query = "UPDATE `".$this->tableName."` SET";

            foreach($this->fields AS $field)
            {
                $query .= " `".$field['Field']."` = '".myEscape($this->$field['Field'])."'";

                if($counter < ($nbFields - 1))
                {
                    $query .= ",";
                }

                $counter++;
            }

            $query .= "WHERE `".$pk."` = '".intval($this->$pk)."'";
            myQuery($query);
        }
        else // INSERT
        {
            $nbFields = count($this->fields);
            $counter = 0;

            $query = "INSERT INTO `".$this->tableName."` (";

            foreach($this->fields AS $field)
            {
                $query .= $field['Field'];

                if($counter < ($nbFields - 1))
                {
                    $query .= ',';
                }

                $counter++;
            }

            $query .= ") VALUES (";

            $counter = 0;

            foreach($this->fields AS $field)
            {
                $query .="'".myEscape($this->$field['Field'])."'";

                if($counter < ($nbFields -1))
                {
                    $query .= ",";
                }

                $counter++;
            }
            $query .= ")";

            myQuery($query);
            $insert_id = myLastInsertId();
            $this->$pk = $insert_id;
        }
    }

    public function hydrate()
    {
        if (empty($this->{$this->primaryKey}))
            die (get_called_class().': cannot hydrate without primary key value');

        $q = "SELECT * FROM `".$this->tableName."` WHERE `".$this->primaryKey."` = ".intval($this->{$this->primaryKey});
        $data = myFetchAssoc($q);

        foreach ($this->fields as $field)
        {
            $this->$field['Field'] = $data[$field['Field']];
        }
    }
}

?>