<?php

namespace AppBundle\SQL;


class cityName
{
    public function getCityName($city)
    {
        $conn = $this->get('database_connection');
        $miasto = $conn->fetchAll
        ("
            SELECT cit.miastoName, obj.obName 
            FROM object obj 
            Left JOIN miasto cit 
            ON obj.obCity = cit.miastoId
            WHERE cit.miastoName = '$city' 
        ");

        return $miasto;
    }
}