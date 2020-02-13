<?php

namespace Coinlore;

class Request
{
    public function getglobal()
    {
        return json_decode($this->curl("https://api.coinlore.net/api/global/"));
    }

    public function getcoin($id)
    {
        return json_decode($this->curl("https://api.coinlore.net/api/ticker/?id=" . $id));
    }

    public function getcoins($start, $limit)
    {
        if (empty($limit) || !is_numeric($limit)) {
            $limit = 100;
        }
        if (empty($start) || !is_numeric($start)) {
            $start = 0;
        }
        return json_decode($this->curl("https://api.coinlore.net/api/tickers/?start=" . $start . "&limit=" . $limit . ""));
    }

    public function getcoinmarkets($id)
    {
        return json_decode($this->curl("https://api.coinlore.net/api/coin/markets/?id=" . $id));
    }

    public function getexchanges()
    {
        return json_decode($this->curl("https://api.coinlore.net/api/exchanges/"));
    }

    public function getexchange($id)
    {
        return json_decode($this->curl("https://api.coinlore.net/api/exchange/?id=" . $id));
    }

    public function getsocialstats($id)
    {
        return json_decode($this->curl("https://api.coinlore.net/api/coin/social_stats/?id=" . $id));
    }

    private function curl($url)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_VERBOSE => false,
            CURLOPT_USERAGENT => 'Coinlore PHP/API',
            CURLOPT_POST => 0,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_TIMEOUT => 65
        ));
        $resp = curl_exec($curl);
        curl_close($curl);

        return $resp;
    }
}
?>