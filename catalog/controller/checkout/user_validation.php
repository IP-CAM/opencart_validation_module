<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.01.2015
 * Time: 14:17
 */

class ControllerCheckoutUserValidation extends Controller{
    public function index(){
        $this->load->language('checkout/user_validation');
        $data['heading_title'] = $this->language->get('heading_title');
        $data['text_loading'] = $this->language->get('text_loading');
        $data['entry_coupon'] = $this->language->get('entry_coupon');
        $data['button_coupon'] = $this->language->get('button_coupon');
        $data['entry_imagefile']= $this->language->get('entry_imagefile');
        $data['send_imagefile'] = $this->language->get('send_imagefile');
        $data['text_loading'] = $this->language->get('text_loading');
        $data['button_upload'] =$this->language->get('button_upload');


        $data['button_image_add'] = $this->language->get('button_image_add');

        if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/checkout/user_validation.tpl')) {
           return $this->load->view($this->config->get('config_template') . '/template/checkout/user_validation.tpl', $data);
        } else {
            return $this->load->view('default/template/checkout/user_validation.tpl', $data);
        }
    }
    public function add(){
        $this->load->model('checkout/user_validation');
        $this->load->model('tool/image');

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {


            $this->session->data['success'] = $this->language->get('text_success');


        }
    }
} 