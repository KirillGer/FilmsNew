<?php
require_once('../FilmModel.php');
require_once('../FilmController.php')
interface FilmInterface{
	public function addAndShowFilmsInFavorites();
	public function getData();
}