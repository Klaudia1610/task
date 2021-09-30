
  <?php get_header(); ?>

  <?php get_template_part('template-parts/intro', 'carousel'); ?>

    <section id="contact">
      <div class="container">
<h1 class="contact_heading">Formularz kontaktowy</h1>

        <div class="row">
          <div class="col-lg-1">

          </div>
          <div class="col-lg-5 col-md-6 col-sm-12 kyky">
            <h1 class="contact_detail">Osoba do kontaktu</h1>
            <h3 class="contact_name">John Doe</h3>
            <h3 class="contact_name_position">Konsultant</h3>
            <p class="contact_email">e-mail: john.doe@gmail.com</p>
            <img src="<?php bloginfo('template_directory')?>/assets/img/kontakt.jpg" alt="Konsultant" class="img-fluid contact_image">
          </div>

          <div class="col-lg-5 col-md-6 col-sm-12">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Twoje imię i nazwisko" data-rule="minlen:4" data-msg="Wprowadź minimum 4 znaki" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Twój e-mail bznesowy" data-rule="email" data-msg="Wprowadź poprawny adres email" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control form-control-message-height" name="message" rows="5" data-rule="required" data-msg="Wpisz treść wiadomości" placeholder="Dzień dobry, chciałbym uzyskać więcej informacji. Proszę o kontakt."></textarea>
                  <div class="validate"></div>
                </div>


                <div class="checkbox">
                <input type="checkbox" name="checkbox" value="value" id="checkbox">
                <label for="checkbox">Wyrażam zgodę na przetwarzanie moich danych osobowych w celach marketingowych.
                <a class="checkbox-link" data-toggle="collapse" href="#privacy-policy">
                  WIĘCEJ
                </a></label>
                </div>
                <div><button type="submit">Więcej</button></div>
              </form>
            </div>
          </div>
          <div class="collapse" id="privacy-policy">
            <div>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Leo nibh tempor urna elementum eget in dui non. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit.  </div>
          </div>
        </div>
      </div>
    </section>

<?php get_template_part('template-parts/cookies', 'popup'); ?>


<script src="<?php bloginfo('template_directory'); ?>/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<!-- <script src="<?php bloginfo('template_directory'); ?>/assets/vendor/waypoints/jquery.waypoints.min.js"></script> -->

<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
