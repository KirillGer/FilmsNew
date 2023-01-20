<?php
require_once('../FilmModel.php');
require_once('../GenreModel.php');
require_once('../DirectorModel.php');
class FilmController{
	private string $name_film;
	private string $name_director;
	private string $name_genre;
	private  array $all_films;
	private array $favorites = [];
	public function getFilms()
	{
		$films = new FilmModel();
		$this->all_films = $films->getData;
		return $this->all_films;
	}
	public function __construct(string $name_film, string $name_director, array $favorites, string $name_genres)
	{
		$this->name_film = $name_film;
		$this->name_director = $name_director;
		$this->name_genre = $name_genre;
		$this->favorites = [
			'name_film' => $this->name_film,
			'name_director' => $this->name_director,
			'name_genre' => $this->name_genre,
		];
	}
	public function addAndShowFilmsInFavorites()
	{
		array_push($favorites, 1);
		var_dump($favorites);
	}
}