<form class="form-horizontal" method="post" action="">
    <fieldset>

        <!-- Form Name -->


        <!-- Text input-->
        <div class="form-group">
            <h1></h1>
            <h2 class="text-center">      Réservation vers <?=$data['voyage']->getNom()?>

                </h2>
            <label class="col-md-4 control-label" for="textinput">Nom</label>
            <div class="col-md-4">
                <input id="nom" name="nom" type="text" placeholder="Nom" class="form-control input-md" required>
                <span class="help-block"></span>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Prenom</label>
            <div class="col-md-4">
                <input id="prenom" name="prenom" type="text" placeholder="Prenom" class="form-control input-md" required>
                <span class="help-block"></span>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Email</label>
            <div class="col-md-4">
                <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md" required>
                <span class="help-block"></span>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Téléphone</label>
            <div class="col-md-4">
                <input id="telephone" name="telephone" type="number" placeholder="Telephone" class="form-control input-md" required>
                <span class="help-block"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">CIN</label>
            <div class="col-md-4">
                <input id="cin" name="cin" type="number" placeholder="Telephone" class="form-control input-md" required>
                <span class="help-block"></span>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button id="singlebutton" name="reservation" class="btn btn-primary center-block">Confirme</button>
            </div>
        </div>

    </fieldset>
</form>
<script>

    $(document).ready(function(){

        $("#singlebutton").click(function(){
        $.ajax({
                type: "POST",
                url: "/mvc2/app/ajax/reservation.php",
                data: "nom="+$("#nom").val()+"&prenom="+$("#prenom").val()+"&email="+$("#email").val()+"&telephone="+$("#telephone").val()+
                    "&cin="+$("#cin").val()+"&id_voyage="+<?=$data['voyage']->getId() ?>,
                success: function(msg){

                    }
            });


        });

    });

</script>
