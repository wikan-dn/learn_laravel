<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Me'] );
});

// ! Blog Page Start
Route::get('/posts', function () {
    return view('posts', ['title' => 'My Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Artikel 1',
            'author' => 'Ken Dnov',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati ipsa, tempore, qui quia illo excepturi nemo consequuntur modi rerum accusantium ex sapiente corrupti nihil aliquid ab optio quo aut? Corrupti iusto voluptate quam eaque iste ullam vero qui reiciendis hic atque magni ipsa exercitationem minus, inventore dolore quasi in fuga? Aspernatur accusamus cumque illo distinctio, dolor aliquid quas asperiores eos soluta, corporis officiis mollitia, adipisci labore exercitationem debitis at iste molestias error odio? Pariatur maiores consectetur illo quae? Repellendus, cupiditate, voluptas illo asperiores et quasi perferendis laborum neque molestiae voluptatum voluptatibus assumenda exercitationem reiciendis velit dolore sed magni quisquam obcaecati! Excepturi, iusto laborum mollitia dignissimos veritatis magnam vel ratione necessitatibus, voluptatum debitis, sequi quo omnis in corporis dolorum odit eveniet ea qui. Odio repudiandae voluptatem impedit laboriosam. Ipsam quod officiis autem nesciunt voluptatum, id doloribus sed ab at ullam ut commodi iste officia provident vel, voluptatem, quas modi nisi in animi vero excepturi. Nulla sunt dolores qui iusto ratione dicta veritatis! Maiores, officiis. Iusto laborum molestias veniam error optio. Veniam deserunt odit perspiciatis sunt error possimus fugit tenetur, aut vitae molestias dolores voluptate ex. Ipsum beatae voluptate iusto minima nihil id neque corporis et deleniti at voluptas excepturi, unde ab.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Artikel 2',
            'author' => 'Ken Dnov',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit similique dolores quae amet labore pariatur eos quidem quam cumque nemo non mollitia deleniti possimus, deserunt in suscipit voluptate cum voluptatem voluptatum! Dicta alias repudiandae reprehenderit optio tempora dignissimos a repellendus unde harum, est dolorum esse nemo hic adipisci corrupti nam animi minus accusantium voluptatibus dolor doloribus sit cum voluptates. Doloremque impedit reprehenderit, asperiores hic vero atque voluptates quia quae? Est, quidem praesentium voluptatibus facere odit aut, perferendis illo ea temporibus suscipit in sed nihil atque nostrum ex quo ipsa vero mollitia ab dicta. Iusto soluta sunt at ducimus facilis explicabo inventore doloribus corrupti aperiam recusandae, blanditiis facere commodi adipisci consequuntur maxime quam, dicta earum, dignissimos alias ratione ea? Voluptatem tempora odit voluptatibus cumque maiores dicta placeat quidem velit a fugiat distinctio, aut, enim illum quas similique possimus dolorem temporibus voluptate consequatur blanditiis ea dolore ab impedit ipsa. Similique nam magnam soluta saepe corporis amet adipisci eos eum quas. Commodi sint vero fugiat quas similique explicabo rem, expedita consequatur in magni amet error officia officiis tempora exercitationem ad quo dolorem atque corporis labore porro. Eaque nostrum ducimus recusandae consectetur doloremque, eos accusantium nisi dignissimos dolorem quis suscipit deleniti laudantium qui distinctio et praesentium cupiditate amet, odio quibusdam ex consequatur eveniet? Iure ipsa praesentium reprehenderit officia aperiam, mollitia modi repudiandae excepturi at nemo totam quisquam eum eos molestias non, velit officiis iste maiores a dicta debitis alias magnam doloremque. Voluptatem, aut tempore? Unde porro corrupti est facere reprehenderit dignissimos illum earum eos?'
        ]
    ]] );
});
// ! Blog Page

// !Single Blog Start
Route::get('/posts/{slug}', function ($slug){
    $posts =  [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Artikel 1',
            'author' => 'Ken Dnov',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati ipsa, tempore, qui quia illo excepturi nemo consequuntur modi rerum accusantium ex sapiente corrupti nihil aliquid ab optio quo aut? Corrupti iusto voluptate quam eaque iste ullam vero qui reiciendis hic atque magni ipsa exercitationem minus, inventore dolore quasi in fuga? Aspernatur accusamus cumque illo distinctio, dolor aliquid quas asperiores eos soluta, corporis officiis mollitia, adipisci labore exercitationem debitis at iste molestias error odio? Pariatur maiores consectetur illo quae? Repellendus, cupiditate, voluptas illo asperiores et quasi perferendis laborum neque molestiae voluptatum voluptatibus assumenda exercitationem reiciendis velit dolore sed magni quisquam obcaecati! Excepturi, iusto laborum mollitia dignissimos veritatis magnam vel ratione necessitatibus, voluptatum debitis, sequi quo omnis in corporis dolorum odit eveniet ea qui. Odio repudiandae voluptatem impedit laboriosam. Ipsam quod officiis autem nesciunt voluptatum, id doloribus sed ab at ullam ut commodi iste officia provident vel, voluptatem, quas modi nisi in animi vero excepturi. Nulla sunt dolores qui iusto ratione dicta veritatis! Maiores, officiis. Iusto laborum molestias veniam error optio. Veniam deserunt odit perspiciatis sunt error possimus fugit tenetur, aut vitae molestias dolores voluptate ex. Ipsum beatae voluptate iusto minima nihil id neque corporis et deleniti at voluptas excepturi, unde ab.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Artikel 2',
            'author' => 'Ken Dnov',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit similique dolores quae amet labore pariatur eos quidem quam cumque nemo non mollitia deleniti possimus, deserunt in suscipit voluptate cum voluptatem voluptatum! Dicta alias repudiandae reprehenderit optio tempora dignissimos a repellendus unde harum, est dolorum esse nemo hic adipisci corrupti nam animi minus accusantium voluptatibus dolor doloribus sit cum voluptates. Doloremque impedit reprehenderit, asperiores hic vero atque voluptates quia quae? Est, quidem praesentium voluptatibus facere odit aut, perferendis illo ea temporibus suscipit in sed nihil atque nostrum ex quo ipsa vero mollitia ab dicta. Iusto soluta sunt at ducimus facilis explicabo inventore doloribus corrupti aperiam recusandae, blanditiis facere commodi adipisci consequuntur maxime quam, dicta earum, dignissimos alias ratione ea? Voluptatem tempora odit voluptatibus cumque maiores dicta placeat quidem velit a fugiat distinctio, aut, enim illum quas similique possimus dolorem temporibus voluptate consequatur blanditiis ea dolore ab impedit ipsa. Similique nam magnam soluta saepe corporis amet adipisci eos eum quas. Commodi sint vero fugiat quas similique explicabo rem, expedita consequatur in magni amet error officia officiis tempora exercitationem ad quo dolorem atque corporis labore porro. Eaque nostrum ducimus recusandae consectetur doloremque, eos accusantium nisi dignissimos dolorem quis suscipit deleniti laudantium qui distinctio et praesentium cupiditate amet, odio quibusdam ex consequatur eveniet? Iure ipsa praesentium reprehenderit officia aperiam, mollitia modi repudiandae excepturi at nemo totam quisquam eum eos molestias non, velit officiis iste maiores a dicta debitis alias magnam doloremque. Voluptatem, aut tempore? Unde porro corrupti est facere reprehenderit dignissimos illum earum eos?'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
// !Single Blog End

Route::get('/contact', function () {
    return view('contact', ['title' => 'My Contact'] );
});

