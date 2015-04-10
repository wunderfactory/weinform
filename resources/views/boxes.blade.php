<div class="successbox">
    <div class="successbox_header">
        <div class="col-md-1"><i class="pe-7s-smile icon_large"></i></div>
        <div class="col-md-10 heading_container"><p class="white"><strong>HEAD</strong></p></div>
       
    </div>
    <div class="successbox_content">
        <p class="grey">CONTENT</p>
    </div> 
</div>

<div class="infobox">
    <div class="infobox_header">
        <p class="box_grey"><strong>Hinweis!</strong></p>
    </div>
    <div class="infobox_content">
        <p class="box_rose">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
    </div> 
</div>


<!---------------- WARNINGBOX -->

<style type="text/css">
.warningbox{
  width: 100%;
  background-color: white;
  border: 1px solid red;
  margin-bottom: 20px;
}
.warningbox_header{
  width: 100%;
  position: top;
  height: 60px;
  padding: 15px;
  color: white;
  background-color: #ea555c;
  border-bottom: 1px solid #ea555c;
  vertical-align: center;
}
.heading_container{
  margin-top: 2px;
}
.warningbox_content{
  padding: 15px; 
}
.icon_large{
  font-size: 30px;
}
</style>


            <div class="warningbox">
                <div class="warningbox_header">
                    <div class="col-md-1"><i class="pe-7s-gleam icon_large"></i></div>
                    <div class="col-md-8 heading_container"><p class="white"><strong>Hi {{ $user->first_name }}! Bitte vervollständige Dein Profil.</strong></p></div>
                   
                </div>
                <div class="warningbox_content">
                    <p class="rose">Bitte vervollständige dein Profil, damit es für andere Nutzer <strong>vertrauenswürdiger</strong> erscheint. Auch ein <strong>Profilbild</strong> von Dir hilft dabei.</p>
                </div> 
            </div>







