<?php

	/**
	 * Classe controladora da Página de Erro.
	 * 
	 * Error Page Controller Class.
	 */

	Class errorController {

		/**
		 * Médoto da Página responsavel por carregar o
		 * arquivo da Página.
		 * 
		 * Page method responsible for loading the Page file.
		 */ 

		public function index() {

			require 'Views/404.php';

		}

	}