<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "First Post Title",
            "slug" => "first-post-title",
            "author" => "Fatsha",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum rerum, corporis sunt magnam iste labore nobis doloremque asperiores autem saepe mollitia dolor minima aliquam dignissimos et! Excepturi amet neque nostrum porro facilis consequatur totam in ullam officia? Ducimus veritatis saepe laudantium nobis quis voluptas eligendi, numquam, asperiores, ullam a praesentium?"
        ],
        [
            "title" => "Second Post Title",
            "slug" => "second-post-title",
            "author" => "Gaghana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus fugit autem eos iusto molestias sunt nemo. Dolorum modi vitae quo repellendus, voluptate natus, nihil iure blanditiis quibusdam vero expedita tenetur aperiam ducimus pariatur impedit alias excepturi eum autem sit! Voluptates laudantium repudiandae, minima dolores illo molestias, quibusdam tenetur minus doloribus, sequi neque ullam deserunt culpa fugit eaque beatae reprehenderit ipsum fugiat ea eum dolor quam assumenda! Eos, explicabo dicta saepe ad itaque odio laboriosam tempore labore obcaecati nemo consectetur illo, voluptas ipsam iure fuga vel unde, repellendus deleniti deserunt veniam!"
        ],
        [
            "title" => "Third Post Title",
            "slug" => "third-post-title",
            "author" => "Jamel",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente sed iste voluptates, tempore quia, fugit est harum laudantium repellat iusto unde commodi cum ea asperiores vero molestias, quos itaque cupiditate laboriosam dolore ad! Rem, soluta illum. Eum laborum ipsum ratione consectetur laudantium molestiae corporis, eius eligendi suscipit, ex cumque deserunt modi voluptas neque nihil ab eveniet unde, ducimus pariatur eos dolorem reprehenderit fuga veniam. Voluptates, consectetur unde? Dolorum vero eum, sequi repellendus perspiciatis maxime inventore. Molestiae, ad! Earum quisquam nam voluptatibus repellat fuga numquam, aspernatur vero culpa mollitia maxime consectetur ea beatae reprehenderit architecto, pariatur nulla inventore eaque dicta sit."
        ],
        [
            "title" => "Fourth Post Title",
            "slug" => "fourth-post-title",
            "author" => "Ichsan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quibusdam, exercitationem sed autem molestiae, nemo ullam error voluptatibus, eligendi facilis eius? In quasi a corporis qui ullam animi alias libero, odit reprehenderit officia quam explicabo iusto ut provident odio consequuntur quo, veniam quia exercitationem dolorem nobis ratione nisi quidem? Adipisci consequatur sint accusantium atque magnam veniam perspiciatis nesciunt qui numquam dignissimos iste provident expedita minus omnis, aliquam debitis aut eos explicabo! Quibusdam nam ea veniam. Doloremque maiores aliquam id dolorum, nobis dolorem ratione tempora commodi facilis eius earum eligendi veniam ipsum cum non ipsam placeat. Quo eveniet itaque est obcaecati!"
        ]
    ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
