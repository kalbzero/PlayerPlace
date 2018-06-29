$(document).ready(function(){
   $('a[data-confirm]').click(function(ev){
       var href = $(this).attr('href');
       if(!$('#confirm-delete').length){
          $('body').append('<div class="modal" id="confirm-delete" tabindex="-1" role="dialog"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title bg-danger text-white">Delete</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><p>Are you sure you want erase forever???</p></div><div class="modal-footer"><button type="button" class="btn btn-sucess">Cancel</button><a class="btn btn-danger text-white" id="dataConfirmOK">Delete!</a></div></div></div></div>');
          }
        $('#dataConfirmOK').attr('href', href);
        $('#confirm-delete').modal({shown:true});
   });
    
    
    
});