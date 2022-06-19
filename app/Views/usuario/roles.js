let roles = [];
function obtener_roles(){
    $.ajax({
        url: 'app/Controllers/Roles',
        type: 'post',
        data: {action: 'mostrar_roles'},
        beforeSend:function(){},
        success: function(response){
            roles = JSON.parse(response);


            let seleccioneroles =' ';
            roles.forEach(function(item, index){
                seleccioneroles += '<option value="'+item.IdRol+'"selected>'+ item.nombreRol +'</option>';
            });
            document.getElementById('inputState').innerHTML= seleccionaroles;
        }
    });
}