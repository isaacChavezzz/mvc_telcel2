function objectAjax(){
	var xmlhttp = false;
	try{
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e){
		try{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");			
		} catch (E){
			xmlhttp = false;	
		}		
	}
	if(!xmlhttp && typeof XMLHttpRequest!='undefined'){
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
//Inicializo automaticamente la funcion read al entrar a la pagina o recargar la pagina;
addEventListener('load', read, false);

function read(){
        $.ajax({        
        		type: 'POST',
                url:   '?c=administrator&m=tbl_oferta',               
                beforeSend: function () {
                        $("#information").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#information").html(response);
                }
        });
}

function register(){
	id 		= document.formUser.id.value;
	id_paqYrec 		= document.formUser.id_paqYrec.value;
	id_chip 	= document.formUser.id_chip.value;
	id_accesorios 		= document.formUser.id_accesorios.value;
	id_tel 		= document.formUser.id_tel.value;
	ofer_paqYrec 		= document.formUser.ofer_paqYrec.value;
	ofer_chip 		= document.formUser.ofer_chip.value;
	ofer_accesorios 		= document.formUser.ofer_accesorios.value;
	ofer_tel 		= document.formUser.ofer_tel.value;

	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=registeruser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4	){			
			read();			
			alert('Los datos guardaron correctamente.');			
			$('#addUser').modal('hide');
			document.formUser.reset();
		}
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("id_paqYrec="+id_paqYrec+"&id_chip="+id_chip+"&id_accesorios="+id_accesorios+"&id_tel="+id_tel+"&ofer_paqYrec="+ofer_paqYrec+"&ofer_chip="+ofer_chip+"&ofer_accesorios="+ofer_accesorios+"&ofer_tel="+ofer_tel+"&id="+id);
}	

function update(){
	id 			= document.formUserUpdate.id.value;
	id_paqYrec 		= document.formUserUpdate.id_paqYrec.value;
	id_chip 	= document.formUserUpdate.id_chip.value;
	id_accesorios 		= document.formUserUpdate.id_accesorios.value;
	id_tel 		= document.formUserUpdate.id_tel.value;
	ofer_paqYrec 		= document.formUserUpdate.ofer_paqYrec.value;
	ofer_chip 		= document.formUserUpdate.ofer_chip.value;
	ofer_accesorios 		= document.formUserUpdate.ofer_accesorios.value;
	ofer_tel 		= document.formUserUpdate.ofer_tel.value;

	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=updateuser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4){
			if (ajax.status==200){
				read();
				alert("Los datos se han actualizado");
				$('#updateUser').modal('hide');
			}
		}
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("id_paqYrec="+id_paqYrec+"&id_chip="+id_chip+"&id_accesorios="+id_accesorios+"&id_tel="+id_tel+"&ofer_paqYrec="+ofer_paqYrec+"&ofer_chip="+ofer_chip+"&ofer_accesorios="+ofer_accesorios+"&ofer_tel="+ofer_tel+"&id="+id);

}

function deleteUser(id){	
	if(confirm('¿Esta seguro de eliminar este registro?')){						
	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=deleteuser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4){			
			read();		
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+id);
	}
}

function ModalRegister(){
	$('#addUser').modal('show');
}

function ModalUpdate(id,id_paqYrec,id_chip,id_accesorios,id_tel,ofer_paqYrec,ofer_chip,ofer_accesorios,ofer_tel){			
	document.formUserUpdate.id.value 			= id;
	document.formUserUpdate.id_paqYrec.value 			= id_paqYrec;
	document.formUserUpdate.id_chip.value 	= id_chip;
	document.formUserUpdate.id_accesorios.value 		= id_accesorios;
	document.formUserUpdate.id_tel.value 		= id_tel;
	document.formUserUpdate.ofer_paqYrec.value 		= ofer_paqYrec;
	document.formUserUpdate.ofer_chip.value 		= ofer_chip;
	document.formUserUpdate.ofer_accesorios.value 		= ofer_accesorios;
	document.formUserUpdate.ofer_tel.value 		= ofer_tel;


	$('#updateUser').modal('show');
}

/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/