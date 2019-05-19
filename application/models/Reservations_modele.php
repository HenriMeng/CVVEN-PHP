<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of reservations_modele
 *
 * @author CHINOISERIZ
 */
class Reservations_modele extends CI_Model {
    /* Database Loader */

    public function __construct() {
        $this->load->database();
        $this->load->model('profil_modele');
    }

    /**
     * table created from a database query result
     */
    public function getReservationsClient() {
        $idclient = $this->getId($this->session->userdata('username'));
        $query = $this->db->query("SELECT * FROM reservation JOIN client ON client.idclient = reservation.idclient WHERE reservation.idclient ='" . $idclient . "'");
        return $query->result_array();
    }

    /**
     * table created from a database query result
     */
    public function getReservationsAdmin() {
        $query = $this->db->query("SELECT idreserv, user_identifiant, datearrivee, datedepart, nbpersonnes, menage, etatreservation FROM reservation JOIN client ON client.idclient = reservation.idclient");
        return $query->result_array();
    }

    /**
     * table created from a database query result
     */
    public function getReservations() {
        $query = $this->db->get("reservation");
        return $query->result_array();
    }

    /**
     * Récupère l'idclient
     * @param type $session
     * @return type
     */
    public function getId($session) {
        $query = $this->db->query("SELECT idclient FROM client WHERE user_identifiant = '" . $session . "'");
        $reservation = $query->result_array();


        foreach ($reservation as $reservation) {
            return $reservation["idclient"];
        }
    }

    /**
     * modifie la base de données à partir d'une vue
     * @return type
     */
    public function setReservation() {
        $this->load->helper('url');

        $data = array(
            'datearrivee' => $this->input->post('datearrivee'),
            'datedepart' => $this->input->post('datedepart'),
            'nbpersonnes' => $this->input->post('nbpersonnes'),
            'menage' => $this->input->post('menage'),
            'etatreservation' => 'En attente',
            'idclient' => $this->getId($this->session->userdata('username'))
        );

        return $this->db->insert('reservation', $data);
    }

    public function updateReservationOn($num) {
        $this->db->set('etatreservation', 'Validée');
        $this->db->where('idreserv', $num);
        return $this->db->update('reservation');
    }
    public function updateReservationOff($num) {
        $this->db->set('etatreservation', 'En attente');
        $this->db->where('idreserv', $num);
        return $this->db->update('reservation');
    }
    public function DeleteUser($num) {
        $this->db->where('idclient', $num);
        return $this->db->delete('client');

    }

}
