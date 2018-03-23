<?php
const PAGE_NAME = 'Contact';
require_once('views/page_top.php');

$en_post = $_SERVER ['REQUEST_METHOD'] === 'POST';
$validation = array(
    'firstname' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => 'First Name have at lent 2 champs',
    ),
    'lastname' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => 'First Name have at lent 2 champs',
    ),
    'email' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => 'L\'adresse courriel n\'est pas valide',
    ),

);

if ($en_post){

    $validation['firstname']['value'] = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    $validation['firstname']['is_valid'] = strlen($validation['firstname']['value']) >= 2;


    $validation['lastname']['value'] = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    $validation['lastname']['is_valid'] = strlen($validation['lastname']['value']) >= 2;


    $validation['email']['value'] = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $validation['email']['is_valid'] = (false !== $validation['email']['value']);


    $form_valid = $validation['firstname']['is_valid']
        && $validation['lastname']['is_valid']
        && $validation['email']['is_valid'];

    if ($form_valid) {
        header('Location: emailreceived .php?msg='.urlencode('Merci, vous êtes inscrits sur le site'));
        exit;
    }


}


?>

    <main>
        <h1>Nous joindre</h1>
        <div itemscope itemtype="http://schema.org/Store" id="wrapcontact" class="row">
            <div id="formdiv">
                <form method="post">
                    <div id="filds" >
                        <fieldset>
                            <div>
                                <label for="firstname">Firstname</label>
                                <input type="text" name="firstname" id="firstname"  placeholder="Prénom"
                                       class="<?= $en_post && ! $validation['firstname']['is_valid'] ? 'invalid' : '' ?>"
                                       value="<?= $en_post ? $validation['firstname']['value'] : '' ?>"
                                />
                                <?php
                                if ($en_post && ! $validation['firstname']['is_valid'] ) {
                                    echo '<span>', $validation['firstname']['err_msg'] ,'</span>';
                                }
                                ?>
                            </div>
                            <div>
                                <label for="lastname">Lastname</label>
                                <input type="text" name="lastname" id="lastname" placeholder="Nom"
                                       class="<?= $en_post && ! $validation['lastname']['is_valid'] ? 'invalid' : '' ?>"
                                       value="<?= $en_post ? $validation['lastname']['value'] : '' ?>"
                                />
                                <?php
                                if ($en_post && ! $validation['lastname']['is_valid'] ) {
                                    echo '<span>', $validation['lastname']['err_msg'] ,'</span>';
                                }
                                ?>
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" placeholder="Courriel"
                                       class="<?= $en_post && ! $validation['email']['is_valid'] ? 'invalid' : '' ?>"
                                       value="<?= $en_post ? $validation['email']['value'] : '' ?>"
                                />
                                <?php
                                if ($en_post && ! $validation['email']['is_valid'] ) {
                                    echo '<span>', $validation['email']['err_msg'] ,'</span>';
                                }
                                ?>
                            </div>
                            <div>
                                <label for="store">Sélectionnez votre magasin: </label>
                                <input type="text" name="store" id="store" list="options-store">
                                <datalist id="options-store">
                                    <option value="Montreal Downtown" >Montreal downtown, QC</option>
                                    <option value="St. Leonard">St. Leonard, QC</option>
                                    <option value="Marche Central">Marche Central, QC</option>
                                    <option value="Verdum">Verdum, QC</option>
                                </datalist>
                            </div>
                        </fieldset>
                        <fieldset id="field2">
                            <label>Langue: </label>
                            <div class="clearfix labpad">
                                <label class="radioform">Français
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="radiocheckmark"></span>
                                </label>
                                <label class="radioform">Anglais
                                    <input type="radio" name="radio">
                                    <span class="radiocheckmark"></span>
                                </label>
                            </div>
                            <label>Votre message: </label>
                            <div class="labpad">
									<textarea name="message" rows="5" cols="35">
									</textarea>
                            </div>
                            <div id="checkform">
                                <label class="checkboxes">Je souhaite recevoir courriel de confirmation.
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                        </fieldset>
                    </div>
                    <input type="submit" name="submit" value="Soumettre"/>
                </form>
            </div>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.30255662757!2d-73.6428947850151!3d45.54423883612114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc918e0c061b07f%3A0x647a6b6d7cb681a7!2sISI%2C+l&#39;Institut+sup%C3%A9rieur+d&#39;informatique!5e0!3m2!1sfr!2sca!4v1513800444286" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </main>

<?php require_once('views/page_bottom.php'); ?>