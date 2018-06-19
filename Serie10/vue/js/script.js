
var  clicActive = function(){
	if($(this).text()=="0"){
		$destination='utilisateur_active.php';
	}else{
		$destination='utilisateur_desactive.php';
	};
	var elem = $( this );
	$.post( $destination, { code : $(this).parent().attr('id') } )
	.done(function( data ) {
		elem.empty();
		elem.html(data);
	}
	);
};



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

	$destination='TABLETEST_TAB.php';
	
	var elem = $( this );

	$.post( $destination, { PRENOM : elem.val()} )
	.done(function( data ) {
		$('#utilisateurs').replaceWith(data);
	}
	);
};

var  clicKeyUpLivre = function(){
  
    $destination='TABLE_LIVRE.php';
    console.log( $(this).val())

    $.post( $destination, { TITRE : $(this).val()} )
    .done(function( data ) {
      $('#livres').replaceWith(data);
    }
    );
  };

var  clicModif = function(){
	var elem = $( this );
  $destination='utilisateurs_fic.php';
	$.post( $destination, { UTILISATEUR : $(this).parent().attr('id') })
	.done(function( data ) {
		displayModal(data);
	});
};

  
var  clicModifLivre = function(){
    $destination='livre_fic.php';
    console.log($(this).parent().attr('id'))
    $.post( $destination, { LIVREID : $(this).parent().attr('id') })
    .done(function( data ) {
      displayModal(data);
    });
  };
  

var  clicNew = function(event){
	event.preventDefault();
	var elem = $( this );
	$destination='utilisateurs_fic.php';
	$.post( $destination)
	.done(function( data ) {
		displayModal(data);
	});
};

var  clicNewLivre = function(event){
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
	'<h4 class="modal-title">Fiche membre</h4>'+
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
		$.post('utilisateurs_fic.php',$(this).serialize()).done(function(data) {});
		$("#myModal").modal('toggle');
		$("form #PRENOM").trigger('keyup');

	});
}


var displayModalLivre= function(data){

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
      $("form #TITRE").trigger('keyup');
  
    });
  }
$(function(){
	$(document).on('click','#utilisateurs #actif',clicActive);
	$(document).on('click','#utilisateurs #modifier',clicModif);
	$(document).on('change','form[name="FormTABLETEST_TAB"] #PRENOM',clicKeyUp);
	$(document).on('keyup','form[name="FormTABLETEST_TAB"] #PRENOM',clicKeyUp);
	$('form[name="NewTABLETEST_TAB"]').submit(function( event ) {clicNew(event)});

	$(document).on('click','#livres #actif',clicActiveLivre);
    $(document).on('click','#livres #modifier',clicModifLivre);
    $(document).on('change','form[name="FormTABLE_LIVRE"] #TITRE',clicKeyUpLivre);
    $(document).on('keyup','form[name="FormTABLE_LIVRE"] #TITRE',clicKeyUpLivre);

    $('form[name="NewTABLE_LIVRE"]').submit(function( event ) {clicNewLivre(event)});
    
});


  
