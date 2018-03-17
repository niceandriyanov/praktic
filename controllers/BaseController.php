<?php
/**
 * Created by PhpStorm.
 * User: nicea
 * Date: 14.03.2018
 * Time: 1:03
 */

namespace app\controllers;

use yii\web\Controller;

class BaseController extends Controller {

    protected $option_image = '/uploads/options/';

    public function print_deb($obj){
        echo'<pre>';
        print_r($obj);
        echo'</pre>';
    }

    /*
     * Функция ищет картинки в массиве и устанавливает полный путь к ним в настройках сайта
    */
    public function setFullPathOptions(&$query){
        $keys = array_keys(array_column($query, 'type'),'image');
        if(!empty($keys)){
            foreach ($keys as $item){
                $query[$item]['value'] = $this->option_image.$query[$item]['value'];
            }
        }
    }

}