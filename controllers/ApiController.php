<?php
/**
 * Created by PhpStorm.
 * User: nicea
 * Date: 14.03.2018
 * Time: 1:02
 */

namespace app\controllers;

use app\models\Options;
use app\models\Cities;
use Yii;
use yii\web\Response;

class ApiController extends BaseController {

    public function actionIndex() {
        $result = array();
        $this->responseHeaders();
        $this->startSession();

        $get = Yii::$app->request->get();
        if(!empty($get['options']) || isset($get['options'])){
            $all_options = [
                'header' => 1,
                'footer' => 1,
                'user' => 1,
                'cart' => 1,
                'compare' => 1,
                'featured' => 1,
                'cities' => 1,
            ];
            $this->makeMethod($all_options,$result);
        }elseif(!empty($get)){
            $this->makeMethod($get,$result);
        }
        return json_encode($result, JSON_UNESCAPED_UNICODE);
    }
    /*
     * Функция выполняет методы класса необходимы из запроса
     */
    private function makeMethod($get,&$result){
        foreach ($get as $name => $value) {
            $_name = 'get'.ucwords($name);
            if($value == 1 && method_exists($this,$_name)){
                $result[$name] = $this->$_name();
            }
        }
    }
    /*
     * Установливаем заголовки ответа
    */
    private function responseHeaders(){
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
    }

    /*
     * Запустим сессию
    */
    private function startSession(){
        $session = Yii::$app->session;
        if (!$session->isActive){
            $session->open();
        }
    }
    /*
     * Получение настроек из шапки
     */
    public function getHeader() {
        $header = new Options();

        $query = $header::find()->select('value, short, type')->
            where('code=:code',[':code'=>'header'])->asArray()->all();
        if(empty($query)) return;

        $this->setFullPathOptions($query);
        return $query;
    }

    /*
     * Получение настроек из подвала
     */
    public function getFooter() {
        $footer = new Options();

        $query = $footer::find()->select('value, short, type')->
        where('code=:code',[':code'=>'footer'])->asArray()->all();
        if(empty($query)) return;

        $this->setFullPathOptions($query);
        return $query;
    }

    /*
     * Информация о пользователе
     */
    public function getUser(){
        $user_id = Yii::$app->user->id;
        $user_info = [];
        if(!empty($user_id)) {
            $user_info = Yii::$app->user->identity['attributes'];
            unset($user_info['auth_key']);
            unset($user_info['password_hash']);
            unset($user_info['created_at']);
            unset($user_info['updated_at']);
            unset($user_info['password_reset_token']);
        }
        //Возможно понадобится доп характеристики
        return $user_info;
    }

    /*
     * Получение кол-во в корзине
     */
    public function getCart() {
        $result_cart = [];
        $user_id = Yii::$app->user->id;
        // В дальнейшем будем выдвать список товаров, которые находятся в корзине пользователя
        if(!empty($user_id)){
            $result_cart = $this->getCartUser($user_id);
        }else{
            $result_cart = $this->getCartGuest();
        }
        return $result_cart;
    }

    /*
     * Получение сравнения товаров из сессии
     */
    public function getCompare() {
        $result_compare = ['count'=>0];
        $session = Yii::$app->session;
        $compare_user = $session->get('compare_user');

        if(!empty($compare_user)){

        }

        return $result_compare;
    }

    /*
     * Получение избранных товаров из сессии
     */
    public function getFeatured() {
        $result_featured = ['count'=>0];
        $session = Yii::$app->session;
        $featured_user = $session->get('featured_user');

        if(!empty($featured_user)){

        }

        return $result_featured;
    }

    /*
     * Получение списка городов
     */
    public function getCities() {
        $cities = Cities::find()->asArray()->all();
        //Установим активный город
        if(empty($_SERVER['SERVER_NAME'])) return $cities;
        $domen = explode('.',$_SERVER['SERVER_NAME']);
        $domen = $domen[0]; // поддомен всегда будет первым
        //активный либо пустой первый либо найденное соответствие
        $success_find = false;
        foreach ($cities as $key => &$city){
            if($city['cod'] == $domen){
                $city['active'] = 1;
                $success_find = true;
                break;
            }
        }
        if(!$success_find){ //не нашли, тогда установим тому у кого в поле cod пусто
            $empty = array_search('',array_column($cities, 'cod'));
            if($empty !== false){
                $cities[$empty]['active'] = 1;
            }
        }
        return $cities;
    }

    /*
     * Получаем список товаров зарегистрованного пользователя
     * из таблицы shop_cart
     */
    private function getCartUser($user_id){
        $result_cart = ['count'=>0];

        return $result_cart;
    }

    /*
     * Получаем список товаров гостя
     * из сохраненной сессии
     */
    private function getCartGuest(){
        $result_cart = ['count'=>0];
        $session = Yii::$app->session;
        $cart_user = $session->get('cart_user');

        if(!empty($cart_user)){

        }

        return $result_cart;
    }

}