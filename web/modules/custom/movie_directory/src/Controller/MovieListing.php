<?php

namespace Drupal\movie_directory\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\movie_directory\MovieApiConnector;
use Symfony\Component\DependencyInjection\ContainerInterface as DependencyInjectionContainerInterface;

class MovieListing extends ControllerBase
{

    public function __construct(private MovieApiConnector $movieApiConnector)
    {
    }

    public function view()
    {
        $content = [];
        $content['movies'] = $this->createMovieCards();

        return [
            '#theme' => 'movie-listing',
            '#content' => $content
        ];
    }

    public static function create(DependencyInjectionContainerInterface $container)
    {
        return new static($container->get('movie_directory.api_connector'));
    }

    private function listMovies()
    {
        $movie_list = $this->movieApiConnector->discoverMovies();
        if (!empty($movie_list->results)) {
            return $movie_list->results;
        }
        return [];
    }

    private function createMovieCards()
    {
        $movieCards = [];

        $movies = $this->listMovies();

        if (!empty($movies)) {
            foreach ($movies as $movie) {
                $content = [
                    'title' => $movie->title,
                    'description' => $movie->overview,
                    'movie_id' => $movie->id,
                    'image' => $this->movieApiConnector->getImageUrl($movie->poster_path),
                ];

                $movieCards[] = [
                    '#theme' => 'movie-card',
                    '#content' => $content
                ];
            }
        }

        return $movieCards;
    }
}
