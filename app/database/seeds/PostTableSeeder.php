<?php
class PostTableSeeder extends Seeder
{
	public function run() {
		$post = new Post();
		$post->title = 'Plastic Peter\'s Plastic Party';
		$post->body = 'No foil allowed! Come wiggle the night away with Plastic Peter and the Plastic Pal Gang!';
		$post->img = 'testImg.jpg';
		$post->user_id = User::first()->id;
		$post->save();

		$post = new Post();
		$post->title = 'Holy Hecko Pal Potluck';
		$post->body = 'Bring a dish, bring a friend, bring an insatiable appetite for some HECKING FOOD.';
		$post->img = 'testImg.jpg';
		$post->user_id = User::first()->id;
		$post->save();

		$post = new Post();
		$post->title = 'Skeleton Bones Goodbye Party';
		$post->body = 'My cousin has turned into a skeleton, so it is time to bid him farewell. Come by the graveyard for one spooky sendoff! Free moonlight included!';
		$post->img = 'testImg.jpg';
		$post->user_id = User::first()->id;
		$post->save();

		$post = new Post();
		$post->title = 'Dirty Shirt Drop Party';
		$post->body = 'Got dirty shirts? Drop \'em in our smouldering pit! You\'re gonna love the new you!';
		$post->img = 'testImg.jpg';
		$post->user_id = User::first()->id;
		$post->save();

		$post = new Post();
		$post->title = 'Moon Milk Sipping Soiree';
		$post->body = 'Ever had a taste of the refreshing beverage craze sweeping the lunar nation? Come slurp down some Moon Milk and feel truly rejuvenated! (WARNING: RISK OF ETERNAL HANGOVER)';
		$post->img = 'testImg.jpg';
		$post->user_id = User::first()->id;
		$post->save();

		$post = new Post();
		$post->title = 'Dr. Swamp\'s True Morass';
		$post->body = 'Come get stuck in our muck! Slow dance the muggy night away in our mud pit sludge puddle muck ballroom.';
		$post->img = 'testImg.jpg';
		$post->user_id = User::first()->id;
		$post->save();

		$post = new Post();
		$post->title = 'Toothpick Party';
		$post->body = 'Slender, wooden fun. Doors at 7. Pick your teeth!';
		$post->img = 'testImg.jpg';
		$post->user_id = User::first()->id;
		$post->save();

		$post = new Post();
		$post->title = 'Poodle Parade';
		$post->body = 'Watch these fluffy floofsters prance and dance down the avenue! Who knows... maybe some will even be wearing top hats...';
		$post->img = 'testImg.jpg';
		$post->user_id = User::first()->id;
		$post->save();

		$post = new Post();
		$post->title = 'Jelly Bones Procedure Party';
		$post->body = 'Tired of stiff joints? Come get all your bones replaced by jelly! Flop to the floor -- and stay there forever!';
		$post->img = 'testImg.jpg';
		$post->user_id = User::first()->id;
		$post->save();

		$post = new Post();
		$post->title = 'Lizards Wearing Pants';
		$post->body = 'Come see a tank full of lizards wearing pants. The lizards are lorded over by a grand iguana who may, depending on his mood, be wearing a top hat. 18+. The event of the year. Très chic!';
		$post->img = 'testImg.jpg';
		$post->user_id = User::first()->id;
		$post->save();
	}
}