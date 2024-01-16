<?php

namespace Library;
class  Api
{
    public static function loginByApi($postArray)
    {
        return self::fetchApiData($postArray);
    }

    public static function fetchApiData($postArray)
    {
        $postData = \mHelper\mVariables::mReArray($postArray);
        $ch = curl_init($postArray['apiUrl']);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return curl_error($ch);
        } else {
            $data = json_decode($response, true);
            return $data;
        }
        curl_close($ch);
    }

    public static function addApiData($apiUrl, array $values)
    {
        {
            $apiURL = $apiUrl;
            $ch = curl_init($apiURL);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $values);

            $response = curl_exec($ch);

            if (curl_errno($ch)) {
                return curl_error($ch);
            } else {
                $data = json_decode($response, true);
                return $data;
            }
            curl_close($ch);
        }
    }
}
