<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 22.01.2015
 * Time: 7:17
 */

class ControllerModuleUserVerify extends Controller {
    public function index(){
        $this->load->language('module/user_verify');

        $data['maxcount'] = $this->config->get('user_verify_maxcount');
        print_r($data['maxcount']);

        print_r("Hello Word");
    }

}