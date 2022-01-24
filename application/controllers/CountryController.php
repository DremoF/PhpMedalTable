<?php

namespace application\controllers;

use application\core\Controller;

class CountryController extends Controller
{
	public function getCountryAction()
	{
		if (isset($_POST["contryName"])) {
			$this->model->addCountry(htmlspecialchars($_POST["contryName"]));
		}
		$results = $this->model->getCountry();
		$vars = [
			'countrysList' => $results,
		];
		$this->view->render('Добавить страну', $vars);
	}

	public function dellCountryAction()
	{
		$this->model->deleteCountry($this->route['id']);
		$this->model->deleteCountryFromMedals($this->route['id']);
		return true;
	}
}
