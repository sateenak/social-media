<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting
{
    private static $poste = [
        [
            "title" => "judul pertama",
            "author" => "mdwiastika",
            "slug" => "judul-pertama",
            "body" => "    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus fuga, quo magni eum excepturi quidem. Quisquam beatae odio, quis deserunt praesentium commodi nulla, delectus mollitia, id officiis iure incidunt et Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, tempora quas aut fuga expedita deserunt ea nisi cupiditate in labore odit dignissimos dolorem totam debitis id libero suscipit, ipsum facilis? Explicabo ipsum blanditiis voluptate voluptates adipisci aspernatur suscipit eveniet, praesentium facilis alias magni! Molestias beatae obcaecati quae necessitatibus ullam veritatis modi suscipit. Sit temporibus aperiam, fugiat eius aspernatur doloremque nam asperiores assumenda ad rem aliquid. Officiis, eligendi eius aspernatur repudiandae praesentium accusamus fugiat molestias maxime, expedita harum laudantium corporis reiciendis officia iusto quod voluptatum nesciunt facere. Vel officiis illum quibusdam eveniet beatae autem excepturi in vero similique, amet, necessitatibus at animi suscipit consequuntur deleniti cupiditate culpa ab voluptate et. Temporibus fugit officia autem consequuntur quibusdam nisi reprehenderit quisquam neque non."
        ],
        [
            "title" => "judul kedua",
            "author" => "asuja",
            "slug" => "judul-kedua",
            "body" => "    Lorem ipsum, dolor sit amet consectetur adipisicing elit. At tempore suscipit, alias repellendus nisi in sunt commodi! Amet soluta labore error, voluptatum consequatur modi reprehenderit. Magnam repellat distinctio saepe, nihil vero, sit explicabo incidunt officiis optio iusto aut rerum placeat minima mollitia quod dolore culpa id illum harum error suscipit doloribus assumenda. Nulla suscipit magnam nisi molestias dicta quos aliquam! Recusandae, ex aut! Voluptatem, dolores? Voluptas, facere eos non cumque quibusdam voluptatem in magnam explicabo similique fugit doloribus?
            "
        ]
    ];
    public static function all()
    {
        return collect(self::$poste);
    }
    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $single) {
        //     if ($single["slug"] === $slug) {
        //         $post = $single;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
