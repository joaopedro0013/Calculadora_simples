<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 22</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
            <div class="numeros" >
                <label> Numero 1:</label> <input type="text" name="numero1" id="numero1" style="height: 20px;width: 80px;" >
                <div class="separa" style="height: 20px;"></div>
                <label> Numero 2:</label> <input type="text" name="numero2" id="numero2" style="height: 20px;width: 80px;" >
            </div>
            <div class="class" >
                <button onclick="validaFormmais()" name="soma" id="soma" style="height: 35px;width: 80px;text-align: center;font-size: 25px;" >+</button>
                <button onclick="validaFormmenos()" name="subtracao" id="subtracao" style="height: 35px;width: 80px;text-align: center;font-size: 25px;" >-</button>
                <div class="separa" style="height: 20px;"></div>
                <button onclick="validaFormmultiplicacao()" name="multiplicacao" id="multiplicacao" style="height: 35px;width: 80px;text-align: center;font-size: 25px;" >*</button>
                <button onclick="validaFormdivisao()" name="divisao" id="divisao" style="height: 35px;width: 80px;text-align: center;font-size: 25px;" >/</button>
            </div>
            <div class="separa" style="height: 50px;"></div>
            <div style="width: 65%;" >
                <div style="width: 20%;float: left;" >
                    <label>
                        Resultado
                    </label>
                </div>
                <div style="float: right;" >
                    <input type="text" name="resultado" id="resultado" >
                    <input  id="iddescricao" name="iddescricao" type="hidden" value=""  >
                </div>
            </div>
    </div>
    <script type="text/javascript" >
            //<!--
            function validaFormmais(){
               //alert("mais");
                var txtnumero1 = document.getElementById('numero1').value;
                var txtnumero2 = document.getElementById('numero2').value;

                var campo = null;
                var msg = "Atenção usuário!\n\n";
                var total_mais = "";
                
                if(txtnumero1.value == ''){
                    msg += "\t - Preencha o campo Numero 1.\n";
                    campo = txtnumero1;
                } else if(txtnumero2.value == ''){
                    msg += "\t - Preencha o campo Numero 2.\n";
                    campo = txtnumero2;
                }else{
                    //document.getElementById("numero1").value = document.getElementById("numero1").innerHTML;
                   // document.getElementById("numero2").value = document.getElementById("numero2").innerHTML;
                    //var numero1 = $("#numero1").val();
                   // var numero2 = $("#numero2").val();
                    total_mais =  parseInt(txtnumero1) +  parseInt(txtnumero2); 
                    //alert(total_mais);
                    $("#resultado").val(total_mais);
                }
                
                if(campo != null){
                    alert(msg);
                    campo.focus();
                    return false;
                }
                return true;
                
                
            }
            function validaFormmenos(){

                var txtnumero1 = document.getElementById('numero1').value;
                var txtnumero2 = document.getElementById('numero2').value;

                var campo = null;
                var msg = "Atenção usuário!\n\n";
                var total_menos = "";

                if(txtnumero1.value == ''){
                    msg += "\t - Preencha o campo Numero 1.\n";
                    campo = txtnumero1;
                } else if(txtnumero2.value == ''){
                    msg += "\t - Preencha o campo Numero 2.\n";
                    campo = txtnumero2;
                }else{
                    total_menos = txtnumero1 - txtnumero2; 
                    //alert(total_menos);
                     $("#resultado").val(total_menos);
                }

                if(campo != null){
                    alert(msg);
                    campo.focus();
                    return false;
                }
                return true;


            }

            function validaFormmultiplicacao(){

                var txtnumero1 = document.getElementById('numero1').value;
                var txtnumero2 = document.getElementById('numero2').value;

                var campo = null;
                var msg = "Atenção usuário!\n\n";
                var total_multiplicacao = "";

                if(txtnumero1.value == ''){
                    msg += "\t - Preencha o campo Numero 1.\n";
                    campo = txtnumero1;
                } else if(txtnumero2.value == ''){
                    msg += "\t - Preencha o campo Numero 2.\n";
                    campo = txtnumero2;
                }else{
                    total_multiplicacao = txtnumero1 * txtnumero2; 
                    //alert(total_multiplicacao);
                    $("#resultado").val(total_multiplicacao);
                }

                if(campo != null){
                    alert(msg);
                    campo.focus();
                    return false;
                }
                return true;


            }

            function validaFormdivisao(){

                var txtnumero1 = document.getElementById('numero1').value;
                var txtnumero2 = document.getElementById('numero2').value;

                var campo = null;
                var msg = "Atenção usuário!\n\n";
                var total_divisao = "";

                if(txtnumero1.value == ''){
                    msg += "\t - Preencha o campo Numero 1.\n";
                    campo = txtnumero1;
                } else if(txtnumero2.value == ''){
                    msg += "\t - Preencha o campo Numero 2.\n";
                    campo = txtnumero2;
                }else{
                    total_divisao = txtnumero1 / txtnumero2; 
                    //alert(total_divisao);
                    $("#resultado").val(total_divisao);
                }

                if(campo != null){
                    alert(msg);
                    campo.focus();
                    return false;
                }
                return true;


            }
            //-->
        </script>
        <script src="https://kit.fontawesome.com/7c8801c017.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
        
       
       <script type="text/javascript">
                $('#resultados').hide();

                function myFunction() {
                // $('#container').css("border-bottom", "3px solid #d2a258");
                    $('#txtUsuario').css("border", " #fff");
                }

                function mostra() {
                // $('#container').css("border-bottom", "3px solid #d2a258");
                    $('#resultados').show();
                }
        </script>
</body>
</html>