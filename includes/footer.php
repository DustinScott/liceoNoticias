    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    
    <script>
	    
	    $(document).on('click','#newsmaker',function(){
		   tinyMCE.triggerSave();
		   var whatgrade = $('#whatgrade').val();
		   var month = $('#month').val(); 
		   var Asunto = $('#Asunto').val(); 
		   var noticia = $("#noticia").val();
		  
		   
		   alert(whatgrade +' , '+ noticia +' , '+ month +' , '+ Asunto); 
		    
	    });
	    
	    </script>
    
    
  </body>
</html>