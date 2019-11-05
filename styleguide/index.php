<?php include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="/assets/css/patterns.css?v0.4" />

  <title>Styleguide</title>
</head>
<body>



<header class="p-header">
  <div class="p-container">
    <h1 class="p-title">My Language School Patterns</h1>
    <div>X</div>
  </div>
</header>

<div class="p-container">
  <section class="p-section">
    <div class="p-section__header">
      <h2 class="p-section__title">Colours</h2>
    </div>

    <div class="p-section__body">
      <ul class="p-colour-list">
        <li class="p-colour p-colour--text"></li>
        <li class="p-colour p-colour--theme"></li>
      </ul>
    </div>
  </section>

  <section class="p-section">
    <div class="p-section__header">
      <h2 class="p-section__title">Typography</h2>
    </div>

    <div class="p-section__body">
      <div class="p-section__subsection">
        <h3 class="p-section__subtitle">XL</h3>
        <div class="p-type__container">
          <p class="p-type--xl">Phasellus eget felis quam</p>
        </div>
      </div>

      <div class="p-section__subsection">
        <h3 class="p-section__subtitle">L</h3>
        <div class="p-type__container">
          <p class="p-type--l">Suspendisse condimentum leo ut dapibus condimentum</p>
        </div>
      </div>

      <div class="p-section__subsection">
        <h3 class="p-section__subtitle">M</h3>
        <div class="p-type__container">
          <p class="p-type--m">Vivamus massa odio, dignissim ac ante at, euismod dignissim risus. Cras ut blandit lorem. Maecenas nisl quam, cursus nec aliquet facilisis, mattis id augue. Fusce semper odio et gravida interdum.</p>
        </div>
      </div>

      <div class="p-section__subsection">
        <h3 class="p-section__subtitle">S</h3>
        <div class="p-type__container">
          <p class="p-type--s">Suspendisse at gravida dolor.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="p-section">
    <div class="p-section__header">
      <h2 class="p-section__title">Forms</h2>
    </div>

    <div class="p-section__body">
      <div class="p-section__subsection p-form-group">
        <label for="" class="c-label">Text Input</label>
        <input type="text" class="c-input">
      </div>

      <div class="p-section__subsection p-form-group">
        <label for="" class="c-label">Textarea</label>
        <textarea name="" id="" class="c-textarea"></textarea>
      </div>

      <div class="p-section__subsection p-form-group">
        <label for="" class="c-label">Select</label>
        <select name="" id="" class="c-select">
          <option value="">Option One</option>
        </select>
      </div>

      <div class="p-section__subsection p-form-group">
        <label for="" class="c-label">Form Error</label>
        <input type="text" class="c-input">
      </div>
    </div>
  </section>

  <section class="p-section">
    <div class="p-section__header">
      <h2 class="p-section__title">Buttons</h2>
    </div>

    <div class="p-section__body">
      <div class="p-section__subsection">
        <h3 class="p-section__subtitle">Theme</h3>
        <a href="" class="c-btn c-btn--theme">Button Text</a>
      </div>
    </div>
  </section>
</div>

<footer class="p-footer">&copy; <?php echo Date('Y'); ?> <a href="https://www.madeinbeta.co.uk">Made in Beta</a> </footer>