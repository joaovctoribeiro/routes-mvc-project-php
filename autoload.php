<?php

	/*
		spl_autoload_register: Captura uma instancia da Classe.

		spl_autoload_register: Captures an instance of the Class.
	*/

	spl_autoload_register(function($fileName) {

		/*
			Verificando onde existem Classes.

			Checking where Classes exist.
		*/

		if(file_exists('Controllers/'.$fileName.'.php')) {

			require 'Controllers/'.$fileName.'.php';

		} elseif (file_exists('Core/'.$fileName.'.php')) {

			require 'Core/'.$fileName.'.php';

		} elseif(file_exists('Models/'.$fileName.'.php')) {

			require 'Models/'.$fileName.'.php';

		} elseif(file_exists('Utils/'.$fileName.'.php')) {

			require 'Utils/'.$fileName.'.php';
			
		}

	});