<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marce Ortiz</title>
    <link rel="stylesheet" href="pkmn.css">
</head>
<body>
    
</body>
</html>
<?php
require 'pkmnfunctions.php'; 

$pokemonList = [
    [
        'name'        => 'Charmander',
        'hp'          => '80',
        'type'        => 'Fire',
        'height'      => '0.6 m',
        'weight'      => '8.5 kg',
        'power_name'  => 'Flame',
        'power_desc'  => 'Once during your turn, you may discard a Fire Energy card to deal 20 damage to an opponent&#39;s Pokémon.',
        'attack_name' => 'Ember',
        'attack_desc' => 'Shoots fiery flames at the Defending Pokémon. This attack may leave the opponent&#39;s Pokémon burned.',
        'description' => 'Prefers hot places. It is said that when it rains, steam comes from the tip of its tail.',
        'weakness'    => '&#128167;',  // 💧
        'resistance'  => '-20',
        'retreat'     => '●',
        'image'       => 'charmander.jpg',
        'footer'      => 'Illustration by Ken Sugimori • &#169;1995-2023 Nintendo/Creatures Inc./GAME FREAK inc.'
    ],
    [
        'name'        => 'Bulbasaur',
        'hp'          => '90',
        'type'        => 'Grass/Poison',
        'height'      => '0.7 m',
        'weight'      => '6.9 kg',
        'power_name'  => 'Growth',
        'power_desc'  => 'Once during your turn, you may heal 20 damage from this Pokémon.',
        'attack_name' => 'Vine Whip',
        'attack_desc' => 'Strikes the Defending Pokémon with whiplike vines to cause damage.',
        'description' => 'A strange seed was planted on its back at birth. The plant sprouts and grows with this Pokémon.',
        'weakness'    => '&#128293;',  // 🔥
        'resistance'  => '-20',
        'retreat'     => '●',
        'image'       => 'bulbasur.jpg',
        'footer'      => 'Illustration by Ken Sugimori • &#169;1995-2023 Nintendo/Creatures Inc./GAME FREAK inc.'
    ],
    [
        'name'        => 'Squirtle',
        'hp'          => '70',
        'type'        => 'Water',
        'height'      => '0.5 m',
        'weight'      => '9.0 kg',
        'power_name'  => 'Shell',
        'power_desc'  => 'Reduces damage from attacks directed at this Pokémon by 20.',
        'attack_name' => 'Water Gun',
        'attack_desc' => 'Shoots water at high pressure to cause damage to the Defending Pokémon.',
        'description' => 'When it retracts its long neck into its shell, it shoots water at an incredible pressure.',
        'weakness'    => '⚡',
        'resistance'  => '-20',
        'retreat'     => '●',
        'image'       => 'squirtle.jpg',
        'footer'      => 'Illustration by Ken Sugimori • &#169;1995-2023 Nintendo/Creatures Inc./GAME FREAK inc.'
    ],
    [
        'name'        => 'Pikachu',
        'hp'          => '60',
        'type'        => 'Electric',
        'height'      => '0.4 m',
        'weight'      => '6.0 kg',
        'power_name'  => 'Static Electricity',
        'power_desc'  => 'When this Pokémon is damaged by an attack, the Attacking Pokémon may become paralyzed.',
        'attack_name' => 'Thunder Shock',
        'attack_desc' => 'Fires an electric shock that causes damage to the Defending Pokémon.',
        'description' => 'When several of these Pokémon gather, their energy can cause lightning storms.',
        'weakness'    => '⛰️',
        'resistance'  => '-20',
        'retreat'     => '●',
        'image'       => 'pikachu.jpg',
        'footer'      => 'Illustration by Ken Sugimori • &#169;1995-2023 Nintendo/Creatures Inc./GAME FREAK inc.'
    ],
    [
        'name'        => 'Drowzee',
        'hp'          => '70',
        'type'        => 'Psychic',
        'height'      => '1.0 m',
        'weight'      => '32.4 kg',
        'power_name'  => 'Insomnia',
        'power_desc'  => 'This Pokémon cannot be put to sleep while in play.',
        'attack_name' => 'Confusion',
        'attack_desc' => 'A weak telekinetic attack that may leave the Defending Pokémon confused.',
        'description' => 'If you sleep near a Drowzee, it may eat your dreams. It seems to particularly enjoy funny dreams.',
        'weakness'    => '&#128123;',  // 👻
        'resistance'  => '-20',
        'retreat'     => '● ●',
        'image'       => 'drowzee.jpg',
        'footer'      => 'Illustration by Ken Sugimori • &#169;1995-2023 Nintendo/Creatures Inc./GAME FREAK inc.'
    ],
];

echo '<div class="container">';

foreach ($pokemonList as $pokemon) {
    echo generatePokemonCard($pokemon); 
}

echo '</div>';
?>
