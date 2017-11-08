var url;
function cadastrarVeiculo(){
    $('#formulario').dialog('open').dialog('setTitle','Cadastrar Veículo');
    $('#form').form('clear');
    url = 'dao/save_veiculo.php';
}

function editarVeiculo(){
    var row = $('#table-infos').datagrid('getSelected');
    if (row){
        $('#formulario').dialog('open').dialog('setTitle','Editar Veículo');
        $('#form').form('load',row);
        url = 'dao/update_veiculo.php?id='+row.id;
    }
}


function salvarVeiculo(){
    $('#form').form('submit',{
        url: url,
        onSubmit: function(){
            return $(this).form('validate');
        },
        success: function(result){
            //console.log(result);

            var result = eval('('+result+')');


            if (result.errorMsg){
                $.messager.show({
                    title: 'Erro ao Salvar Veículo',
                    msg: result.errorMsg
                });
            } else {
                $('#formulario').dialog('close');
                $('#table-infos').datagrid('reload');
            }
        }
    });
}

function excluirVeiculo(){
    var row = $('#table-infos').datagrid('getSelected');
    url = 'dao/destroy_veiculo.php';

    if (row){
        $.messager.confirm('Confirm','Tem Certeza que deseja Excluir o Veículo?',function(r){

            if (r){
                $.post(url,{id:row.id},function(result){
                    //console.log(result);
                    result = jQuery.parseJSON(result); //Transforma o retorno em JSON no jQuery

                    if (result.success){
                        $('#table-infos').datagrid('reload');
                    } else {
                        $.messager.show({
                            title: 'Erro ao Excluir Veículo',
                            msg: result.errorMsg
                        });
                    }
                });
            }
        });
    }
}