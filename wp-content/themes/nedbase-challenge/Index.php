<?php
// Laad de JSON-data
$data = json_decode(file_get_contents('data.json'), true);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Filter Tool - Nedclass</title>
    <link rel="stylesheet" href="wp-content/themes/nedbase-challenge/css/style.css">

</head>
<body>

<!-- Header -->

<?php include 'wp-content/themes/nedbase-challenge/templates/Header.php'; ?>

<!-- Hero Section -->

<?php include 'wp-content/themes/nedbase-challenge/templates/Hero-section.php'; ?>


<!-- School Filter Tool -->

<div class="container">
    <div class="school-filter-tool">
        <!-- Introductie tekst -->
        <div class="introductie-tekst">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        
        <!-- Keuze formulier -->
        <div class="keuze-formulier">
        <!-- Startniveau -->
        <div id="startniveau">
            <h6>Wat is je startniveau?</h2>
            <div class="button-group">
            <?php foreach ($data as $level => $locations): ?>
                    <button class="level" data-level="<?= $level; ?>"><?= $level; ?></button>
            <?php endforeach; ?>
            </div>
        </div>

        <!-- Locaties -->
        <div id="locaties">
            <h6>Op welke locatie ga je school volgen?</h2>
            <!-- Locaties worden later door JavaScript ingevuld -->
            <div class="button-group">
                 <?php 
                // Unieke locaties ophalen uit de data
                $uniqueLocations = [];
                foreach ($data as $level => $locations) {
                    foreach ($locations as $location => $details) {
                        if (!in_array($location, $uniqueLocations)) {
                            $uniqueLocations[] = $location;
                        }
                    }
                }
                ?>
            </div>
            <div class="button-group">
                <?php
                // Locatie knoppen genereren
                foreach ($uniqueLocations as $location): ?>
                    <button class="location" data-location="<?= htmlspecialchars($location); ?>" disabled><?= htmlspecialchars($location); ?></button>
                <?php endforeach; ?>
            </div>  
        </div>
        </div>

        

        <!-- Resultaten -->
        <div id="resultaat">
            <p class="curly-type-h2">Jouw schoolcarrière</p>
            <h1>In een handomdraai op een rijtje</h1>
            <div>
                <ul class="result-container" id="route-info"></ul>
            </div>
        </div>
    </div>
</div>
    
    <script>
        const data = <?= json_encode($data); ?>;
    </script>
    <script src="script.js"></script>
</body>
</html>