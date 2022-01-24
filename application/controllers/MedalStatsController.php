<?php

namespace application\controllers;

use application\core\Controller;

class MedalStatsController extends Controller
{
	public function getMedalStatsAction()
	{
		if (htmlspecialchars($this->route['im']) === '4') {   
			$results = $this->model->getMainstatsAll($this->route['ic'], htmlspecialchars($this->route['im']));
			$vars = [
				'medalsList' => $results,
			];
		} else {   
			$results = $this->model->getMainstats($this->route['ic'], htmlspecialchars($this->route['im']));
			$vars = [
				'medalsList' => $results,
			];
		}
		$this->view->render('', $vars);
	}
}

