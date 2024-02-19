<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\BaseController;
use Exception;
use Melipayamak\MelipayamakApi;
use SoapClient;

class TestController extends BaseController
{
    public function index()
    {
//        try {
////            $username = '9381560761';
////            $password = 'Y254N';
////            $api = new MelipayamakApi($username, $password);
////            $smsRest = $api->sms();
////            $to = '09004636353';
////            $response = $smsRest->SendByBaseNumber([123123], $to, 176219);
//
////            $username = '9381560761';
////            $password = 'Y254N';
////            $api = new MelipayamakApi($username,$password);
////            $smsSoap= $api->sms();
////            $to = '0901';
////            $response = $smsSoap->sendByBaseNumber(['code'], $to, 176219);
//
//            ini_set("soap.wsdl_cache_enabled", "0");
//            $sms = \Http::post('http://api.payamak-panel.com/post/send.asmx', array("encoding" => "UTF-8"));
////            $sms = new SoapClient("http://api.payamak-panel.com/post/Send.asmx?wsdl", array("encoding" => "UTF-8"));
//            $data = array(
//                "username" => "9381560761",
//                "password" => "Y254N",
//                "text"     => array("1234"),
//                "to"       => "09004636353",
//                "bodyId"   => 176219);
//            $send_Result = $sms->SendByBaseNumber
//            ($data)->SendByBaseNumberResult;
//            echo $send_Result;
//
//        } catch (Exception $e) {
//            echo $e->getMessage();
//        }

//        $data = array('username' => "9381560761", 'password' => "Y254N", 'text' => "1234", 'to' => "09004636353", "bodyId" => 176219);
//        $post_data = http_build_query($data);
//        $handle = curl_init('https://rest.payamak-panel.com/api/SendSMS/BaseServiceNumber');
//        curl_setopt($handle, CURLOPT_HTTPHEADER, array(
//            'content-type' => 'application/x-www-form-urlencoded'
//        ));
//        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
//        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
//        curl_setopt($handle, CURLOPT_POST, true);
//        curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
//        $response = curl_exec($handle);
//        var_dump($response);
    }
}
