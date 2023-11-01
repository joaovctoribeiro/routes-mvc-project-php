<?php

	/**
	 * Classe controladora da Página Contato.
	 * 
	 * Contact Page Controller Class.
	 */

	Class contactController {

		/**
		 * Médoto da Página responsavel por carregar o
		 * arquivo da Página.
		 * 
		 * Page method responsible for loading the Page file.
		 */ 

		public function index() {

			require 'Views/contact.php';

		}

	}