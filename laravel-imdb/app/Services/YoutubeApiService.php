<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class YoutubeApiService
{
    protected $client;
    protected $apiKey;
    protected $apiHost;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('RAPIDAPI_KEY');
        $this->apiHost = env('RAPIDAPI_HOST');
    }

    public function searchVideos($query)
    {
        try {
            $response = $this->client->request('GET', "https://youtube138.p.rapidapi.com/search/", [
                'query' => [
                    'q' => $query,
                    'hl' => 'en',
                    'gl' => 'US',
                ],
                'headers' => [
                    'X-RapidAPI-Key' => $this->apiKey,
                    'X-RapidAPI-Host' => $this->apiHost,
                ],
                'verify' => false
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function getVideoById($videoId)
    {
        try {
            $response = $this->client->request('GET', "https://youtube138.p.rapidapi.com/video/details/", [
                'query' => [
                    'id' => $videoId,
                ],
                'headers' => [
                    'X-RapidAPI-Key' => $this->apiKey,
                    'X-RapidAPI-Host' => $this->apiHost,
                ],
                'verify' => false
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
