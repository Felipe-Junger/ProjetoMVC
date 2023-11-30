<?php

namespace App\Controller\Pages;

require_once __DIR__."/Utils/View.php";
require_once __DIR__."/Model/Entity/Organization.php";

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page{
    

    public static function getHome() {
        $org = new Organization();

        //VIEW DA HOME
        $content = View::render('pages/home', [
            'name'          => $org->name,
            'description'   => $org->description,
            'site'          => $org->site,
        ]);

        //RETORNA VIEW DA PAGE
        return parent::getPage('FelpsR6 - Canal - HOME', $content);
    }

}


