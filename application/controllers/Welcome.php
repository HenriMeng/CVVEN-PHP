<?php

/**
 * Contrôleur -> login, inscription
 */
class Welcome extends CI_Controller {

    /**
     * Constructeur
     * dépendances
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('Welcome_modele');
        $this->load->model('profil_modele');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->library('table');
        $this->load->library('form_validation');
    }

    // <editor-fold defaultstate="collapsed" desc="display pages">
    /**
     * Charge une vue 'login'
     * @param type $name
     */
    public function displayLogin() {
        $this->load->view('authentification/login');
    }

    /**
     * Charge une vue inscription
     */
    public function displayInscription() {
        $this->load->view('authentification/inscription/inscription');
    }

    /**
     * Charge une vue inscription avec une erreur
     * @param type $error
     */
    public function displayInscriptionError($error) {
        $data['error'] = $error;
        $this->load->view('authentification/inscription/inscriptionError', $data);
    }

    // </editor-fold>

    /**
     * Charge la page de connexion
     * Formulaire validation
     * Vérification database <-> user
     * Création d'une session
     */
    public function index() {
        // conditions de remplissage
        $this->form_validation->set_rules('user_identifiant', 'Identifiant', 'required');
        $this->form_validation->set_rules('user_mdp', 'Mot de passe', 'required');

        if ($this->form_validation->run() !== FALSE) {  // Conditions de remplissage SUCCESS
            // Vérification, user <-> db
            $res = $this->Welcome_modele->verify_user(
                    $this->input->post('user_identifiant'), $this->input->post('user_mdp')
            );

            if ($res == true) {  // User connu SUCCESS
                $data['client'] = $this->Welcome_modele->afficher();

                // Création des sessions + ADMIN
                if ($this->profil_modele->getAdmin($this->input->post('user_identifiant')) === 't') {
                    $this->session->set_userdata('access', 'ok');
                    $this->session->set_userdata('admin', 'ok');
                    $this->session->set_userdata('username', $this->input->post('user_identifiant'));
                    $this->load->view('/admin/accueilAdmin', $data);
                } else {
                    $this->session->set_userdata('access', 'ok');
                    $this->session->set_userdata('admin', 'no');
                    $this->session->set_userdata('username', $this->input->post('user_identifiant'));
                    $this->load->view('accueil', $data);
                }

            } else {  // User n'est pas connu ERROR
                $data['result'] = 'false';
                $this->load->view('authentification/login', $data);
            }
        } else {  // Conditions de remplissage ERROR
            $data['result'] = 'none';
            $this->load->view('authentification/login', $data);
        }
    }

    /**
     * Charge la page d'inscription
     * Formulaire validation
     * Vérification database <-> user_info
     * Création d'un user -> database
     */
    public function doInscription() {
        // condition de remplissage
        $this->form_validation->set_rules('user_identifiant', 'Identifiant', 'required');
        $this->form_validation->set_rules('user_mdp', 'Mot de passe', 'required');
        $this->form_validation->set_rules('confirm_user_mdp', 'Confirmation mot de passe', 'required');

        if ($this->form_validation->run() !== FALSE) {  // condition de remplissage SUCCESS
            // Vérification doublon identifiant
            $res = $this->Welcome_modele->verify_user_name(
                    $this->input->post('user_name')
            );

            if ($res == false) {  // Vérification doublon identifiant SUCCESS
                if ($this->input->post('confirm_user_mdp') == $this->input->post('user_mdp')) {  // Vérification mots de passe identiques SUCCESS
                    $this->Welcome_modele->setClient();
                    $data['result'] = 'none';
                    $this->load->view('authentification/login', $data);
                } else {  // Vérification mots de passe identiques ERROR
                    $data['result'] = 'error2';
                    $this->load->view('authentification/inscription', $data);
                }
            } else {  // Vérification doublon identifiant ERROR
                $data['result'] = 'error';
                $this->load->view('authentification/inscription', $data);
            }
        } else {  // condition de remplissage ERROR
            $data['result'] = 'none';
            $this->load->view('authentification/inscription', $data);
        }
    }

}
