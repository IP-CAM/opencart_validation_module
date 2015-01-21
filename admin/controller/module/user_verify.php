<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.01.2015
 * Time: 13:24
 */

class ControllerModuleUserVerify extends Controller {

    public function index(){
        $this->load->language('module/user_verify');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('setting/setting');




        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {

            $this->model_setting_setting->editSetting('user_verify', $this->request->post);
            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'));

        }

        if (isset($this->request->post['user_verify_status'])) {
            $data['status'] = $this->request->post['user_verify_status'];
        } else {
            $data['status'] = $this->config->get('user_verify_status');
        }

        if (isset($this->request->post['user_verify_maxcount'])) {
            $data['maxcount'] = $this->request->post['user_verify_maxcount'];
        } else{
            $data['maxcount'] = $this->config->get('user_verify_maxcount');
        }


        if (isset($this->error['maxcount'])) {
            $data['error_maxcount'] = $this->error['maxcount'];
        } else {
            $data['error_maxcount'] = '';
        }







        $data['action'] = $this->url->link('module/user_verify', 'token=' . $this->session->data['token'], 'SSL');
        $data['cancel'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL');

        $data['heading_title'] = $this->language->get('heading_title');
        $data['text_edit'] = $this->language->get('text_edit');
        $data['text_enabled'] = $this->language->get('text_enabled');
        $data['text_disabled'] = $this->language->get('text_disabled');
        $data['entry_status'] = $this->language->get('entry_status');
        $data['button_save'] = $this->language->get('button_save');
        $data['button_cancel'] = $this->language->get('button_cancel');
        $data['entry_maxcount'] = $this->language->get('entry_maxcount');

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        $this->response->setOutput($this->load->view('module/user_verify.tpl', $data));
    }
    protected  function validate(){

        if ($this->request->post['user_verify_maxcount']<1) {
            $this->error['maxcount'] = $this->language->get('error_maxcount');
        }

        return !$this->error;

    }
} 