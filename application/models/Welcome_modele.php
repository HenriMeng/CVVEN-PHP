<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Welcome_modele
 *
 * @author CHINOISERIZ
 */
class Welcome_modele extends CI_Model {
    
    /**
     *  Database Loader 
     */
    public function __construct() {
        $this->load->database();
    }
      

    /**
     * Récupère une valeur et l'affiche
     * @return type
     */
    public function afficher() {
        $data = $this->input->post('user_name');
        $query = $this->db->query(
                "SELECT user_identifiant " .
                "FROM client " .
                "WHERE user_identifiant = '" . $data . "'"
        );
        return $query->result_array();
    }

    /**
     * Vérifie si l'utilisateur est connu dans la db
     * @param type $user_name
     * @param type $user_mdp
     * @return boolean
     */
    public function verify_user($user_name, $user_mdp) {
        $query = $this->db->query(
            "SELECT user_identifiant ".
            "FROM client ".
            "WHERE user_identifiant = '". $user_name. "' ".
            "AND user_mdp = '". $user_mdp. "'"
        );
        
        if($query->num_rows() > 0){
            // Success
            return true;          
        }
        else {
            // Error
            return false;
        }                    
    }
    
    
    /**
     * Vérifie si l'utilisateur est connu dans la db
     * @param type $user_name
     * @return boolean
     */
    public function verify_user_name($user_name) {
        $query = $this->db->query(
            "SELECT user_identifiant ".
            "FROM client ".
            "WHERE user_identifiant = '". $user_name. "'"         
        );
        
        if($query->num_rows() > 0){
            // Success
            return true;          
        }
        else {
            // Error
            return false;
        }                    
    }
    
    /**
     * modifie la base de données à partir d'une vue
     * @return type
     */
    public function setClient(){
        $this->load->helper('url');
        
        $data = array(
            'user_identifiant' => $this->input->post('user_identifiant'),
            'user_mdp' => $this->input->post('user_mdp'),
            'user_prenom' => $this->input->post('user_prenom'),
            'user_nom' => $this->input->post('user_nom'),
            'user_email' => $this->input->post('user_email'),
            'user_adresse' => $this->input->post('user_adresse'),
            'user_datenaissance' => $this->input->post('user_datenaissance'),
            'user_tel' => $this->input->post('user_tel'),
            'user_sexe' => $this->input->post('user_sexe'),
            'admin' => 'no',
        );
        
        return $this->db->insert('client', $data);
    }
}
