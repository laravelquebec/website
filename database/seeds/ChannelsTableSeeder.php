<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use LaravelQuebec\Channel;

class ChannelsTableSeeder extends Seeder {

	public function run()
	{
		$channels = [
			[
				'title' => 'Général',
			    'slug' => Str::slug('Général'),
			    'position' => 0,
			],
		    [
			    'title' => 'Trucs & Astuces',
			    'slug' => Str::slug('Trucs & Astuces'),
			    'position' => 1,
		    ],
		    [
			    'title' => 'Packages',
			    'slug' => Str::slug('Packages'),
			    'position' => 2,
		    ],
		    [
			    'title' => 'Annonces',
			    'slug' => Str::slug('Annonces'),
			    'position' => 3,
		    ],
		    [
			    'title' => 'Aide',
			    'slug' => Str::slug('Aide'),
			    'position' => 4,
		    ],
		    [
			    'title' => 'Amélioration du site',
		        'slug' => Str::slug('Amélioration du site'),
		        'position' => 5,
		    ],
		];

		foreach ($channels as $channel)
		{
			Channel::forceCreate($channel);
		}
	}

}
