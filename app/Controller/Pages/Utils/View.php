<?php

namespace App\Utils;

class View {
    
    /**
     * Método responsável por retornar o conteúdo de uma view
     */
    public static function getContentView($view) {
        $file = __DIR__ . '/../../../../resources/view/' . $view . '.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * Método responsável por retornar o conteúdo RENDERIZADO de uma view
     */
    public static function render($view, $vars = []) {

        $contentView = self::getContentView($view);

        //CAVES DO ARRAY DE VARIAVEIS
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        },$keys);

        //RETORNA O CONTEUDO RENDERIZADO
        return str_replace($keys,array_values($vars), $contentView);
   }

}




