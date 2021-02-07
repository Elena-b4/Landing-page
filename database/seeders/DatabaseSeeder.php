<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Client;
use App\Models\Greeting;
use App\Models\Portfolio;
use App\Models\Project;
use App\Models\Section;
use App\Models\Service;
use App\Models\Story;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'name' => 'Elena',
                'email' => 'lena_helen_b@mail.ru',
                'password' => Hash::make('123123123'),
                'is_admin' => 1,
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ],
        ];
        foreach ($admins as $admin) {
            User::create($admin);
        }
        $greetings = [
            [
                'subheading' => 'Welcome To Our Studio!',
                'heading' => 'It is Nice To Meet You',
            ],
        ];
        foreach ($greetings as $greeting) {
            Greeting::create($greeting);
        }
        $services = [
            [
                'icon' => 'fas fa-shopping-cart',
                'department' => 'E-Commerce',
                'description' => 'E-commerce – commerce conducted over the Internet , most often via the World Wide Web. E-commerce can apply to purchases made through the Web or to business-to-business activities such as inventory transfers. ',
            ],
            [
                'icon' => 'fas fa-laptop',
                'department' => 'Responsive Design',
                'description' => 'Almost every new client these days wants a mobile version of their website.  In the next five years, we’ll likely need to design for a number of additional inventions.',
            ],
            [
                'icon' => 'fas fa-lock',
                'department' => 'Web Security',
                'description' => 'Web security is also known as “Cybersecurity”. It basically means protecting a website or web application by detecting, preventing and responding to cyber threats.',
            ],
        ];
        foreach ($services as $service) {
            Service::create($service);
        }
        $stories = [
            [
                'path_img' => 'assets/img/about/1.jpg',
                'time' => '2016-2017',
                'title' => 'Our Humble Beginnings',
                'content' => 'When thinking about careers, professional advancement, or even job hunting, we usually emphasize so-called “hard skills,” meaning skills that are directly connected to our ability to perform a particular task or do a certain job. These skills can be evaluated or measured, as they are the result of degrees, certificates, specialized knowledge, seminars, continuing education, vocational training, and so on.',
            ],
            [
                'path_img' => 'assets/img/about/2.jpg',
                'time' => 'March 2018',
                'title' => 'An Agency is Born',
                'content' => '“Soft skills,” on the other hand, are more difficult to measure or quantify, as they usually do not come from a degree or specialized training, but from life experience, personality, and attitude. They are often called “people skills,” as they typically relate, in some form, to how we deal or interact with other people. For example: Are we able to motivate and lead people? Can we communicate well with others?',
            ],
            [
                'path_img' => 'assets/img/about/3.jpg',
                'time' => 'December 2019',
                'title' => 'Transition to Full Service',
                'content' => 'Some commonly mentioned soft skills would include, among others: creativity, team work, written and verbal communication, management and leadership, flexibility, and organization. These types of skills are important, as they help to form a well-rounded person and employee. They can provide a competitive edge in a job search.',
            ],
            [
                'path_img' => 'assets/img/about/4.jpg',
                'time' => 'July 2020',
                'title' => 'Phase Two Expansion',
                'content' => 'Soft skills are relevant to just about every industry or job, because people are always key, in one way or another. For both a job-seeker and an employer, these are so-called “transferable skills,” and are highly sought after. The employee can utilize these soft skills across various jobs or settings, and this is also a plus for employers.',
            ],
        ];
        foreach ($stories as $story) {
            Story::create($story);
        }
        $workers = [
            [
                'path' => 'assets/img/team/1.jpg',
                'name' => 'Kay Garland',
                'position' => 'Lead Designer',
                'twitter' => 'https://twitter.com/KayGarland5',
                'facebook' => 'https://www.facebook.com/kayleighjgarland',
                'linkedin' => 'https://www.linkedin.com/in/kay-garland-44880215a',
            ],
            [
                'path' => 'assets/img/team/2.jpg',
                'name' => 'Larry Parker',
                'position' => 'Lead Marketer',
                'twitter' => 'https://twitter.com/parklarjr',
                'facebook' => 'https://www.facebook.com/larry.parker.94009',
                'linkedin' => 'https://www.linkedin.com/in/gatorlbp',
            ],
            [
                'path' => 'assets/img/team/3.jpg',
                'name' => 'Diana Petersen',
                'position' => 'Lead Developer',
                'twitter' => 'https://twitter.com/DianaPetersen14',
                'facebook' => 'https://www.facebook.com/diana.petersen.7505',
                'linkedin' => 'https://www.linkedin.com/in/diana-peterson-30a1461',
            ],
        ];
        foreach ($workers as $worker) {
            Team::create($worker);
        }

        $clients = [
            [
                'title' => 'Envato',
                'logotype' => 'assets/img/logos/envato.jpg',
                'path' => 'https://envato.com/',
            ],
            [
                'title' => 'Designmodo',
                'logotype' => 'assets/img/logos/designmodo.jpg',
                'path' => 'https://designmodo.com/',
            ],
            [
                'title' => 'Themeforest',
                'logotype' => 'assets/img/logos/themeforest.jpg',
                'path' => 'https://themeforest.net/',
            ],
            [
                'title' => 'Creative market',
                'logotype' => 'assets/img/logos/creative-market.jpg',
                'path' => 'https://creativemarket.com/',
            ],
        ];
        foreach ($clients as $client) {
            Client::create($client);
        }
        $clients = Client::all();

        $categories = [
            ['title' => 'Illustration'],
            ['title' => 'Graphic Design'],
            ['title' => 'Identity'],
            ['title' => 'Branding'],
            ['title' => 'Website Design'],
            ['title' => 'Photography'],
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }
        $categories = Category::all();
        $projects = [
            [
                'path_full_img' => 'assets/img/portfolio/01-full.jpg',
                'path_img' => 'assets/img/portfolio/01-thumbnail.jpg',
                'client_id' => $clients->find(1)->id,
                'category_id' => $categories->find(1)->id,
                'name' => 'Canary',
                'content' => 'The history of our world is a story of migration, diversity, empire and belonging. But these topics are not often taught in schools. Black History Month is about teaching ourselves fully and fairly about our history, and not just looking at it from one point of view. Black History Month challenges racism and promotes understanding by making sure that black people\'s achievements and stories are not forgotten.',
                'data' => 'January 2020',
            ],
            [
                'path_full_img' => 'assets/img/portfolio/02-full.jpg',
                'path_img' => 'assets/img/portfolio/02-thumbnail.jpg',
                'client_id' => $clients->find(2)->id,
                'category_id' => $categories->find(2)->id,
                'name' => 'Cascade',
                'content' => 'This was in 1987. It was organised by community activist and London council worker Akyaaba Addai Sebo after a colleague told him that her son had asked her, \'Mum, why can\'t I be white?\' Addai Sebo was sad to learn of the young boy\'s lack of self-esteem and identity. So he helped organise an event to promote self-pride in African and Afro-Caribbean people through positive teaching of their histories and culture.',
                'data' => 'July 2020',
            ],
            [
                'path_full_img' => 'assets/img/portfolio/03-full.jpg',
                'path_img' => 'assets/img/portfolio/03-thumbnail.jpg',
                'client_id' => $clients->find(3)->id,
                'category_id' => $categories->find(3)->id,
                'name' => 'Bigfish',
                'content' => 'This includes thinking about how we learn about history. In 2020, anti-racism protesters in the UK took down the statue of Edward Colston – a man who bought and sold enslaved people – and pushed it into the water in Bristol Harbour. Some people say acts such as these destroy our history. Others argue that the protesters have actually helped to teach history – the ugly story of a man who transported 84,000 enslaved individuals.',
                'data' => 'March 2020',
            ],
            [
                'path_full_img' => 'assets/img/portfolio/04-full.jpg',
                'path_img' => 'assets/img/portfolio/04-thumbnail.jpg',
                'client_id' => $clients->find(4)->id,
                'category_id' => $categories->find(4)->id,
                'name' => 'Bigfoot',
                'content' => 'The Black Curriculum is a group of young people who want black British history to be taught in UK schools. They say that learning about empire, movement and migration helps young people build a sense of identity and improves social cohesion. Black history is an important part of British history, and learning about it is necessary for understanding diversity and fighting racism. The Black Curriculum and groups like it are asking the UK government to include black history in lessons all year round, not just in October.',
                'data' => 'April 2020',
            ],
            [
                'path_full_img' => 'assets/img/portfolio/05-full.jpg',
                'path_img' => 'assets/img/portfolio/05-thumbnail.jpg',
                'client_id' => $clients->find(1)->id,
                'category_id' => $categories->find(5)->id,
                'name' => 'Casanova',
                'content' => 'English texts for beginners to practice reading and comprehension online and for free. Practicing your comprehension of written English will both improve your vocabulary and understanding of grammar and word order. The texts below are designed to help you develop while giving you an instant evaluation of your progress.',
                'data' => 'May 2020',
            ],
            [
                'path_full_img' => 'assets/img/portfolio/06-full.jpg',
                'path_img' => 'assets/img/portfolio/06-thumbnail.jpg',
                'client_id' => $clients->find(3)->id,
                'category_id' => $categories->find(6)->id,
                'name' => 'Batman',
                'content' => 'Prepared by experienced English teachers, the texts, articles and conversations are brief and appropriate to your level of proficiency. Take the multiple-choice quiz following each text, and you\'ll get the results immediately. You will feel both challenged and accomplished! You can even download (as PDF) and print the texts and exercises. It\'s enjoyable, fun and free. Good luck!',
                'data' => 'October 2020',
            ],
        ];
        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
