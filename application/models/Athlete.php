<?php

namespace application\models;

use application\core\Model;
use ORM;

class Athlete extends Model
{   //добовление спорцмена
  public function addAthlete($athleteName)
  {
    $athlete = ORM::forTable('athletes')->create();
    $athlete->name = $athleteName;
    return $athlete->save();
  }

  //получение имяни спорцмена
  public function getAthlete()
  {
    return ORM::forTable('athletes')->orderByAsc('id')->findMany();
  }

  //удаление спорцмена
  public function deleteAthlete($id)
  {
    $athlete = ORM::forTable('athletes')->findOne($id);
    if (isset($athlete['id']) and !empty($athlete['id'])) {
      return $athlete->delete();
    }
    return false;
  }

  //удаление спорцмена из таблицы связей
  public function deleteAthleteFromMedals($id)
  {
    return ORM::forTable('medals')->where('athlete_id', $id)->deleteMany();
  }
}
