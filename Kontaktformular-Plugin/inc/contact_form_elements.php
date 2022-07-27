<?php

function contactForm() {
    $content = '';
    $content .= '<div class="formContainer">';
    $content .= '<form method="post" action="https://hamed-naderi.de/message/">';

    $content .= '<div class="theElements">';
    $content .= '<div class="teil-25">';
    $content .= '<label for="name"><b>Vollständiger Name</b></label>';
    $content .= '</div>';
    $content .= '<div class="teil-75">';
    $content .= '<input class="theInput" type="text" id="name" name="full_name" placeholder="Ihr Name.." required>';
    $content .= '</div>';
    $content .= '</div>';

    $content .= '<div class="theElements">';
    $content .= '<div class="teil-25">';
    $content .= '<label for="email"><b>Email-Adresse</b></label>';
    $content .= '</div>';
    $content .= '<div class="teil-75">';
    $content .= '<input class="theInput" type="email" id="email" name="email_address" placeholder="Ihre E-Mail Adresse.." required>';
    $content .= '</div>';
    $content .= '</div>';

    $content .= '<div class="theElements">';
    $content .= '<div class="teil-25">';
    $content .= '<label for="tel"><b>Geburtsdatum</b></label>';
    $content .= '</div>';
    $content .= '<div class="teil-75">';
    $content .= '<input class="theInput" type="date" id="tel" name="date_of_birth" placeholder="Ihr Geburtsdatum.." required> <br><br>';
    $content .= '</div>';
    $content .= '</div';

    $content .= '<div class="theElements">';
    $content .= '<div class="teil-25">';
    $content .= '<label for="continent"><b>Gewünschtes Reiseziel</b></label>';
    $content .= '</div>';
    $content .= '<div class="teil-75">';
    $content .= '<select class="theInput" name="the_Continent" id="continent">';
    $content .= '<option selected="selected">Kontinent auswählen</option>';
    $content .= '</select>';
    $content .= '<select class="theInput" name="the_Country" id="country">';
    $content .= '<option selected="selected">Bitte wählen Sie zuerst einen Kontinent aus</option>';
    $content .= '</select>';
    $content .= '<select class="theInput" name="the_City" id="city">';
    $content .= '<option selected="selected">Bitte wählen Sie zuerst ein Land aus</option>';
    $content .= '</select><br><br>';
    $content .= '</div>';
    $content .= '</div>';

    $content .= '<div class="theElements">';
    $content .= '<div class="teil-25">';
    $content .= '<label for="subject"><b>Mitteilung</b></label>';
    $content .= '</div>';
    $content .= '<div class="teil-75">';
    $content .= '<textarea class="theInput" id="subject" name="comments" placeholder="Ihre Nachricht.."></textarea>';
    $content .= '</div>';
    $content .= '</div>';

    $content .= '<div class="theElements">';
    $content .= '<input class="theSubmit" type="submit" name="submit_btn" value="Submit">';
    $content .= '</div>';

    $content .= '</form>';
    $content .= '</div>';

    return $content;
}

?>
