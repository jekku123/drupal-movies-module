<?php

namespace Drupal\movie_directory;

use Drupal\Core\Http\ClientFactory;
use Drupal\Core\Utility\Error;
use Drupal\movie_directory\Form\MovieAPI;
use GuzzleHttp\Exception\RequestException;

class MovieApiConnector
{
    private $query;
    private $client;

    public function __construct(ClientFactory $client)
    {
        $movie_api_config = \Drupal::state()->get(MovieAPI::MOVIE_API_CONFIG_PAGE);
        $api_url = ($movie_api_config['api_base_url']) ?: 'https://api.themoviedb.org';
        $api_key = ($movie_api_config['api_key']) ?: '';

        $query = ['api_key' => $api_key];

        $this->query = $query;

        $this->client = $client->fromOptions(
            [
                'base_uri' => $api_url,
                'query' => $query
            ]
        );
    }

    public function discoverMovies()
    {
        $data = [];
        $endpoint = '3/discover/movie';
        $options = ['query' => $this->query];

        try {
            $request = $this->client->get($endpoint, $options);
            $result = $request->getBody()->getContents();
            $data = json_decode($result);
        } catch (RequestException $e) {
            $logger = \Drupal::logger('update');
            Error::logException($logger, $e, $e->getMessage());
        }

        return $data;
    }

    public function getImageUrl($image_path)
    {
        return 'https://image.tmdb.org/t/p/w500' . $image_path;
    }
}
