<?php
require_once('../FilmModel.php');
class FilmController{
	private string $name_film;
	private string $director;
	private string $genre;
	private  array $all_films;
	private array $favorites = [];
	public function getFilms()
	{
		$films = new FilmModel();
		$this->all_films = $films->getData;
		return $this->all_films;
	}
	public function __construct(string $name_film, string $director, array $favorites, string $genre)
	{
		$this->name_film = $name_film;
		$this->director = $director;
		$this->genre = $genre;
		$this->favorites = [
			'name_film' => $this->name_film,
			'director' => $this->director,
			'genre' => $this->genre,
		];
	}
	public function addAndShowFilmsInFavorites()
	{
		array_push($favorites, 1);
		var_dump($favorites);
	}
}