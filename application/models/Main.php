<?php

namespace application\models;



use application\core\Model;
use ORM;

class Main extends Model
{
   //получение данных из главной таблицы medals
	public function getMainCountrysName($order)
    {
      return ORM::forTable('countries')
        ->rawQuery(
                  "SELECT name, countries.id,
                  ROW_NUMBER() OVER w AS nrow,
                  COALESCE(SUM(medal_id = 1),0) as gold,
                  COALESCE(SUM(medal_id = 2),0) as silver,
                  COALESCE(SUM(medal_id = 3),0) as bronze,
                  COUNT(medal_id) as medal
                  FROM countries
                  LEFT JOIN medals ON countries.id = medals.country_id
                  GROUP BY country_id
                  WINDOW w AS (ORDER BY 'gold')
                  ORDER BY " . $order
                  )
        ->findMany();
    }
}