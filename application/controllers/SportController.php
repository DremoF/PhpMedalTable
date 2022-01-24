<?php

namespace application\controllers;

use application\core\Controller;

class SportController extends Controller
{
	public function getSportAction()
	{
		if (isset($_POST["sportName"])) {
			$this->model->addsport(htmlspecialchars($_POST["sportName"]));
		}
		$results = $this->model->getSport();
		$vars = [
			'sportsList' => $results,
		];
		$this->view->render('Добавить вид спорта', $vars);
	}

	public function delSportAction()
	{
		$this->model->deleteSport($this->route['id']);
		$this->model->deleteSportFromMedals($this->route['id']);
		return true;
	}
}
