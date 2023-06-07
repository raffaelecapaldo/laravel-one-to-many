<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'name' => 'Boolflix',
                'image_url' => 'https://i.ibb.co/1bL15zM/boolflix.png',
                'languages' => 'Vue, Javascript, HTML, SCSS',
                'tags' => 'Vue, portfolio',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis vel ante quis fermentum. In iaculis mauris lorem, aliquam viverra ex ornare a. Proin pretium dolor metus, quis consequat velit facilisis vitae. Etiam maximus id sem sit amet fermentum. Fusce eros nisl, consectetur a sem non, egestas ultrices purus. Quisque faucibus, metus non egestas interdum, odio diam hendrerit turpis, tristique interdum nunc velit eget erat.',
                'repo_url' => 'https://github.com/raffaelecapaldo/vite-boolflix'
            ],
            [
                'name' => 'Laravel Comics',
                'image_url' => 'https://wallpaperaccess.com/full/2379729.jpg',
                'languages' => 'PHP, HTML, SCSS',
                'tags' => 'Laravel',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis vel ante quis fermentum. In iaculis mauris lorem, aliquam viverra ex ornare a. Proin pretium dolor metus, quis consequat velit facilisis vitae. Etiam maximus id sem sit amet fermentum. Fusce eros nisl, consectetur a sem non, egestas ultrices purus. Quisque faucibus, metus non egestas interdum, odio diam hendrerit turpis, tristique interdum nunc velit eget erat.',
                'repo_url' => 'https://github.com/raffaelecapaldo/vite-comics'
            ],
            [
                'name' => 'Campominato',
                'image_url' => 'https://wallpapers.com/images/hd/red-forest-trees-n8z3bf3dv0b2cj6w.jpg',
                'languages' => 'Javascript, HTML, CSS',
                'tags' => 'Games',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis vel ante quis fermentum. In iaculis mauris lorem, aliquam viverra ex ornare a. Proin pretium dolor metus, quis consequat velit facilisis vitae. Etiam maximus id sem sit amet fermentum. Fusce eros nisl, consectetur a sem non, egestas ultrices purus. Quisque faucibus, metus non egestas interdum, odio diam hendrerit turpis, tristique interdum nunc velit eget erat.',
                'repo_url' => 'https://github.com/raffaelecapaldo/js-campominato-dom'
            ],
        ];

        foreach($projects as $project) {
            $newProject = new Project();
            $newProject->name = $project['name'];
            $newProject->slug = Str::slug($project['name'], '-');
            $newProject->image_url = $project['image_url'];
            $newProject->languages = $project['languages'];
            $newProject->tags = $project['tags'];
            $newProject->description = $project['description'];
            $newProject->repo_url = $project['repo_url'];
            $newProject->save();
        }
    }
}
