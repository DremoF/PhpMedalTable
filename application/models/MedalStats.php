<?php

namespace application\models;

use application\core\Model;
use ORM;

class MedalStats extends Model
{
  //кусок запроса для getMainstatsAll и getMainstats
  public function getMain()
  {
    return ORM::forTable('medals')
      ->selectMany(
        array(
          'medal_id',
          'countries_name' => 'countries.name',
          'medal_name' => 'medal_types.name',
          'sports_name' => 'sports.name'
        )
      )
      ->selectExpr('GROUP_CONCAT(athletes.name)', 'athlete')
      ->join('countries', array('countries.id', '=', 'medals.country_id'))
      ->join('sports', array('sports.id', '=', 'medals.sport_id'))
      ->join('medal_types', array('medal_types.id', '=', 'medals.medal_id'))
      ->join('teams', array('teams.id', '=', 'medals.team_id'))
      ->join('athletes', array('athletes.id', '=', 'medals.athlete_id'));
  }

  //получение статистики по типу медали
  public function getMainstatsAll($counryId)
  {
    return $this->getMain()
      ->where('countries.id', $counryId)
      ->groupBy('medal_id')
      ->findMany();
  }

  //получение статистики по всем типам медалей
  public function getMainstats($counryId, $medalId)
  {
    return $this->getMain()
      ->where('countries.id', $counryId)
      ->where('medal_id', $medalId)
      ->groupBy('medal_id')
      ->findMany();
  }
}
