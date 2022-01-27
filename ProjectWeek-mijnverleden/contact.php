<?php include("./includs/menu.php")?>
<section class="contact-stn">
    <div class="contact-holder">
    <div class="snel-contact">
            
                <h4>Voor snelle reacties</h4>
                <div class="contact-inhoud">
                <span>030 28 15 100</span>
                <span>088 - 001 50 00</span>
                <span>info@vistacollege.nl</span>
               

            </div>
        </div>
        <div class="contact-input">
        <form  action=''  method='POST'>
            <label for="AchterNaam" class="Contact-label">AchterNaam: </label>
                <input type="text" title="Moet je Naam invoegen" id="AchterNaam" class="surename-input" name=strSureName >
            
            <label for="TelefoonNummer" class="Contact-label">Telefoon Number: </label>
                <input type="text" title="Moet je telfoon number invoegen" id="TelefoonNummer" class="Number-input" name=intNumber >

                <label for="message" class="Contact-label">Message:</label>
                <textarea name="message" id="message" cols="40" rows="10"></textarea>
            
        </form>
        <div class="btn-content">
        <input type="submit" name="submit" class="btn-contact-submit" value="Versturen">
        </div>
        </div>
      
    </div>
</section>
<?php include("./includs/footer.php")?>