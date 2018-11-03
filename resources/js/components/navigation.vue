<template>
<header>
<section class="section is-marginless is-paddingless">
    <div class="column">
        <div class="logo column is-three-fifths is-offset-one-fifth">
            <a href="/">JAWARA</a></div>
        <div class="sublogo column is-three-fifths is-offset-one-fifth">ROTI & KUE</div>
        <div class="topnav is-clipped">
            <a href="/" class="active">Home</a>
            <a href="/about">About</a>
            <a href="/catalog">Catalog</a>	
            <a href="/contact">Contact</a>
        </div>

        <div class="column">
            <div class="navbar is-transparent">
                <div class="navbar-brand">
                    <div class="navbar-burger burger is-centered" data-target="navbarExampleTransparentExample">
                    <span></span>
                    <span></span>
                    <span></span>
                    </div>
                </div>

                <div id="navbarExampleTransparentExample" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="topnav navbar-item" href="/">Home</a>
                        <a class="topnav navbar-item" href="/about">About</a>
                        <a class="topnav navbar-item" href="/catalog">Catalog</a>	
                        <a class="topnav navbar-item" href="/contact">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</header>
</template>

<script>

document.addEventListener('DOMContentLoaded', () => {

  // Get all "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach( el => {
      el.addEventListener('click', () => {

        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const $target = document.getElementById(target);

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

});

</script>
