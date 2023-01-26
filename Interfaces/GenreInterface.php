<?php
require_once('../FilmModel.php');
require_once('../FilmController.php')
interface GenreInterface{
	public function addFilmsInFavorites();
	public function showFilmsInFavorites();