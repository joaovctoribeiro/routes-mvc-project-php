<?php

	/**
	 * Classe controladora da Página Sobre.
	 * 
	 * About Page Controller Class.
	 */

	Class aboutController {

		/**
		 * Médoto da Página responsavel por carregar o
		 * arquivo da Página.
		 * 
		 * Page method responsible for loading the Page file.
		 */ 

		public function index() {

			require 'Views/about.php';

		}

	}