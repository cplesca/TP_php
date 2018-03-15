<?php
const PAGE_NAME = 'Contact';
require_once('views/page_top.php');
?>

    <main>
        <h1>Make an appointment</h1>
        <div itemscope itemtype="http://schema.org/Store" id="wrapcontact" class="row">
            <div id="formdiv">
                <form action="process.php" method="post">

                    <div id="filds" >
                        <fieldset>
                            <div>
                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" name="lname" placeholder="Green" pattern="[A-Za-z]{3}">
                            </div>
                            <div>
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" name="fname" placeholder="Philip" pattern="[A-Za-z]{3}">
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <input type="text" id="email" name="mail" placeholder="exemple@exemple.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div>
                            <div>
                                <label for="store">Preferred Store</label>
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
                            <label>Lorem ipsum dolor sit amet?</label>
                            <div class="clearfix labpad">
                                <label class="radioform">Yes
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="radiocheckmark"></span>
                                </label>
                                <label class="radioform">No
                                    <input type="radio" name="radio">
                                    <span class="radiocheckmark"></span>
                                </label>
                            </div>
                            <label>Comments</label>
                            <div class="labpad">
									<textarea name="message" rows="5" cols="35">Yours message goes here
									</textarea>
                            </div>
                            <div id="checkform">
                                <label class="checkboxes">Lorem ipsum dolor sit amet?
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <input type="submit" >
                </form>
            </div>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.30255662757!2d-73.6428947850151!3d45.54423883612114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc918e0c061b07f%3A0x647a6b6d7cb681a7!2sISI%2C+l&#39;Institut+sup%C3%A9rieur+d&#39;informatique!5e0!3m2!1sfr!2sca!4v1513800444286" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </main>

<?php require_once('views/page_bottom.php'); ?>