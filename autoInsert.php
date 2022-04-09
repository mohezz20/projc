<?php

class autoInsert {

    var $db_conn;
    public $err = array();

    function iConnect($user, $pass, $host = 'localhost', $encod = "utf8") {
        if ($this->db_conn = mysqli_connect($host, $user, $pass)) {
            mysqli_set_charset($this->db_conn, $encod);
            return true;
        } else {
            //echo mysqli_error($this->db_conn);
            $this->err[] = mysqli_error_list($this->db_conn);
            return false;
        }
    }

    function iSelect($db) {
        if (mysqli_select_db($this->db_conn, $db)) {
            return true;
        } else {
            //echo mysqli_error($this->db_conn);
            $this->err[] = mysqli_error_list($this->db_conn);
            return false;
        }
    }

    function iInsert($table, $postData = array(), $isfiles = array()) {
        $q = "DESC $table";
        $q = mysqli_query($this->db_conn, $q);

        $getFields = array();

        while ($field = mysqli_fetch_array($q)) {
            $getFields[sizeof($getFields)] = $field['Field'];
        }

        $fields = "";
        $values = "";

        if (sizeof($getFields) > 0) {
            foreach ($getFields as $k) {
                if (isset($postData[$k])) {
                    if (!in_array($k, $isfiles)) {
                        $postData[$k] = mysqli_real_escape_string($this->db_conn, $postData[$k]);
                    }

                    $fields .= "`$k`, ";
                    $values .= "'$postData[$k]', ";
                }
            }

            $fields = substr($fields, 0, strlen($fields) - 2);
            $values = substr($values, 0, strlen($values) - 2);

            $insert = "INSERT INTO $table ($fields) VALUES ($values)";

            if (mysqli_query($this->db_conn, $insert)) {
                return mysqli_insert_id($this->db_conn);
            } else {
                //echo mysqli_error($this->db_conn);
                $this->err[] = mysqli_error_list($this->db_conn);
                return false;
            }
        } else {
            $this->err[] =' autoInsert insert function can\'t  find any field ';
            return false;
        }
    }

    function iUpdate($table, $postData = array(), $conditions = array()) {
        $q = "DESC $table";
        $q = mysqli_query($this->db_conn, $q);

        $getFields = array();

        while ($field = mysqli_fetch_array($q)) {
            $getFields[sizeof($getFields)] = $field['Field'];
        }

        $values = "";
        $conds = "";

        if (sizeof($getFields) > 0) {
            foreach ($getFields as $k) {
                if (isset($postData[$k])) {
                    $postData[$k] = mysqli_real_escape_string($this->db_conn, htmlspecialchars($postData[$k]));

                    $values .= "`$k` = '$postData[$k]', ";
                }
            }

            $values = substr($values, 0, strlen($values) - 2);
            if (is_array($conditions)) {
                foreach ($conditions as $k => $v) {
                    $v = mysqli_real_escape_string($this->db_conn, htmlspecialchars($v));

                    $condsarr [] = "`$k` = '$v'";
                }
                $conds = implode(" and ", $condsarr);
            } else {
                $conds=  $conditions;
                //$this->err= 'conditions must passed as array  ';
            }
            $update = "UPDATE $table SET $values WHERE  $conds";
            //echo "$update"."\n";

            if (mysqli_query($this->db_conn, $update)) {
                return mysqli_affected_rows($this->db_conn);
            } else {
                //echo mysqli_error($this->db_conn);
                $this->err[] = mysqli_error_list($this->db_conn);
                $this->err[]=$update;
                return false;
            }
        } else {
            $this->err[] =' autoInsert update function can\'t  find any field ';
            return false;
        }
    }

    function iDisconnect() {
        if (mysqli_close($this->db_conn)) {
            return true;
        } else {
            //echo mysqli_error($this->db_conn);
             $this->err[] = mysqli_error_list($this->db_conn);
            return false;
        }
    }

}

?>