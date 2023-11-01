<?php

	Class Core{

		public function __construct() {
			$this->run();
		}

		public function run() {

			/**
			 * Verificando se tem infos na URL.
			 * 
			 * Checking if there is information in the URL:
			 */

			$parametros = array();

			if(isset($_GET['page'])) {

				$url = $_GET['page'];

			}

			/**
			 * Se caso a condição abaixo for acionada, existem
			 * mais informações no dominio (URL):
			 * 
			 * exemplo: www.site.com/classe/função/parametro
			 * 
			 * 
			 * 
			 * If the following condition is triggered, there is more 
			 * information in the domain (URL):
			 * 
			 * Example: www.site.com/class/function/parameter
			 */



			/**
			 * Verificando se a URL não está vazia.
			 * 
			 * Verifying that the URL is not empty.
			 */

			if(!empty($url)) {

				$url = explode('/', $url);

				/*
					Verificando se ainda existem mais
					informações na URL:

					---------------------------------

					Checking to see if there are still more
					information in the URL:
				*/

				$controller = $url[0].'Controller';
				array_shift($url);

				/*
					Verificando se o usuário mandou
					uma função ou uma classe:

					---------------------------------

					Checking if the user has sent a function or a class:
				*/

				if(isset($url[0]) && !empty($url[0])) {

					$metodo = $url[0];
					array_shift($url);

				} else {

					$metodo = 'index';

				}

				/*
					Verificando se há parametros na URL:

					---------------------------------

					Checking for parameters in the URL:
				*/

				if(count($url) > 0) {

					$parametros = $url;

				}

				/*
					Caso a condição termine apenas nesse ELSE,
					quer dizer que não há nada além de:

					Exemplo: www.site.com

					---------------------------------

					If the condition ends only in this ELSE, it means that there is nothing more than:

					Example: www.site.com
				*/

			} else {

				$controller = 'homeController';
				$metodo	= 'index';

			}

			/**
			 * Verificando se o arquivo existe:
			 * 
			 * Checking if the file exists:
			 */

			$caminho = 'routes-mvc-project/Controllers/'.$controller.'php';

			if(!file_exists($caminho) && !method_exists($controller, $metodo)) {

				$controller = 'errorController';
				$metodo	= 'index';

			}

			$c = new $controller;

			call_user_func_array(array($c, $metodo), $parametros);
			
		}

	}