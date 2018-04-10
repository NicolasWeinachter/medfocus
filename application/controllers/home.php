<?php

class home extends CI_Controller
{
	private $titre_defaut;
	
	public function __construct()
	{
		//	Obligatoire
		parent::__construct();
		
		$this->titre_defaut = 'MedFocus';
	}

	public function index()
	{
		$this->homepage();
	}
	
	public function homepage()
	{
        // Chargement des Helpers
        $this->load->helper('url');

		$session_id = $this->session->userdata('session_id');
/*
		// Disconnection
        if ($this->request->getQuery('user') == 'logout') {
			$this->session->sess_destroy();
            /*return $this->redirect([
                'controller' => '',
                'action' => '',
                '?' => ['session' => 'disconnect']
			]);//
			redirect();
        }
        
        if ($this->request->is('post')) {
            //Bouton Se connecter Utilisateur
            if ($this->request->getData('form_type') == 'login_user') {
                return $this->redirect([
                    'controller' => 'UserController',
                    'action' => 'user_login',
                    '?' => ['from' => 'homepage']
                ]);
			}
			//Bouton Se connecter Professionnel
            if ($this->request->getData('form_type') == 'login_pro') {
                return $this->redirect([
                    'controller' => 'ProController',
                    'action' => 'pro_login',
                    '?' => ['from' => 'homepage']
                ]);
            }
            //Bouton Créer un compte Utilisateur
            if ($this->request->getData('form_type') == 'signup_user') {
                return $this->redirect([
                    'controller' => 'UserController',
                    'action' => 'user_signup',
                    '?' => ['from' => 'homepage']
                ]);
			}	
			//Bouton Créer un compte Professionnel
            if ($this->request->getData('form_type') == 'signup_pro') {
                return $this->redirect([
                    'controller' => 'ProController',
                    'action' => 'pro_signup',
                    '?' => ['from' => 'homepage']
                ]);
            }
        }
	*/	
		$this->load->view('home/homepage');
	}

	public function otherpage()
	{
		$data = array();
		$data['pseudo'] = 'Arthur';
		$data['email'] = 'email@ndd.fr';
		$data['en_ligne'] = true;
		
		//	Maintenant, les variables sont disponibles dans la vue
		$this->load->view('home/otherpage', $data, false);
	}
}