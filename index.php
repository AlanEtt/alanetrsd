<?php
// Data random untuk portofolio
$profile = [
    'nama' => 'Ytta GenZ',
    'profesi' => 'Web Developer & Content Creator',
    'bio' => 'Pecinta teknologi, kopi, dan musik indie. Suka ngoding sambil dengerin lagu random. Hidup untuk berkarya dan berbagi inspirasi!',
    'skills' => ['HTML', 'CSS', 'PHP', 'JavaScript', 'UI/UX', 'Memes', 'Public Speaking'],
    'sosmed' => [
        'Instagram' => 'https://instagram.com/ytta.genz',
        'Twitter' => 'https://twitter.com/ytta_genz',
        'GitHub' => 'https://github.com/ytta-genz',
    ],
    'foto' => 'https://randomuser.me/api/portraits/men/32.jpg',
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $profile['nama'] ?> | Portofolio</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;400&family=Fira+Code&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="card">
            <img src="<?= $profile['foto'] ?>" alt="Foto Profil" class="profile-img">
            <h1><?= $profile['nama'] ?></h1>
            <h2><?= $profile['profesi'] ?></h2>
            <p class="bio">"<?= $profile['bio'] ?>"</p>
            <div class="skills">
                <h3>Skills</h3>
                <ul>
                    <?php foreach($profile['skills'] as $skill): ?>
                        <li>#<?= $skill ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="sosmed">
                <h3>Social Media</h3>
                <ul>
                    <?php foreach($profile['sosmed'] as $nama => $link): ?>
                        <li><a href="<?= $link ?>" target="_blank">@<?= $nama ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <footer>
            <span>✨ Dibuat dengan <span class="love">&#10084;</span> oleh <?= $profile['nama'] ?> | Gen-Z Style 2024 ✨</span>
        </footer>
    </div>
</body>
</html> 