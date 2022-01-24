<?php

namespace application\controllers;

use application\core\Controller;

class AthleteController extends Controller
{
	public function getAthleteAction()
	{
		if (isset($_POST["athleteName"])) {
			$this->model->addAthlete(htmlspecialchars($_POST["athleteName"]));
		}
		$results = $this->model->getAthlete();
		$vars = [
			'athletesList' => $results,
		];
		$this->view->render('Добавить атлета', $vars);
	}

	public function dellAthleteAction()
	{
		$this->model->deleteAthlete($this->route['id']);
		$this->model->deleteAthleteFromMedals($this->route['id']);
		return true;
	}
}
