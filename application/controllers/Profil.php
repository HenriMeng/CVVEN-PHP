<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of profil
 *
 * @author CHINOISERIZ
 */
class Profil extends CI_Controller {
    
    /* Loader */
    public function __construct() {
        parent::__construct();
        $this->load->model('profil_modele');
        $this->load->helper('url_helper');
        $this->load->library('table');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    
    
    /**
     * Affiche le profil
     */
    public function displayProfil($result){
        if($this->session->userdata('access') !== 'ok'){
            $this->session->sess_destroy();
            $data['result'] = 'none';
            $this->load->view('authentification/login', $data);
        } 
        else{
            $this->load->view('reservations/profil', $result);
        }
    }
    
    /**
     * Permet de modifier le password
     */
    public function setPassword(){           
        /* condition de remplissage */
        $this->form_validation->set_rules('user_password', 'Mot de passe', 'required');
        $this->form_validation->set_rules('new_user_password', 'Nouveau mot de passe', 'required');
        $this->form_validation->set_rules('new_confirm_user_password', 'Confirmation nouveau mot de passe', 'required');

        if ($this->form_validation->run() !== FALSE) {  // Conditions de remplissage SUCCESS

            if($this->profil_modele->getPassword($this->session->userdata('username')) == $this->input->post('user_password')){  // mdp = mdp_db SUCCESS
                
                if($this->input->post('new_confirm_user_password') == $this->input->post('new_user_password')){  // new_mdp = confirm_new_mdp SUCCESS
                    $this->profil_modele->setPassword($this->input->post('new_user_password'), $this->session->userdata('username'));
                    $this->session->set_userdata('userpassword', $this->input->post('new_user_password'));
                    $data['result'] = 'success';
                    $this->load->view('reservations/profil', $data);
                }
                else {  // new_mdp = confirm_new_mdp ERROR
                    $data['result'] = 'error2';
                    $this->load->view('reservations/profil', $data);
                }                 
            }
            else{  // mdp = mdp ERROR
                $data['result'] = 'error';
                $this->load->view('reservations/profil', $data);
            }
        }
        else {  // Conditions de remplissage ERROR
            $data['result'] = 'none';
            $this->load->view('reservations/profil', $data);
        }
    }
}
