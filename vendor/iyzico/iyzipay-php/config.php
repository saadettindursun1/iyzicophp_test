<?php

require_once('IyzipayBootstrap.php');

IyzipayBootstrap::init();

class Config
{
    public static function options()
    {
        $options = new \Iyzipay\Options();
        $options->setApiKey("sandbox-VkXqGdbgHVRh7VfaKjZsQs2Sn5gaD7f7");
        $options->setSecretKey("2sxTcCfPB9GIIrkCa73TVQXOvXWiXj6c");
        $options->setBaseUrl("https://sandbox-api.iyzipay.com");
        return $options;
    }
}