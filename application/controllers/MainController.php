<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller
{
	public function indexAction()
	{
		if (empty($_GET)) {
			$results = $this->model->getMainCountrysName('gold desc');
			$vars = [
				'medalsList' => $results,
			];
		} else {
			$results = $this->model->getMainCountrysName($_GET['column'] . ' ' . $_GET['order']);
			$vars = [
				'medalsList' => $results,
			];
		}
		$this->view->render('Главная страница', $vars);
	}
}
