<?php

	/**
	 * Classe controladora da Página Home.
	 * 
	 * Home Page Controller Class.
	 */

	Class homeController {

		/**
		 * Médoto da Página responsavel por carregar o
		 * arquivo da Página.
		 * 
		 * Page method responsible for loading the Page file.
		 */ 

		public function index() {

			require 'Views/home.php';

		}

	}