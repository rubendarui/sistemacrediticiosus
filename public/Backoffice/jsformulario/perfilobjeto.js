	var idperfil =0;
	var id_perfilobjeto=0;
var tout=[];
var direccion="";
		








$('div.productTabs a').click(function() {
			 idperfil = $(this).attr('id');
 

			$('.nav-profile').removeClass('selected');
			$(this).addClass('selected active');
			$(this).siblings().removeClass('active');
			$('.tab-profile').hide();
			$('.'+idperfil).show();
		//tout = $('.ajaxPower').data('rel').split('||');
		//	  id_perfilobjeto = touts[0];
		//	var perm = touts[2];
		//	var prueba  =$( "#inputview"+id_perfilobjeto+"" ).attr('checked', true);
 var prueba=0;
	
 var route = "/consultapruba/"+idperfil;
 		 debugger; 
	$.get(route,function(res){
     $(res).each(function(key,value){


			});
	});


		});
 
$('.ajaxPower').change(function(){
			var tout = $(this).data('rel').split('||');
			tout[0]="500";
			  id_perfilobjeto = tout[0];
			var id_profile = idperfil;
			var perm = tout[2];
			var enabled = $(this).is(':checked')? 1 : 0;

 
 if (id_profile==0) {
alert('seleccione un perfil para poder realizar la configuracion');

 }else{

 }
			debugger;
		});

	