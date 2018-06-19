

  var  clicActiveLivre = function(){
 
    if($(this).text()=="0"){
    
        $destination='livre_active.php';
      
    }else{
              
         $destination='livre_desactive.php';
    }
      var elem = $( this );
    $.post($destination, { livreID : $(this).parent().attr('id') } )
    .done(function( data ) {
        elem.empty();
    elem.html(data);
    }
    );
    };
  
  var  clicKeyUp = function(){
  
    $destination='TABLE_LIVRE.php';
    
    var elem = $( this );

    $.post( $destination, { AUTEUR : elem.val()} )
    .done(function( data ) {
      $('#livres').replaceWith(data);
    }
    );
  };
  
  var  clicModifLivre = function(){
    $destination='livre_fic.php';
    $.post( $destination, { AUTEUR : $(this).parent().attr('id') })
    .done(function( data ) {
      displayModal(data);
    });
  };
  
  var  clicNew = function(event){
    event.preventDefault();

    $destination='livre_fic.php';
    $.post( $destination)
    .done(function( data ) {
      displayModal(data);
    });
  };
  
  var displayModal= function(data){
    $("#myModal").remove();
    $VarTmp = '<div class="modal fade" id="myModal" role="dialog">'+
    '<div class="modal-dialog modal-sm">'+
    '<div class="modal-content">'+
    '<div class="modal-header">'+
    '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
    '<h4 class="modal-title">Fiche livre</h4>'+
    '</div>'+
    '<div class="modal-body">'+
    '  <p></p>'+
    '</div>'+
    '</div>'+
    '</div>'+
    '</div>';
  
    $('body').append($VarTmp);
    $('.modal-body').html(data);
    $("#myModal").modal();
    $("#myModal form").submit(function( event ) {
      event.preventDefault();
      $.post('livre_fic.php',$(this).serialize()).done(function(data) {});
      $("#myModal").modal('toggle');
      $("form #AUTEUR").trigger('keyup');
  
    });
  }
  
  $(function(){
    $(document).on('click','#livres #actif',clicActiveLivre);
    $(document).on('click','#livres #modifier',clicModifLivre);
    $(document).on('change','form[name="FormTABLE_LIVRE"] #AUTEUR',clicKeyUp);
    $(document).on('keyup','form[name="FormTABLE_LIVRE"] #AUTEUR',clicKeyUp);
    $('form[name="NewTABLE_LIVRE"]').submit(function( event ) {clicNew(event)});
    
  });
  
  