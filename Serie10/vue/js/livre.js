
var clicActiveLivre = function(){
 
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
  
 
    var  clicModifLivre = function(){
      
        var elem = $( this );
        $destination='livre_fic.php';
        $.post( $destination, { livreID : $(this).parent().attr('id') } )
                  .done(function( data ) {  
                          $("#myModal").remove();
                          $VarTmp = '<div class="modal fade" id="myModal" role="dialog">'+
                            '<div class="modal-dialog modal-sm">'+
                              '<div class="modal-content">'+
                                '<div class="modal-header">'+
                                  '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
                                  '<h4 class="modal-title">Fiche du livre </h4>'+
                                '</div>'+
                                '<div class="modal-body">'+
                                '  <p></p>'+
                                '</div>'+
                                '<div class="modal-footer">'+
                                '  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+
                                '</div>'+
                              '</div>'+
                            '</div>'+
                          '</div>';
    
                        $('body').append($VarTmp);
                        $('.modal-body').html(data);
                        $("#myModal").modal();
                        
                          }
                      );
       
    };
    $(function(){
      $(document).on('click','#livres #actif',clicActiveLivre);
      $(document).on('click','#livres #modifier',clicModifLivre);
  });

