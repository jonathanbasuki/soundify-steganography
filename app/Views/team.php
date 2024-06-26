<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= base_url('/assets/css/team_style.css'); ?>">

    <title><?= $data['title']; ?></title>
</head>

<body>
    <div class="container">
        <div class="header__container">
            <h1>Meet our Team behind Soundify</h1>
        </div>

        <div class="card__container">
            <article class="card__article">
                <img src="<?= base_url('/assets/img/team/sufyan.jpeg'); ?>" alt="image" class="card__img">

                <div class="card__data">
                    <span class="card__description">2210511005</span>
                    <h2 class="card__title">Sufyan Al Afi</h2>
                    <a href="https://id.linkedin.com/in/sufyan-al-afi-59952a249" class="card__button">Linkedin</a>
                </div>
            </article>

            <article class="card__article">
                <img src="<?= base_url('/assets/img/team/jonathan.jpg'); ?>" alt="image" class="card__img">

                <div class="card__data">
                    <span class="card__description">2210511015</span>
                    <h2 class="card__title">Jonathan Christoper Basuki</h2>
                    <a href="https://www.linkedin.com/in/jonathanbasuki/" class="card__button">Linkedin</a>
                </div>
            </article>

            <article class="card__article">
                <img src="<?= base_url('/assets/img/team/andes.jpeg'); ?>" alt="image" class="card__img">

                <div class="card__data">
                    <span class="card__description">2210511029</span>
                    <h2 class="card__title">Andes Kurnia</h2>
                    <a href="https://id.linkedin.com/in/andes-kurnia-746131252" class="card__button">Linkedin</a>
                </div>
            </article>
        </div>

        <div class="footer__container">
            <a href="<?= base_url(); ?>">
                back to Soundify
            </a>
        </div>
    </div>
</body>

</html>