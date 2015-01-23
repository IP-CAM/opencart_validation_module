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

        /*if ($this->request->server['REQUEST_METHOD'] == 'POST') {

            $this->model_setting_setting->editSetting('user_verify', $this->request->post);



        }*/

    }
    public function send_validation(){
        $this->load->model('checkout/user_validation');
        $this->send_validation(1,'');
    }

}