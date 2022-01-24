<?php

namespace application\controllers;

use application\core\Controller;

class MedalController extends Controller
{
	public function getMedalStatsAction()
	{
	   	if (
			isset($_POST['medal']) 
		   	and isset($_POST['country']) 
		   	and isset($_POST['sport']) 
		   	and isset($_POST['athlete'])
		) {	
			$this->model->addMedals(htmlspecialchars($_POST), rand(1,100000));
		}
		$medals = $this->model->getMedalStats();
		$countrys = $this->model->getCountry();
		$sports = $this->model->getSport();
		$athletes = $this->model->getAthlete();
		$typeMedals = $this->model->getTypeMedal();
		$vars = [
			'medals' => $medals,
			'countrys' => $countrys,
			'sports' => $sports,
			'athletes' => $athletes,
			'typeMedals' => $typeMedals

		];
		$this->view->render('Медали', $vars);
	}

	public function dellMedalStatsAction()
	{
		$this->model->deleteMedalFromMedals($this->route['id']);
		return true;
	}
}