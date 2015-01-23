<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.01.2015
 * Time: 17:28
 */

class ModelCheckoutUserValidation extends Model{
    public function addValidation($user_id,$data){
        print_r('Model!');
        //$this->db->query("INSERT INTO " . DB_PREFIX . "customer_validation SET customer_id = '" . (int)$user_id .
        //                                                "', image = ".$data);
    }

} 