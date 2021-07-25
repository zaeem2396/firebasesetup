<?php
class Firebase_model extends CI_Model {
    function getAllData () {
        $db = firestore();
        $data = $db->collection('users')->documents();
        return $data;
    }
}
?>