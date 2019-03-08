<?php

namespace Jemixs\APEXAPI;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;


/**
 * Class apexApi
 */
class apexApi
{

    const BASE_URL = 'https://public-api.tracker.gg/apex/v1/standard/';
    public $token;
    public $platform;
    private $client;

    /**
     * apexApi constructor.
     * @param $token
     * @param string $platform Platforms: 1 = XBOX 2 = PSN 5 = Origin / PC
     */
    function __construct($token, $platform = '5')
    {
        $this->token = $token;
        $this->platform = $platform;

        $this->client = new Client([
            'base_uri' => self::BASE_URL,
            'timeout' => 2.0,
            'headers' => [
                'TRN-Api-Key' => $this->token
            ]
        ]);
    }

    /**
     * @param $nickName
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getPlayer($nickName)
    {
        try {
            $getPlayer = $this->client->request('GET','profile/'.$this->platform.'/'.$nickName);
            return json_decode($getPlayer->getBody(),true);
        }catch (ClientException $e) {
           return '{"error":"'.$e->getCode().'"}';
        }
    }
}