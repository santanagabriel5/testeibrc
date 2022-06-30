<?php include_once 'dados.php'; ?>
<html>
    <head>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <title>Form IBRC</title>
        <style>
            .questoesFormClass{
                margin-top: 2%;
                margin-left: 5%;
                width: 90%;
            }
            .questoesClass{
                margin-top: 2%;
                margin-left: 2%;
                width: 95%;
            }
            .btn-primary{
                margin-top: 1%;
            }
            
            .btn-primary{
                margin-top: 1%;
            }
            .q2{
                width: 450px;
            }
            .ui-autocomplete {
                max-height: 200px;
                overflow-y: auto;
                overflow-x: hidden;
                padding-right: 20px;
                position: absolute;
                z-index: 1000;
                cursor: default;
                padding: 0;
                margin-top: 2px;
                list-style: none;
                background-color: #b5b5b5;
                border: 1px solid #ccc;
                -webkit-border-radius: 5px;
                   -moz-border-radius: 5px;
                        border-radius: 5px;
                -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
                   -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
                        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            }
            .ui-autocomplete > li {
              padding: 3px 20px;
            }
            .ui-menu-item .ui-menu-item-wrapper.ui-state-active {
                background: #6693bc !important;
                font-weight: bold !important;
                color: #ffffff !important;
            } 
            .ui-helper-hidden-accessible {
              display: none;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Form IBRC</a>
        </nav>
            <div class="card questoesFormClass">
                <form method="post" action="#" class="row g-3" >
                    <div class="card-body">
                        <h4 class="card-title">Questoes</h4>
                        <div class="alert alert-danger" role="alert" style='display: none' id='alerta'>Por favor, preencha os campos corretamente.</div>
                        <div class="alert alert-dismissible alert-success" role="alert" style='display: none' id='sucesso'>Aqui o formulario seria enviado.</div>
                        <div class="card questoesClass" id="1" >
                            <div class="card-body">
                                <h5 class="card-title">Antes de começarmos a pesquisa, por gentileza nos informe a sua idade:</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1" id="q1-0" value="0">
                                    <label class="form-check-label" for="q1-0">
                                        Menos de 18 anos
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1" id="q1-18" value="18">
                                    <label class="form-check-label" for="q1-18">
                                        De 18 a 20 anos
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1" id="q1-21" value="21">
                                    <label class="form-check-label" for="q1-21">
                                        De 21 a 30 anos
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1" id="q1-31" value="31">
                                    <label class="form-check-label" for="q1-31">
                                        De 31 a 40 anos
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1" id="q1-41" value="41">
                                    <label class="form-check-label" for="q1-41">
                                        De 41 a 50 anos
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1" id="q1-51" value="51">
                                    <label class="form-check-label" for="q1-51">
                                        De 51 a 60 anos
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1" id="q1-60" value="60">
                                    <label class="form-check-label" for="q1-60">
                                        Mais de 60 anos
                                    </label>
                                </div>
                                <a class="btn btn-primary btnAvancar">Avançar</a>
                            </div>
                        </div>
                        <div class="card questoesClass" id="2" style="display: none">
                            <div class="card-body">
                                <h5 class="card-title">1 - Quando pensa em plano de saúde, qual é o nome da operadora que primeiro lhe vem à cabeça?</h5>
                                <div class="form-group col-md-6">
                                    <input class="form-control" id="q2_text" type="text" placeholder="Nome Operadora">
                                    <input class="form-control" type="hidden" name="q2" id="q2" >
                                </div>
                                <a class="btn btn-primary btnvoltar">Voltar</a> <a class="btn btn-primary btnAvancar">Avançar</a>
                            </div>
                        </div>
                        <div class="card questoesClass" id="3" style="display: none">
                            <div class="card-body">
                                <h5 class="card-title">2 - Por ordem de prioridade, peço que diga o que considera mais importante na gestão do seu plano de previdência, onde 1 é o mais importante e 5 é o menos importante?</h5>
                                <div class="form-group col-md-6">
                                    <div class="form-group col-md-12">
                                        <select name="q2_1" class="q2" id="q2_1">
                                            <option value=""></option>
                                            <?php 
                                                foreach($arr_opQ2 as $key => $val){
                                                    echo "<option value='".($key+1)."'>$val</option>";
                                                }
                                            ?>
                                        </select> 
                                        <label class="form-check-label" for="q2_1">
                                            1º Mais importante
                                        </label>
                                    </div>
                                    <div class="form-group col-md-12" >
                                        <select name="q2_2" class="q2" id="q2_2">
                                            <option value=""></option>
                                            <?php 
                                                foreach($arr_opQ2 as $key => $val){
                                                    echo "<option value='".($key+1)."'>$val</option>";
                                                }
                                            ?>
                                        </select> 
                                        <label class="form-check-label" for="q2_1">
                                            2º Mais importante
                                        </label>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <select name="q2_3" class="q2" id="q2_3">
                                            <option value=""></option>
                                            <?php 
                                                foreach($arr_opQ2 as $key => $val){
                                                    echo "<option value='".($key+1)."'>$val</option>";
                                                }
                                            ?>
                                        </select> 
                                        <label class="form-check-label" for="q2_1">
                                            3º Mais importante
                                        </label>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <select name="q2_4" class="q2" id="q2_4">
                                            <option value=""></option>
                                            <?php 
                                                foreach($arr_opQ2 as $key => $val){
                                                    echo "<option value='".($key+1)."'>$val</option>";
                                                }
                                            ?>
                                        </select> 
                                        <label class="form-check-label" for="q2_1">
                                            4º Mais importante
                                        </label>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <select name="q2_5" class="q2" id="q2_5">
                                            <option value=""></option>
                                            <?php 
                                                foreach($arr_opQ2 as $key => $val){
                                                    echo "<option value='".($key+1)."'>$val</option>";
                                                }
                                            ?>
                                        </select> 
                                        <label class="form-check-label" for="q2_1">
                                            5º Mais importante
                                        </label>
                                    </div>   
                                </div>
                                <a class="btn btn-primary btnvoltar">Voltar</a> <a class="btn btn-primary btnAvancar">Avançar</a>
                            </div>
                        </div>
                      
                        <div class="card questoesClass" id="4" style="display: none">
                            <div class="card-body">
                                <h5 class="card-title">3 - O quanto você se considera informado sobre as condições,  regras e informações do seu plano de previdência do IBRC?:</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3" id="q3-0" value="0">
                                    <label class="form-check-label" for="q3-0">
                                        0 NA (Não Aplicável)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3" id="q3-1" value="1">
                                    <label class="form-check-label" for="q3-1">
                                        1 Muito bem informado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3" id="q3-2" value="2">
                                    <label class="form-check-label" for="q3-2">
                                        2 Bem informado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3" id="q3-3" value="3">
                                    <label class="form-check-label" for="q3-3">
                                        3 Mais ou menos informado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3" id="q3-4" value="4">
                                    <label class="form-check-label" for="q3-4">
                                        4 Mal informado
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3" id="q3-5" value="5">
                                    <label class="form-check-label" for="q3-5">
                                        5 Muito mal informado
                                    </label>
                                </div>
                                <a class="btn btn-primary btnvoltar">Voltar</a> <a class="btn btn-primary btnAvancar">Avançar</a>
                            </div>
                        </div>
                      
                        <div class="card questoesClass" id="5" style="display: none">
                            <div class="card-body">
                                <h5 class="card-title">4 - Por qual razão se sente mal informado em relação ao seu plano de previdência do IBRC?</h5>
                                <p class="card-text"><small class="text-muted">Selecione no maximo 3</small></p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="q4" id="q4-0" value="0">
                                    <label class="form-check-label" for="q4-0">
                                        Não sabe onde pode encontrar essas informações
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="q4" id="q4-1" value="1">
                                    <label class="form-check-label" for="q4-1">
                                        Não tem interesse / Não quer saber
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="q4" id="q4-2" value="2">
                                    <label class="form-check-label" for="q4-2">
                                        Acha muito confuso, os termos são muito técnicos
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="q4" id="q4-3" value="3">
                                    <label class="form-check-label" for="q4-3">
                                        É muito extenso, longo demais. Poderia ser menor
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="q4" id="q4-4" value="4">
                                    <label class="form-check-label" for="q4-4">
                                        Está sempre mudando
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="q4" id="q4-5" value="5">
                                    <label class="form-check-label" for="q4-5">
                                        Outro motivo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="q4" id="q4-6" value="6">
                                    <label class="form-check-label" for="q4-6">
                                        NA (Não Aplicável)
                                    </label>
                                </div>
                                <a class="btn btn-primary btnvoltar">Voltar</a> <a class="btn btn-primary btnAvancar">Avançar</a>
                            </div>
                        </div>
                      
                        <div class="card questoesClass" id="6" style="display: none">
                            <div class="card-body">
                                <h5 class="card-title">5 - Você é correntista do IBRC?</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5" id="q5-0" value="1">
                                    <label class="form-check-label" for="q5-0">
                                        SIM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5" id="q5-1" value="0">
                                    <label class="form-check-label" for="q5-1">
                                        NÃO
                                    </label>
                                </div>
                                <a class="btn btn-primary btnvoltar">Voltar</a> <a class="btn btn-primary btnAvancar">Avançar</a>
                            </div>
                        </div>
                      
                        <div class="card questoesClass" id="7" style="display: none" >
                            <div class="card-body">
                                <h5 class="card-title">6 - Quais produtos você gostaria de ter uma oferta especial como correntista do IBRC?</h5>
                                
                                <div class="input-group">
                                    <?php foreach($arr_q6_q7 as $key => $val){ ?>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="q6" id="q6-<?= $key ?>" value="<?= $key ?>">
                                            <label class="form-check-label" for="q6-<?= $key ?>">
                                                <?= $val ?>
                                            </label>
                                        </div>
                                    <?php } ?>
                                </div>
                                
                                <a class="btn btn-primary btnvoltar">Voltar</a> <a class="btn btn-primary btnAvancar">Avançar</a>
                            </div>
                        </div>
                      
                        <div class="card questoesClass" id="8" style="display: none" >
                            <div class="card-body">
                                <h5 class="card-title">6.1 - Qual?</h5>
                                
                                <div class="input-group">
                                    <div class="form-group col-md-6">
                                        <input class="form-control" type="text" id="q6_1" name='q6_1' placeholder="Produto">
                                    </div>
                                </div>
                                
                                <a class="btn btn-primary btnvoltar">Voltar</a> <a class="btn btn-primary btnAvancar">Avançar</a>
                            </div>
                        </div>
                      
                        <div class="card questoesClass" id="9" style="display: none">
                            <div class="card-body">
                                <h5 class="card-title">7 - Mesmo não sendo correntista do IBRC, para quais produtos você gostaria de ter uma oferta especial como cliente do IBRC?</h5>
                                
                                <div class="input-group">
                                    <?php foreach($arr_q6_q7 as $key => $val){ ?>
                                        <div class="form-group col-md-6">
                                            <input class="form-check-input" type="checkbox" name="q7" id="q7-<?= $key ?>" value="<?= $key ?>">
                                            <label class="form-check-label" for="q7-<?= $key ?>">
                                                <?= $val ?>
                                            </label>
                                        </div>
                                    <?php } ?>
                                </div>
                                
                                <a class="btn btn-primary btnvoltar">Voltar</a> <a class="btn btn-primary btnAvancar">Avançar</a>
                            </div>
                        </div>
                      
                        <div class="card questoesClass" id="10" style="display: none" >
                            <div class="card-body">
                                <h5 class="card-title">7.1 - Qual?</h5>
                                
                                <div class="input-group">
                                    <div class="form-group col-md-6">
                                        <input class="form-control" type="text" name='q7_1' id="q7_1" placeholder="Produto">
                                    </div>
                                </div>
                                
                                <a class="btn btn-primary btnvoltar">Voltar</a> <a class="btn btn-primary btnAvancar">Avançar</a>
                            </div>
                        </div>
                        
                        <div class="card questoesClass" id="11" style="display: none">
                            <div class="card-body">
                                <h5 class="card-title">8 - Você tem interesse em ter uma conta no IBRC?</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8" id="q8-0" value="1">
                                    <label class="form-check-label" for="q8-0">
                                        SIM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8" id="q8-1" value="0">
                                    <label class="form-check-label" for="q8-1">
                                        NÃO
                                    </label>
                                </div>
                                <a class="btn btn-primary btnvoltar">Voltar</a> <a class="btn btn-primary btnAvancar">Avançar</a>
                            </div>
                        </div>
                        
                        <div class="card questoesClass" id="12" style="display: none" >
                            <div class="card-body">
                                <h5 class="card-title">9 - Por último, qual a probabilidade de você indicar a <label id="resp_1"></label>  para um amigo ou parente? Dê uma nota de 10 a 0, onde 10 é altamente provável e 0 é nem um pouco provável.</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9" id="q9-0" value="0">
                                    <label class="form-check-label" for="q9-0">
                                        0
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9" id="q9-1" value="1">
                                    <label class="form-check-label" for="q9-1">
                                        1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9" id="q9-2" value="2">
                                    <label class="form-check-label" for="q9-2">
                                        2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9" id="q9-3" value="3">
                                    <label class="form-check-label" for="q9-3">
                                        3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9" id="q9-4" value="4">
                                    <label class="form-check-label" for="q9-4">
                                        4
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9" id="q9-5" value="5">
                                    <label class="form-check-label" for="q9-5">
                                        5
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9" id="q9-6" value="6">
                                    <label class="form-check-label" for="q9-6">
                                        6
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9" id="q9-7" value="7">
                                    <label class="form-check-label" for="q9-7">
                                        7
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9" id="q9-8" value="8">
                                    <label class="form-check-label" for="q9-8">
                                        8
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9" id="q9-9" value="9">
                                    <label class="form-check-label" for="q9-9">
                                        9
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9" id="q9-10" value="10">
                                    <label class="form-check-label" for="q9-10">
                                        10
                                    </label>
                                </div>
                                <a class="btn btn-primary btnvoltar">Voltar</a> <a class="btn btn-primary btnAvancar">Avançar</a>
                            </div>
                        </div>
                        
                        <div class="card questoesClass" id="13" style="display: none" >
                            <div class="card-body">
                                <h5 class="card-title">9.1 - Por qual motivo?</h5>
                                
                                <div class="input-group">
                                    <div class="form-group col-md-6">
                                        <input class="form-control" type="text" id="q9_1" name='q10_1' placeholder="Motivo">
                                    </div>
                                </div>
                                
                                <a class="btn btn-primary btnvoltar">Voltar</a> <a class="btn btn-primary btnAvancar">Avançar</a>
                            </div>
                        </div>
                        
                        <div class="card questoesClass" id="14" style="display: none" >
                            <div class="card-body">
                                <h5 class="card-title">10 - A quanto tempo trabalha no IBRC?</h5>
                                
                                <div class="input-group">
                                    <div class="form-group col-md-2">
                                        <input class="form-control" type="text" id="q10_1" name='q10_1' placeholder="Anos" maxlength="4">
                                    </div>
                                    <div class="form-group col-md-2" style="margin-left: 1%" >
                                        <input class="form-control" type="text" id="q10_2" name='q10_2' placeholder="Meses" maxlength="2">
                                    </div>
                                </div>
                                
                                <a class="btn btn-primary btnvoltar">Voltar</a> <a class="btn btn-primary btnFinalizar">Finalizar</a>
                            </div>
                        </div>                      
                    </div>
                </form>
            </div>
        <script>
            $(function() {
                
                function verificaCampos(id,div){
                    var travar = 1;
                    
                    $("#alerta").hide();
                    
                    if(id == 2 || id == 5 || id == 8 || id == 10 || id == 13){
                        div.find("input[type=text]").each(function( index ) {
                            if($( this ).val() != ""){
                                travar = 0;
                            }
                        });
                    }
                    
                    if(id == 1 || id == 4 || id == 6 || id == 5 || id == 11 || id == 12){
                        if(div.find("input[type=radio]:checked").length != 0){
                            travar = 0;
                        }
                    }
                    
                    if(id == 3){
                        if($("#q2_1").val() != "" ||$("#q2_2").val() != "" && $("#q2_3").val() != "" && $("#q2_4").val() !="" && $("#q2_5").val() != "" ){
                            travar = 0;
                        }
                    }
                    
                    if(id == 5 || id == 7 || id == 9 ){
                        if(div.find("input[type=checkbox]:checked").length != 0){
                            travar = 0;
                        }
                    }
                    
                    if(travar == 1){
                        $("#alerta").fadeIn('slow');
                        return false;
                    }else{
                        return true;
                    }
                }
                
                var arr_operaSaude = [
                                    <?php 
                                        foreach($arr_operaSaude as  $key => $val){
                                            echo ' { value: '.($key+1).', label: "'.$val.'" },';
                                        }
                                    ?>
                                    ];
                $("#q2_text").autocomplete({
                    source: arr_operaSaude,
                    select: function (event, ui) {
                        $("#q2_text").val(ui.item.label); 
                        $("#q2").val(ui.item.value); 
                        return false;;
                    }
                });
                $("#q2_text").on("blur",function(){
                    $("#resp_1").html($("#q2_text").val()); 
                });
                                
                $(".q2").on('focus', function () {
                    valAnterior = $(this).val();
                    textoAnterior = $(this).children("option").filter(":selected")[0].text;
                }).change(function() {

                    if($(this).val() != ""){
                        $(".q2:not(#"+$(this).attr("id")+") option[value='"+$(this).val()+"']").remove();
                        if(valAnterior != ""){
                            $(".q2:not(#"+$(this).attr("id")+")").append($('<option>', {
                                value: valAnterior,
                                text: textoAnterior
                            }));
                        }
                    }else{
                        $(".q2:not(#"+$(this).attr("id")+")").append($('<option>', {
                            value: valAnterior,
                            text: textoAnterior
                        }));
                    }
                });
                $('[name="q4"]').on('change', function(evt) {
                    if($(this).val() == 6){
                        if($(this).prop('checked') == true){
                            $("[name='q4']:not(#q4-6)").attr("disabled",true);
                            $("[name='q4']:not(#q4-6)").prop('checked', false);
                        }else{
                            $("[name='q4']:not(#q4-6)").attr("disabled",false);
                        }
                    }
                    if ($('[name="q4"]:checked').length > 3) {
                        $(this).prop('checked', false);
                    }
                });

                $('#q10_1, #q10_2').on('input', function (event) { 
                    this.value = this.value.replace(/[^0-9]/g, '');
                });

//              BTNS DE CONTROLE
                $(".btnVoltar").on("click",function(){
                    var div = $(this).parent().parent();
                    var form = $(".questoesFormClass");
                    var id = parseInt(div.attr("id"));
                    var proximoId = (id-1);
                    $("#alerta").hide();
                    if(!verificaCampos(id,div)){
                        return false;
                    }
//                    console.log("proximoId: "+proximoId);
//                    console.log("IdAtual: "+id);

                    if(proximoId === 5 && ($("[name='q3']:checked")[0].value != '1' && $("[name='q3']:checked")[0].value != '2')){
                        proximoId = 4;
                    }
                    
                    if(proximoId === 8 && $("[name='q5']:checked")[0].value != '1'){
                        proximoId = 6;
                    }
                    
                    if(proximoId === 10 && $("[name='q5']:checked")[0].value == '1'){
                        if($("#q6-9").prop('checked') == false ){
                            proximoId = 7;
                        }else{
                            proximoId = 8;
                        }
                    }
                    
                    if(proximoId === 10 && $("#q7-9").prop('checked') == false){
                        proximoId = 9;
                    }

                    if(proximoId === 13 && !($("[name='q9']:checked")[0].value != '9' && $("[name='q9']:checked")[0].value != '10') ){;
                        proximoId = 12;
                    }
                    
                   div.hide();
                   $("#"+proximoId).fadeIn('slow');
                });
                
                $(".btnFinalizar").on("click",function(){
                    $("#alerta").hide();
                    $("#sucesso").hide();
                    
                    if($( "#q10_1" ).val() == "" || $( "#q10_2" ).val() == ""){
                        $("#alerta").fadeIn('slow');
                    }else{
                        if(parseInt($( "#q10_1" ).val()) < 2000 || parseInt($( "#q10_2" ).val()) > 11 || parseInt($( "#q10_2" ).val()) <= 0){
                            $("#alerta").fadeIn('slow');
                        }else{
                            $("#sucesso").fadeIn('slow');
                        }
                    }
                });
                
                $(".btnAvancar").on("click",function(){
                    var div = $(this).parent().parent();
                    var form = $(".questoesFormClass");
                    var id = parseInt(div.attr("id"));
                    var proximoId = (id+1);
                    
                    if(!verificaCampos(id,div)){
                        return false;
                    }
                    
                    if(proximoId === 5 && ($("[name='q3']:checked")[0].value != '1' && $("[name='q3']:checked")[0].value != '2')){
                        proximoId = 6;
                    }
                    
                    if(proximoId === 9){
                        proximoId = 11;
                    }
                    
                    if(proximoId === 7 && $("[name='q5']:checked")[0].value != '1'){
                        proximoId = 9;
                    }
                    
                    if(proximoId === 8 && $("#q6-9").prop('checked') == false){
                        proximoId = 11;
                    }
                    
                    if(proximoId === 10){
                        if($("#q7-9").prop('checked') == false ){
                            proximoId = 11;
                        }
                    }
                    
                    if(proximoId === 13 && ($("[name='q9']:checked")[0].value != '9' && $("[name='q9']:checked")[0].value != '10') ){
                        proximoId = 13;
                    }else if(proximoId === 13){
                        proximoId = 14;
                    }
                    
                    div.hide();
                   $("#"+proximoId).fadeIn('slow');
                });
            });
        </script>
    </body>
</html>