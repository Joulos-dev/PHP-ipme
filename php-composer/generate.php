<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=faker_demo;charset=utf8',
    'root',
    ''
);

require './vendor/autoload.php';
use Faker\Factory;

$faker = Factory::create("fr_FR");


for($i=0;$i<intval($_POST['generer']);$i++) {
    $sql = "INSERT INTO products (name, description, price,	is_available, created_at, updated_at, category, image_url) VALUES (:name, :description, :price, :is_available, :created_at, :updated_at, :category, :image_url)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'name' => $faker->sentence(3),
        'description' => $faker->sentence(9),
        'price' => $faker->numberBetween(5, 500),
        'is_available' => $faker->boolean(80),
        'created_at' => $faker->dateTimeBetween('-5 years', '-5 month')->format('Y-m-d H:i:s'),
        'updated_at' => $faker->dateTimeBetween('-5 month', 'now')->format('Y-m-d H:i:s'),
        'category' =>["Books", "Electronics", "Toys", "Clothing", "Furniture"][$faker->numberBetween(1,4)],
        'image_url' =>$faker->imageUrl()
    ]);
}




