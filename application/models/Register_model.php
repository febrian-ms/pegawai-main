<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_model extends CI_Model
{
    // Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Method to insert data into the database
    public function register($data)
    {
        // Insert data into the 'karyawan' table
        if ($this->db->insert('user', $data)) {
            // Return true if insert was successful
            return true;
        } else {
            // Log the error if insert failed
            log_message('error', 'Database insert failed: ' . $this->db->last_query());
            return false;
        }
    }
    
    // Optional: Method to get all karyawan data
    public function get_all_karyawan()
    {
        $query = $this->db->get('user');
        return $query->result_array();
    }

    // Optional: Method to get a specific karyawan by ID
    public function get_karyawan_by_id($id)
    {
        $query = $this->db->get_where('user', array('id' => $id));
        return $query->row_array();
    }

    // Optional: Method to update a specific karyawan by ID
    public function update_karyawan($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }

    // Optional: Method to delete a specific karyawan by ID
    public function delete_karyawan($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }
}
