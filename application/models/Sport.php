<?php

namespace application\models;



use application\core\Model;
use ORM;

class Sport extends Model
{
     //получение вида спорта
    public function getSport()
    {
      return ORM::forTable('sports')->orderByAsc('id')->findMany();
    }

    //добавление вида спорта
    public function addsport($sportName)
    { 
      $sport = ORM::forTable('sports')->create();
      $sport->name = $sportName;
      return $sport->save();
    }

    //удаление вида спорта
    public function deleteSport($id)
    {
      $sport = ORM::forTable('sports')->findOne($id);
      if (isset($sport['id']) and !empty($sport['id'])) {
        return $sport->delete();
      }
      return false;
    }

    //удаление вида спорта из таблицы связей
    public function deleteSportFromMedals($id)
    {
      return ORM::forTable('medals')->where('sport_id',$id)->deleteMany();
    }
}