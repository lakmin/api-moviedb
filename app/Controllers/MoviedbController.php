<?php

namespace App\Controllers;

class MoviedbController extends BaseController
{
    public function index()
    {
        return view('search');
    }

    public function search()
    {
        if ($this->request->getMethod() === 'post') {
            $key =getenv('MOVIE_DB_KEY');

            $search = urlencode($this->request->getVar('keywords'));

            $url = "https://api.themoviedb.org/3/search/movie?api_key=$key&query=$search";

            $response = file_get_contents($url);
            $data = json_decode($response, true);

            $data['movies'] = $data['results'] ?? [];
            return view('results', $data);
        }
    }
}