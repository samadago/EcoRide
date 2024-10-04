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
                            <li>Rue de la Forêt, Brocéliande, France</li>
                            <li>75012 PARIS</li>
                            <li class="mt-4">
                                <i class="fa-solid fa-mobile-screen-button fa-lg" style="color: #efeaea;"></i>
                                <span>014598765</span>
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
                                <input type="text" class="form-control" id="Titre" name="titre"
                                       aria-label="titre" aria-describedby="titre" required="true">
                            </div>

                            <!-- Email -->
                            <div class="input-group mb-3">
                                <span class="input-group-text">Email :</span>
                                <input type="email" class="form-control" id="email" name="email"
                                       aria-label="email" aria-describedby="email" required="true">
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Localisation du Zoo :</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center">


                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3369.271192415687!2d1.6799388776633897!3d47.002222364586075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fb125221cd1419%3A0x94370e49310b3869!2s1%20Rte%20de%20Boug%C3%A8s%20le%20Ch%C3%A2teau%2C%2036110%20Bretagne!5e0!3m2!1sen!2sfr!4v1721144130279!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


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
