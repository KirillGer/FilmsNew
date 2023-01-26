<?php
require_once('../FilmModel.php');
require_once('../FilmController.php')
interface FilmInterface{
	public function addFilmsInFavorites();
	public function showFilmsInFavorites();
	public function getData();
}