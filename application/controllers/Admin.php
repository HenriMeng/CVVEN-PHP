<?php

/**
 * Contrôleur : affichage/faire réservation
 * @author CHINOISERIZ
 */
class Admin extends CI_Controller {

    /**
     * Constructeur
     * dépendances
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('reservations_modele'); 
        $this->load->model('profil_modele');
        $this->load->helper('url_helper');
        $this->load->library('table');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
       
    // <editor-fold defaultstate="collapsed" desc="display pages">    
    /**
     * Affiche les réservations
     */
    public function displayReservations(){ 
        if($this->session->userdata('access') !== 'ok'){
            $this->session->sess_destroy();
            $data['result'] = 'none';
            $this->load->view('authentification/login', $data);
        } 
        else{
            /* Récupère les réservations via le modèle dans une variable */
            $data['reservationhenri'] = $this->reservations_modele->getReservationsAdmin();
            $this->load->view('admin/reservationsAdmin', $data);
        }        
    }
    
    /**
     * Affiche les réservations
     */
    public function displayClients(){ 
        if($this->session->userdata('access') !== 'ok'){
            $this->session->sess_destroy();
            $data['result'] = 'none';
            $this->load->view('authentification/login', $data);
        } 
        else{
            /* Récupère les réservations via le modèle dans une variable */
            $data['clients'] = $this->profil_modele->getClients();
            $this->load->view('admin/clientsAdmin', $data);
        }        
    }
    
    public function displayAccueil(){
        if($this->session->userdata('access') !== 'ok'){
            $this->session->sess_destroy();
            $data['result'] = 'none';
            $this->load->view('authentification/login', $data);
        } 
        else{
            $this->load->view('admin/accueilAdmin');
        }
    }
    // </editor-fold>
    
    /**
     * Formulaire de réservation
     * renvoie vers affichage réservation
     */
    public function doReservation(){   
        if($this->session->userdata('access') !== 'ok'){
            $this->session->sess_destroy();
            $data['result'] = 'none';
            $this->load->view('authentification/login', $data);
        } 
        else{
            // conditions de validation
            $this->form_validation->set_rules('datearrivee', 'Datearrivee', 'required');
            $this->form_validation->set_rules('datedepart', 'Datedepart', 'required');
            $this->form_validation->set_rules('nbpersonnes', 'Nbpersonnes', 'required');
            $this->form_validation->set_rules('menage', 'Menage', 'required');

            if ($this->form_validation->run() == FALSE)  // conditions de validation SUCCES
            {
                $this->load->view('reservations/reserver');            
            }
            else  // conditions de validation ERROR
            {
                $this->reservations_modele->setReservation();
                $this->displayReservations();                    
            }
        }                
    }  
    
    public function UpdateEtatOn($num){
        $this->reservations_modele->updateReservationOn($num);
        $this->displayReservations();
    }
    public function UpdateEtatOff($num){
        $this->reservations_modele->updateReservationOff($num);
        $this->displayReservations();
    }
    
    /**
     * PROBLEME : FOREIGN KEY
     * @param type $num
     */
    public function DeleteUser($num){
        $this->reservations_modele->DeleteUser($num);
        $this->displayReservations();
    }
    
   
}
?>