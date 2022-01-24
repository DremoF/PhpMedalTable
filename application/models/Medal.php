<?php

namespace application\models;

use application\core\Model;
use ORM;

class Medal extends Model
{   //получение имяни спорцмена
  public function getAthlete()
  {
    return ORM::forTable('athletes')->orderByAsc('id')->findMany();
  }

  //получение вида спорта
  public function getSport()
  {
    return ORM::forTable('sports')->orderByAsc('id')->findMany();
  }

  //получение страны
  public function getCountry()
  {
    return ORM::forTable('countries')->orderByAsc('id')->findMany();
  }

  // получение типа медали
  public function getTypeMedal()
  {
    return ORM::forTable('medal_types')->orderByAsc('id')->findMany();
  }

  //удаление медали из таблицы связей
  public function deleteMedalFromMedals($id)
  {
    return ORM::forTable('medals')->where('medal_id', $id)->deleteMany();
  }

  //добовление ключей в таблиу связей medals
  public function addMedals($addPOST, $teamName)
  {
    $team = ORM::forTable('teams')->create();
    $team->name = $teamName;
    $team->save();
    $teams = ORM::forTable('teams')->where('name', $teamName)->findOne();
    if (!empty($addPOST['athlete'])) {
      foreach (array_unique($addPOST['athlete']) as $athleteId) {
        $medal = ORM::forTable('medals')->create();
        $medal->country_id = $addPOST['country'];
        $medal->sport_id = $addPOST['sport'];
        $medal->medal_id = $addPOST['medal'];
        $medal->team_id = $teams['id'];
        $medal->athlete_id = $athleteId;
        $medal->save();
      }
    }
    return true;
  }

  //получение спорцменов,медалей,вида спорта и страны
  public function getMedalStats()
  {
    return ORM::forTable('medals')
      ->selectMany(
        array(
          'medals_id' => 'medals.id', 'athlete_id',
          'medal_id',
          'athlete_name' => 'athletes.name',
          'countries_name' => 'countries.name',
          'medal_name' => 'medal_types.name',
          'sports_name' => 'sports.name'
        )
      )
      ->join('countries', array('countries.id', '=', 'medals.country_id'))
      ->join('sports', array('sports.id', '=', 'medals.sport_id'))
      ->join('medal_types', array('medal_types.id', '=', 'medals.medal_id'))
      ->join('teams', array('teams.id', '=', 'medals.team_id'))
      ->join('athletes', array('athletes.id', '=', 'medals.athlete_id'))
      ->findMany();
  }
}
