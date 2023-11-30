<?php

namespace App\Controller\Pages;

require_once __DIR__."/Utils/View.php";

use \App\Utils\View;

class Page {

    /**
     * Metodo responsavel por renderizar o Header da pagina
     */
    private static function getHeader() {
        return View::render("pages/header");
    }

    /**
     * Metodo responsavel por renderizar o Footer da pagina
     */
    private static function getFooter() {
        return View::render("pages/footer");
    }

    /**
     * Metodo responsavel por retornar o conteudo VIEW da pagina generica
     */
    public static function getPage($title, $content) {
        return View::render('pages/page', [
            'title'     => $title,
            'header'    => self::getHeader(),
            'content'   => $content,
            'footer'    => self::getFooter(),
        ]);
    }

}




