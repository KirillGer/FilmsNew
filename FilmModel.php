<?php
class FilmModel{
	protected array $films
	[
		[
			'id' => 0,
			'name_film' => 'Avengers: Endgame'
		],
		[
			'id' => 1,
			'name_film' => 'Spider-Man: No Way Home'
		],
		[	'id' = 2,
			'name_film' => 'The Silver Scates'
		],
		[
			'id' = 3,
			'name_film' => 'Venom 2'
		]
	];
		public function getData(): ?array
		{
			return $this->data;
		}
}