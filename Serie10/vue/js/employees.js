

var clicActive = function(){

    if($(this).text()=="0"){
    
        $destination='utilisateur_active.php';
    }else{
              
         $destination='utilisateur_desactive.php';
    }
 
    var elem = $( this );
    $.post($destination, { code : $(this).parent().attr('id') } )
    .done(function( data ) {
        elem.empty();
    elem.html(data);
    }
    );
    };
    $(function(){
    $('#utilisateurs #actif').on('click',clicActive);
    });

