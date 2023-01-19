<?php
class FilmModel{
	protected array $films[
		[
			'id' => 0,
			'name_film' => 'Avengers: Endgame',
			'director' => 'Anthony Russo',
			'genre' => 'Fantastic'
		],
		[
			'id' => 1,
			'name_film' => 'Spider-Man: No Way Home',
			'director' => 'Jon Watts',
			'genre' => 'Fantastic'
		],
		[	'id' = 2,
			'name_film' => 'The Silver Scates',
			'director' => 'Michael Lockshin',
			'genre' => 'Historical Drama'
		],
		[
			'id' = 3,
			'name_film' => 'Venom 2',
			'director' => 'Andy Serkis',
			'genre' => 'Fantastic'
		]
	];
		public function getData(): ?array
		{
			return $this->data;
		}
}