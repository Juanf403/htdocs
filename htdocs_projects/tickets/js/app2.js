$(document).on('change', '.btn-file :file', function() {
  var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
        
    });
     $('#example').DataTable();
    $("#Aceptar").click(function(){
       var password =  $("#password").val();
       $.ajax({
          url:"php/verificarPass.php",
          type:"POST",
          data: {password:password}
       }).done(function(data){
          alert(data);
       });
    });
});
//setTimeout(email, 3000);
function  email(){
  $("#email").append('<li class="list-group-item"><a class="thumb-xs pull-left m-r-sm" href="#"><img class="img-circle" src="images/avatar_default.jpg"></a> <a class="clear" href="#"><small class="pull-right">3 minuts ago</small><strong>Drew Wllon</strong> <span class="label label-sm bg-primary text-uc">work</span><span>Wellcome and play this web application template...</span></a>');
  setTimeout(email, 3000);
}
