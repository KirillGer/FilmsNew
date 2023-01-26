<?php
require_once('../FilmModel.php');
require_once('../FilmController.php')
interface DirectorInterface{
	public function addFilmsInFavorites();
	public function showFilmsInFavorites();