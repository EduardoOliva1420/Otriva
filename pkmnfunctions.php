<?php
function generatePokemonCard($pokemon) {
    $typeClass = strtolower(explode('/', $pokemon['type'])[0]);

    return "
    <div class='pokemon-card $typeClass'>
        <div class='card-header'>
            <div class='pokemon-name'>{$pokemon['name']}</div>
            <div class='hp'>HP {$pokemon['hp']}</div>
        </div>

        <div class='pokemon-image'>
            <img src='{$pokemon['image']}' alt='{$pokemon['name']}'/>
        </div>

        <div class='pokemon-details'>
            <div class='details-row'>
                <span class='label'>Type</span>
                <span>{$pokemon['type']}</span>
            </div>
            <div class='details-row'>
                <span class='label'>Height</span>
                <span>{$pokemon['height']}</span>
            </div>
            <div class='details-row'>
                <span class='label'>Weight</span>
                <span>{$pokemon['weight']}</span>
            </div>

            <div class='pokemon-power'>
                <div class='power-title'>Pokémon Power: {$pokemon['power_name']}</div>
                <p>{$pokemon['power_desc']}</p>
            </div>

            <div class='attack'>
                <div class='attack-title'>{$pokemon['attack_name']}</div>
                <p>{$pokemon['attack_desc']}</p>
            </div>

            <div class='description'>
                {$pokemon['description']}
            </div>

            <div class='stats'>
                <div class='stat'>
                    <div class='stat-label'>Weakness</div>
                    <div class='stat-value weakness'>{$pokemon['weakness']}</div>
                </div>
                <div class='stat'>
                    <div class='stat-label'>Resistance</div>
                    <div class='stat-value resistance'>{$pokemon['resistance']}</div>
                </div>
                <div class='stat'>
                    <div class='stat-label'>Retreat</div>
                    <div class='stat-value retreat-cost'>{$pokemon['retreat']}</div>
                </div>
            </div>
        </div>

        <div class='card-footer'>
            {$pokemon['footer']}
        </div>
    </div>
    ";
}
?>