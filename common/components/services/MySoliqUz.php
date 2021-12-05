<?php

namespace common\components\services;

use Yii;
use yii\base\BaseObject;
use yii\helpers\Json;
use yii\httpclient\Client;
use yii\helpers\BaseStringHelper;

/** @property array $auth */
class MySoliqUz
{
    /*
     * http://my.soliq.lan/services/np1/fizbypinfl?lang=uz&pinfl=52707036730013
     * */
    const LOGIN = 'vitrina';
    const PASSWORD = '321654';

    const BASE_URL = 'http://my.soliq.lan/';

    const PRODUCTS_LIST = '/services/cl-api/class/get-list/by-company';

    public static function getProductList($tin) {
        $client = new Client();
        $response = $client->createRequest()
            ->setMethod('GET')
            ->setUrl(self::BASE_URL.self::PRODUCTS_LIST)
            ->addHeaders(self::getAuth())
            ->setData(['lang' => 'uz','tin'=>$tin])
            ->send();
        return $response->isOk ? $response->data['data'] : [];
    }


    private static function getAuth() {
        return ['Authorization' => 'Basic ' . base64_encode(self::LOGIN.':'.self::PASSWORD)];
    }
}