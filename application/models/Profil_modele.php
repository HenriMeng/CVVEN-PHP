<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Profil_modele
 *
 * @author CHINOISERIZ
 */
class Profil_modele extends CI_Model {
    
    /* Database Loader */
    public function __construct() {
        $this->load->database();
    }   
    
    /**
     * Récupère le user_mdp
     * @param type $session
     * @return type
     */
    public function getPassword($session){
        $query = $this->db->query("SELECT user_mdp FROM client WHERE user_identifiant = '".$session."'");
        $reservationhenri = $query->result_array();
        
      
        foreach ($reservationhenri as $reservation){
            return $reservation["user_mdp"];
        }
    }    
    
    /**
     * Récupère le user_mdp
     * @param type $session
     * @return type
     */
    public function getAdmin($session){
        $query = $this->db->query("SELECT admin FROM client WHERE user_identifiant = '".$session."'");
        $reservationhenri = $query->result_array();
        
      
        foreach ($reservationhenri as $reservation){
            return $reservation["admin"];
        }
    }
    
    
    /**
     * Affiche les informations du clients
     * @return type
     */
    public function getClients(){
        $query = $this->db->query('SELECT * FROM client');
        return $query->result_array();
    }
    
    /**
     * Récupère l'idclient
     * @param type $session
     * @return type
     */
    public function getId($session){
        $query = $this->db->query("SELECT idclient FROM client WHERE user_identifiant = '".$session."'");
        $reservationhenri = $query->result_array();
      
        foreach ($reservationhenri as $reservation){
            return $reservation["idclient"];
        }
    }
    
    /**
     * Récupère le user_identifiant en string
     * @param type $session
     * @return type
     */
    public function getName($session){
        $query = $this->db->query("SELECT user_identifiant FROM client WHERE user_identifiant = '".$session."'");
        $reservationhenri = $query->result_array();
        
      
        foreach ($reservationhenri as $reservation){
            return $reservation["user_identifiant"];
        }
    }
    
    /**
     * Permet de modifier le mdp
     * @param type $new_password
     * @param type $session
     */
    public function setPassword($new_password){
        $query = $this->db->query("UPDATE client SET user_mdp = '".$new_password."' WHERE user_identifiant = '".$this->getName($this->session->userdata('username'))."'");
        return $query;
    }
    
    /**
     * Permet de vérifier si la session 'access' est toujours valide
     */
    public function verify_Session(){
        if($this->session->has_userdata('access') == TRUE){
            $this->load->view('authentification/inscription');
        }        
    }   
}
