<?php

namespace application\models;



use application\core\Model;
use ORM;

class Country extends Model
{ 
    //добовление страны
    public function addCountry($contryName)
    {
      $country = ORM::forTable('countries')->create();
      $country->name = $contryName;
      return $country->save();
    }

    //получение страны
    public function getCountry()
    { 
      return ORM::forTable('countries')->orderByAsc('id')->findMany();
    }

    //удаление страны
    public function deleteCountry($id)
    { 
      $country = ORM::forTable('countries')->findOne($id);
      if (isset($country['id']) and !empty($country['id'])) {
        return $country->delete();
      }
      return false;
    }
    
    //удаление страны из таблицы связей
    public function deleteCountryFromMedals($id)
    { 
      return ORM::forTable('medals')->where('country_id',$id)->deleteMany();
    }
}