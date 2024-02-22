<!doctype html>
<html lang="pt">

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="<?php bloginfo('template_url') ?>/manifest.json">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="container-fluid">
    <header class="header">
      <nav class="header__nav">
        <div class="header__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/166x108-Logo.webp" alt="#" class="header__logo-img">
        </div>
        <ul class="header__nav-list">
          <li class="header__nav-item">
            <a href="#" class="header__nav-link">Quem Somos</a>
          </li>
          <li class="header__nav-item">
            <a href="#" class="header__nav-link">Nossa Clínica</a>
          </li>
          <li class="header__nav-item">
            <a href="#" class="header__nav-link">Serviços Oferecidos</a>
          </li>
          <li class="header__nav-item">
            <a href="#" class="header__nav-link">Condições Clínicas</a>
          </li>
          <li class="header__nav-item">
            <a href="#" class="header__nav-link">Medicamentos</a>
          </li>
          <li class="header__nav-item">
            <a href="#" class="header__nav-link">Agendamentos</a>
          </li>
          <li class="header__nav-item">
            <a href="/blog" class="header__nav-link">Blog</a>
          </li>
        </ul>
      </nav>
    </header>
  </div>

  <div class="separator"></div>