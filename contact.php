<?php require_once('templates/header.php'); ?>



<main class="main container">
    <!-- Main  -->
    <div class="container">
        <main class="row">
            <!-- Title -->
            <section class="my-md-2">
                <h1 class="text-center">Contact</h1>
            </section>
            <!--  start Contact -->
            <section class="col-12 my-md-2">
                <div class="row d-flex justify-content-center my-md-2 mx-1">
                    <!-- Address details -->
                    <article class="col-md-5 address-main rounded p-4 m-4">
                        <h2 class="p-3">EcoRide</h2>
                        <ul class="p-3 list-unstyled mt-3">
                            <li8>8 rue Sarah Bernhardt</li>
                                <li>92600 Asnières-sur-Seine</li>
                                <li class="mt-4">
                                    <i class="fa-solid fa-mobile-screen-button fa-lg" style="color: #efeaea;"></i>
                                    <span>01459876503</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-envelope" style="color: hsl(0, 15%, 95%);"></i>
                                    <span>contact@covoiturage-ecologique.com</span>
                                </li>
                                <li class="mt-5">
                                    <button type="button" class="btn custom-btn w-100" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Voir sur la carte</button>
                                </li>
                        </ul>
                    </article>

                    <!-- Contact form -->
                    <article class="col-md-5 contact-form rounded p-4 m-4">
                        <h2 class="p-3">Formulaire de contact</h2>
                        <form action="/success" class="form p-3" enctype="multipart/form-data" method="POST"
                            name="contact">
                            <input type="hidden" name="form-name" value="contact">
                            <!-- Titre -->
                            <div class="input-group mb-3">
                                <span class="input-group-text">Titre :</span>
                                <input type="text" class="form-control" id="Titre" name="titre" aria-label="titre"
                                    aria-describedby="titre" required="true">
                            </div>

                            <!-- Email -->
                            <div class="input-group mb-3">
                                <span class="input-group-text">Email :</span>
                                <input type="email" class="form-control" id="email" name="email" aria-label="email"
                                    aria-describedby="email" required="true">
                            </div>
                            <!-- Message -->
                            <div class="input-group">
                                <span class="input-group-text">Message :</span>
                                <textarea class="form-control" id="message" name="message" aria-label="message"
                                    required="true"></textarea>
                            </div>
                            <!-- Button -->
                            <button class="btn custom-btn mt-3 w-100" type="submit">Envoyer</button>
                        </form>
                    </article>
                </div>
            </section>
        </main>
    </div>

    <!----end contact-->

    <!--  start Modal for the location of the studio -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Localisation de Covoiturage :</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d5243.830239269306!2d2.3163475!3d48.9170094!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1734803428359!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn custom-btn" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!--  end Modal for the location of the studio-->

</main>

<?php require_once('templates/footer.php'); ?>