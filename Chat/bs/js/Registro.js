function ELEGIR(id) {
   if(id=="REGISTRO"){
   	$("#REGISTRO").show();
   	$("#LOGIN").hide();
   	$("#MENU").hide();
   	$("#SUBMENU").show();
   	$("#HEADERS").hide();
   }
   if (id=="LOGIN") {
   	$("#REGISTRO").hide();
   	$("#LOGIN").show();
   	$("#MENU").hide();
   	$("#SUBMENU").show();
   	$("#HEADERS").hide();
   }
   if (id=="ATRAS") {
   	$("#REGISTRO").hide();
   	$("#LOGIN").hide();
   	$("#MENU").show();
   	$('#SUBMENU').hide();
   	$('#HEADERS').show();
   }      
}

