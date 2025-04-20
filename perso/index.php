<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue sur le serveur Alwaysdata de Pauline</title>
    <style>
        body {
            background-image: url('https://paulinette88.alwaysdata.net/images/backgroundflower.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #FFC3C3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', 'Arial', sans-serif;
        }

        .welcome-container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            max-height: 90vh;
            overflow: hidden;
        }

        h1 {
            color: #B04664;
            margin-bottom: 20px;
        }

        p {
            color: #444;
            margin-bottom: 20px;
        }

        .scroll-list {
            max-height: 300px;
            overflow-y: auto;
            padding-right: 10px;
            margin-top: 20px;
            border: 1px solid #F2B7B5;
            border-radius: 10px;
            background-color: #fffafc;
        }

        ul {
            list-style: none;
            padding: 15px 20px;
            margin: 0;
            text-align: left;
        }

        li {
            margin-bottom: 10px;
            opacity: 0;
            transform: translateY(10px);
            animation: fadeInUp 0.6s ease forwards;
        }

        /* Animation décalée pour chaque ligne */
        <?php for ($i = 1; $i <= 20; $i++): ?>
        li:nth-child(<?= $i ?>) { animation-delay: <?= $i * 0.1 ?>s; }
        <?php endfor; ?>

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        a {
            text-decoration: none;
            color: #DB7B79;
            font-weight: bold;
            transition: color 0.3s;
        }

        a:hover {
            color: #000000;
        }

        .secret-link {
            color: inherit;
            text-decoration: none;
            font-weight: bold;
        }

        .secret-link:hover {
            color: #aaa;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Bienvenue sur mes pages perso</h1>
        <p>Cette page vous sert de sommaire pour accéder à mes travaux perso <a href="../" class="secret-link" title="Coin secret">💐</a></p>
        <div class="scroll-list">
            <ul>
                <?php
                    $fichiers = scandir('.');
                    $pages = array_filter($fichiers, function($fichier) {
                        return is_file($fichier) && preg_match('/\.(html|php)$/', $fichier) && $fichier !== 'index.php';
                    });
                    natcasesort($pages);
                    foreach ($pages as $page) {
                        $titre = ucwords(str_replace(['_', '-'], ' ', pathinfo($page, PATHINFO_FILENAME)));
                        echo "<li><a href=\"$page\">$titre</a></li>";
                    }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>
