<?php


class MaillistController  extends CI_Controller
{
    public $module = 'maillist';

    public function index()
    {
        $this->load->model('maillist');
        $this->lang->load('modules/maillist');
        $this->load->helper('form');

        if ($this->input->post()) {

            $this->load->library('form_validation');
            $this->form_validation->set_rules('fullname', lang('maillist-validate-fullname'), 'required');
            $this->form_validation->set_rules('email', lang('maillist-validate-email'), 'required|valid_email');

            if ($this->form_validation->run() == true) {
                $success = $this->maillist->insert();

                if ($success) {
                    $this->site->setAlert('success', lang('maillist-success-message'));
                    redirect($this->input->server('HTTP_REFERER').'#maillist');
                }
            } else {
                $this->site->setAlert('danger', $this->form_validation->error_string('<div>&bull; ', '</div>'));
            }
        }

        redirect($this->input->server('HTTP_REFERER').'#maillist');
    }



} 