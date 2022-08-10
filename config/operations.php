<?php
require_once('DBconfing.php');
class operations extends dbconfig {
    public function Store_Record() {
        if(isset($_POST['btn_submit']))
        {
         echo "working";
        }
    }
}

?>