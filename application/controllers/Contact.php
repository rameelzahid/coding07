<?php

/*
 * Your Header Here
 */

defined('BASEPATH') OR exit('Forbidden');

class Contact extends CI_Controller {

    function __construct() {
        parent::__construct();

        // Load form validation library
        $this->load->library('form_validation');
    }

    public function index() {
        /*
         * This is just a stub to see verify this controller works.
         * Erase this comment and complete this controller to make
         * a fully functional contact form.
         * 
         * 
         * The example given in the instructions does not load the view
         * in this controller, but it should be loaded in this controller.
         */
        $data['title'] = "Contact";
        $this->load->view('templates/header', $data);
        $this->load->view('contact');
        $this->load->view('templates/footer');

        /*
         * add the code for form validation and submission and redirect here
         * 
         * remove this comment when you code in this controller
         */
        
        /*
         * When you form submits successfully you can either redirect the user
         * to a success or error page, or reload this page with an appropriate
         * message (sent or error). The example given reloads the form
         * with a message (see the last line in the index() method of the
         * example controller).
         * 
         * * remove this comment when you code in this controller
         */
        
    }

}
