<?php


class analyse
{
    public function __construct($db){
        $db->prepare("select * from (select name, cost, step, day from ? where )");
    }
}