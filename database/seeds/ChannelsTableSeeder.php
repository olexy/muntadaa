<?php

use Muntadaa\Channel;

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name' => 'Jobs',
            'slug' => str_slug('Jobs')
        ]);

        Channel::create([
            'name' => 'Lagos Gist',
            'slug' => str_slug('Lagos Gist')
        ]);

        Channel::create([
            'name' => 'Dating, Sex and Relationship',
            'slug' => str_slug('Dating, Sex and Relationship')
        ]);

        Channel::create([
            'name' => 'Celebrity Scoop',
            'slug' => str_slug('Celebrity Scoop')
        ]);

        Channel::create([
            'name' => 'Politics',
            'slug' => str_slug('Politics')
        ]);

        Channel::create([
            'name' => 'Business and Entrepreneurship',
            'slug' => str_slug('Business and Entrepreneurship')
        ]);

        Channel::create([
            'name' => 'Banking and Finance',
            'slug' => str_slug('Banking and Finance')
        ]);

        Channel::create([
            'name' => 'Spirituality, Faith and Religion',
            'slug' => str_slug('Spirituality, Faith and Religion')
        ]);

        Channel::create([
            'name' => 'Travel and Hospitality',
            'slug' => str_slug('Travel and Hospitality')
        ]);


    }
}
