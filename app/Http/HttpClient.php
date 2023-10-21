<?php

namespace App\Http;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

use GuzzleHttp\Client;

class HttpClient
{
    public static function client()
    {
        // $client = new Client([
        //     'base_uri' => env('API_APP_URL'),
        //     'headers'  => [
        //         'Content-Type'  => 'application/json',
        //         'Accept'        => 'application/json',
        //     ],
        //     'json' => [
        //         'grant_type'    => 'client_credentials',
        //         'client_id'     => env('API_CLIENT_ID'),
        //         'client_secret' => env('API_CLIENT_SECRET'),
        //         'scope'         => '*',
        //     ],
        //     'http_errors' => false
        // ]);
        // $response = $client->post('/oauth/token');
        return response()->getBody()->getContents();
    }

    public static function login($username, $password)
    {
        $client = new Client([
            'base_uri' => env('API_APP_URL'),
            'headers'  => [
                'Content-Type'  => 'application/json',
                'Accept'        => 'application/json',
            ],
            'json' => [
                'grant_type'    => 'password',
                'client_id'     => env('API_PASSWORD_ID'),
                'client_secret' => env('API_PASSWORD_SECRET'),
                'username'      => $username,
                'password'      => $password
            ],
            'http_errors' => false
        ]);
        $response = $client->post('/oauth/token');
        return $response->getBody()->getContents();
    }

    /**
     * Request to API
     *
     * @return json_decode object
     */
    public static function request($method, $url, $json = null)
    {
        // $access_token = Session::get('access_token');
        // $client = new Client([
        //     'base_uri' => env('API_APP_URL'),
        //     'headers'  => [
        //         'Content-Type'  => 'application/json',
        //         'Accept'        => 'application/json',
        //         'Authorization' => 'Bearer ' . $access_token
        //     ],
        //     'http_errors' => false
        // ]);
        // $response = $client->request($method, $url, ['json' => $json]);
        // if ($response->getStatusCode() == 401) {
        //     abort(401, 'Your session is expired. Please login again.');
        // }
        // if ($response->getStatusCode() == 403) {
        //     abort(403);
        // }
        // if ($response->getStatusCode() == 404) {
        //     abort(404);
        // }
        // if ($response->getStatusCode() == 500) {
        //     abort(500);
        // }
        return response($response->getBody()->getContents());
    }

    public static function paginate($items, $total, $per_page, $current_page)
    {
        return new LengthAwarePaginator(
            $items,
            $total,
            $per_page,
            $current_page,
            ['path' => \Illuminate\Pagination\Paginator::resolveCurrentPath()]
        );
    }

    public static function download($url, $filename)
    {
        $access_token = Auth::user()->access_token;
        $client = new Client([
            'base_uri'      => env('API_APP_URL'),
            'headers' => [
                'Authorization' => 'Bearer ' . $access_token
            ],
        ]);
        $temp        = tempnam(sys_get_temp_dir(), $filename . '_');
        $resource    = fopen($temp, 'w');
        $response    = $client->request('GET', $url, ['sink' => $resource]);
        $status_code = $response->getStatusCode();
        $name        = $response->getHeader('File-name');
        $data        = (!empty($name)) ? ['path' => $temp, 'name' => $name[0], $status_code] : ['path' => $temp, $status_code];
        return response()->json($data);
    }

    public static function upload($url, $form_data)
    {
        $access_token = Auth::user()->access_token;
        $client = new Client([
            'base_uri' => env('API_APP_URL'),
            'headers'  => [
                'Content-Type'  => 'multipart/form-data',
                'Authorization' => 'Bearer ' . $access_token
            ],
        ]);
        $response = $client->request('POST', $url, $form_data);
        return response()->json(json_decode($response->getBody()->getContents()), $response->getStatusCode());
    }
}
