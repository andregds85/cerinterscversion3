@extends('layouts3.app')
@section('content')


<SCRIPT> 
<!--
function valida()
{

if(document.regform.nome.value=="" || document.regform.nome.value.length < 5)
{
alert( "Preencha campo Nome com Nome Completo!" );
regform.nome.focus();
return false;
}

if(document.regform.cns.value.length < 12  || document.regform.cns.value.length > 16)
{
alert( "Preencha campo CNS corretamente ");
regform.cns.focus();
return false;
}

if(document.regform.sexo.value=="") 
{
alert( "Preencha campo Sexo Corretamente ");
regform.sexo.focus();
return false;
}


if(document.regform.cpf.value.length < 11  || document.regform.cpf.value.length > 12)
{
alert( "Preencha campo CPF corretamente ");
regform.cpf.focus();
return false;
}

if(document.regform.rg.value.length < 8  || document.regform.rg.value.length > 16)
{
alert( "Preencha campo RG corretamente ");
regform.rg.focus();
return false;
}

if(document.regform.orgaoEmissor.value.length < 3  || document.regform.orgaoEmissor.value.length > 60)
{
alert( "Preencha campo Orgão Emissor Corretamente ");
regform.orgaoEmissor.focus();
return false;
}


if(document.regform.vacina.value.length < 3  || document.regform.vacina.value.length > 60)
{
alert( "Preencha campo Vacina Corretamente ");
regform.vacina.focus();
return false;
}





if(document.regform.estado.value=="") 
{
alert( "Preencha campo Estado Corretamente ");
regform.estado.focus();
return false;
}


if(document.regform.diagnostico.value==""  || document.regform.diagnostico.value.length < 10)   
{
alert( "Preencha campo Diagnóstico com No Mínimo 10 Dígitos ");
regform.diagnostico.focus();
return false;
}



if(document.regform.hospitalOrigem.value==""  || document.regform.hospitalOrigem.value.length < 6)   
{
alert( "Preencha campo Hospital de Origem Corretamente ");
regform.hospitalOrigem.focus();
return false;
}


if(document.regform.LeitoOrigem.value==""  || document.regform.LeitoOrigem.value.length < 2)   
{
alert( "Preencha campo Leito de Origem Corretamente com no mínimo 2 Dígitos ");
regform.LeitoOrigem.focus();
return false;
}



if(document.regform.setorOrigem.value==""  || document.regform.setorOrigem.value.length < 6)   
{
alert( "Preencha campo Setor de Origem Corretamente ou Com mais Caracteres ");
regform.setorOrigem.focus();
return false;
}



if(document.regform.medicoResponsavel.value==""  || document.regform.medicoResponsavel.value.length < 6)   
{
alert( "Preencha campo Médico Responsável Corretamente ");
regform.medicoResponsavel.focus();
return false;
}


if(document.regform.hospitalDestino.value==""  || document.regform.hospitalDestino.value.length < 6)   
{
alert( "Preencha campo Hospital de Destino Corretamente ");
regform.hospitalDestino.focus();
return false;
}


if(document.regform.LeitoDestino.value==""  || document.regform.LeitoDestino.value.length < 2)   
{
alert( "Preencha campo Leito de Destino Corretamente com no mínimo 2 Dígitos ");
regform.LeitoDestino.focus();
return false;
}


if(document.regform.quemRecebe.value==""  || document.regform.quemRecebe.value.length < 2)   
{
alert( "Preencha campo Quem Recebe Corretamente com no mínimo 2 Dígitos ");
regform.quemRecebe.focus();
return false;
}


if(document.regform.padrao.value=="") 
{
alert( "Selecione campo Padrão com Sim / Não ");
regform.padrao.focus();
return false;
}

if(document.regform.contato.value=="") 
{
alert( "Selecione campo contato com Sim / Não ");
regform.contato.focus();
return false;
}


if(document.regform.motivoContato.value==""  || document.regform.motivoContato.value.length < 11)   

{
alert( "Descreva o Motivo do Contato com mais de 12 Caracteres");
regform.motivoContato.focus();
return false;
}


if(document.regform.respiratoria.value=="") 
{
 alert( "Selecione campo respiratoria com Sim / Não ");
regform.respiratoria.focus();
return false;
}



if(document.regform.motivoRespiratoria.value==""  || document.regform.motivoRespiratoria.value.length < 11)   

{
alert( "Descreva o Motivo Respiratória com mais de 12 Caracteres");
regform.motivoRespiratoria.focus();
return false;
}





if(document.regform.covid.value=="") 
{
 alert( "Selecione campo covid com Supeito / Confirmado ");
regform.covid.focus();
return false;
}

if(document.regform.metodo.value=="") 
{
 alert( "Selecione campo metodo com TR / PCR ");
regform.metodo.focus();
return false;
}


if(document.regform.sng.value=="") 
{
 alert( "Preencha Campo SNG ");
regform.sng.focus();
return false;
}

if(document.regform.svd.value=="") 
{
 alert( "Preencha Campo SVD ");
regform.svd.focus();
return false;
}

if(document.regform.dreno.value=="") 
{
 alert( "Preencha Campo Dreno ");
regform.dreno.focus();
return false;
}

if(document.regform.tottqd.value=="") 
{
 alert( "Preencha Campo tottqd ");
regform.tottqd.focus();
return false;
}


if(document.regform.acessoVenosoCentral.value=="") 
{
alert( "Preencha Campo Acesso Venoso Central ");
regform.acessoVenosoCentral.focus();
return false;
} 

if(document.regform.avcOnde.value=="") 
{
 alert( "Preencha Campo Onde ? Acesso Venoso Central ");
regform.avcOnde.focus();
return false;
} 


if(document.regform.acessoVenosoPeriferico.value=="") 
{
 alert( "Preencha Campo Acesso Venoso Periferico ");
regform.acessoVenosoPeriferico.focus();
return false;
}


if(document.regform.dve.value=="") 
{
alert( "Preencha Campo dve ");
regform.dve.focus();
return false;
}


if(document.regform.outros.value=="") 
{
alert( "Preencha Campo outros ");
regform.outros.focus();
return false;
}


if(document.regform.drogas.value=="") 
{
alert( "Preencha drogas ");
regform.drogas.focus();
return false;
}


if(document.regform.sedacao.value==""  || document.regform.sedacao.value.length < 7)   
{
alert( "Preencha Sedação com mais de 6 Caracteres ou digite Não faz uso de Sedação");
regform.sedacao.focus();
return false;
}


if(document.regform.suporteo2.value=="") 
{
alert( "Preencha suporteo2 ");
regform.suporteo2.focus();
return false;
}


if(document.regform.cateter.value=="") 
{
alert( "Preencha cateter  ");
regform.cateter.focus();
return false;
}

if(document.regform.mascara.value=="") 
{
alert( "Preencha mascara  ");
regform.mascara.focus();
return false;
}


if(document.regform.outroSu.value=="") 
{
alert( "Preencha outros  ");
regform.outroSu.focus();
return false;
}

if(document.regform.vm.value=="") 
{
alert( "Preencha vm  ");
regform.vm.focus();
return false;
}


if(document.regform.fiO2.value=="") 
{
alert( "Preencha FiO2  ");
regform.fiO2.focus();
return false;
}


if(document.regform.peep.value=="") 
{
alert( "Preencha peep  ");
regform.peep.focus();
return false;
}


if(document.regform.spO2.value=="") 
{
alert( "Preencha spO2  ");
regform.spO2.focus();
return false;
}


if(document.regform.prona.value=="") 
{
alert( "Preencha prona  ");
regform.prona.focus();
return false;
}


if(document.regform.volume.value=="") 
{
alert( "Preencha o campo Volume   ");
regform.volume.focus();
return false;
}


if(document.regform.risco.value=="") 
{
alert( "Preencha a Classificação do Risco do Transporte  ");
regform.risco.focus();
return false;
}

if(document.regform.aguda.value=="") 
{
alert( "Preencha o Campo Definição Renal Aguda");
regform.F.focus();
return false;
}

if(document.regform.funcionalidade.value=="") 
{
alert( "Preencha o Campo funcionalidade");
regform.funcionalidade.focus();
return false;
}


if(document.regform.pa.value=="") 
{
alert( "Preencha o Campo  PA");
regform.pa.focus();
return false;
}

if(document.regform.fc.value=="") 
{
alert( "Preencha o Campo  fc");
regform.fc.focus();
return false;
}


if(document.regform.spo2c.value=="") 
{
alert( "Preencha o Campo  spo2c");
regform.spo2c.focus();
return false;
}



if(document.regform.glasgow.value=="") 
{
alert( "Preencha o Campo Glasgow");
regform.glasgow.focus();
return false;
}


if(document.regform.temp.value=="") 
{
alert( "Preencha o Campo  temp");
regform.temp.focus();
return false;
}



if(document.regform.peso.value=="") 
{
alert( "Preencha o Campo  peso");
regform.peso.focus();
return false;
}


if(document.regform.altura.value=="") 
{
alert( "Preencha o Campo  altura");
regform.altura.focus();
return false;
}


if(document.regform.outrosIC.value=="") 
{
alert( "Preencha o Campo  outrosIC");
regform.outrosIC.focus();
return false;
}


if(document.regform.fr.value=="") 
{
alert( "Preencha o Campo  FR");
regform.fr.focus();
return false;
}



if(document.regform.hgt.value=="") 
{
alert( "Preencha o Campo  HGT");
regform.hgt.focus();
return false;
}








if(document.regform.comorbidades.value=="") 
{
alert( "Preencha o Campo  comorbidades");
regform.comorbidades.focus();
return false;
}

if(document.regform.historicoClinico.value==""  || document.regform.historicoClinico.value.length < 11)   

{
alert( "Descreva o Historico Clinico Atual com mais de 12 Caracteres");
regform.historicoClinico.focus();
return false;
}


if(document.regform.efisico.value==""  || document.regform.efisico.value.length < 7)   

{
alert( "Descreva os Exames Físicos com mais de 6 Caracteres");
regform.efisico.focus();
return false;
}


if(document.regform.eComplementar.value==""  || document.regform.eComplementar.value.length < 7)   
{
alert( "Descreva os Exames Complementares com mais de 6 Caracteres");
regform.eComplementar.focus();
return false;
}


return true;
}
</script>

<script>

function onlynumber(evt) {
   var theEvent = evt || window.event;
   var key = theEvent.keyCode || theEvent.which;
   key = String.fromCharCode( key );
   //var regex = /^[0-9.,]+$/;
   var regex = /^[0-9.]+$/;
   if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
   }
}

</script>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Solicitação de Checklist Transporte Seguro') }}</div>

                <div class="card-body">
                <form action="{{ route('checklist.store') }}" method="POST" id="validate" enctype="multipart/form-data" NAME="regform"
    onsubmit="return valida()">
 
                        @csrf


<?php 
use App\Models\Checklist;
use App\Http\Controllers\ChecklistController;
?>

 

{{ Auth::user()->name}}
<br>
{{ Auth::user()->email}}
<br>


</div>
                        </div>
                        </div>
                        </div>
                        </div>



                        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dados do Paciente') }}</div>

                <div class="card-body">





                          <!--  nome -->
                          <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" required autocomplete="nome">
                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                             


                      <!--  dataSolicitacao -->
                       <div class="form-group row">
                            <label for="dataSolicitacao" class="col-md-4 col-form-label text-md-right">{{ __('Data da Solicitacao') }}</label>
                            <div class="col-md-6">
                                <input id="dataSolicitacao" type="date" class="form-control @error('dataSolicitacao') is-invalid @enderror" name="dataSolicitacao" required autocomplete="dataSolicitacao">
                                @error('dataSolicitacao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       <!--  cns -->
                       <div class="form-group row">
                            <label for="cns" class="col-md-4 col-form-label text-md-right">{{ __('CNS') }}</label>
                            <div class="col-md-6">
                                <input id="cns" type="text" class="form-control @error('cns') is-invalid @enderror" name="cns"  onkeypress="return onlynumber();" required autocomplete="cns">
                                @error('cns')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                      <!--  DN -->
                       <div class="form-group row">
                            <label for="dn" class="col-md-4 col-form-label text-md-right">{{ __('DN') }}</label>
                            <div class="col-md-6">
                                <input id="dn" type="date" class="form-control @error('dn') is-invalid @enderror" name="dn"  required autocomplete="dn">
                                @error('dn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                       <!--  idade -->
                       <div class="form-group row">
                            <label for="idade" class="col-md-4 col-form-label text-md-right">{{ __('idade') }}</label>
                            <div class="col-md-6">
                                <input id="idade" type="text" class="form-control @error('idade') is-invalid @enderror" name="idade" onkeypress="return onlynumber();"  required autocomplete="idade">
                                @error('idade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                           
                     <!--  sexo -->
                     <div class="form-group row" required>
                            <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>
                            <div class="col-md-6">
                            <select id="sexo" class="form-control" name="sexo">
                            <option selected></option>
                            <option value="masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            </select>    
                            </div>
                        </div>
                     <br>



                    <!--  cpf -->
                       <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('cpf') }}</label>
                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf"  onkeypress="return onlynumber();" required autocomplete="cpf">
                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                      <!--  rg -->
                       <div class="form-group row">
                            <label for="rg" class="col-md-4 col-form-label text-md-right">{{ __('RG') }}</label>
                            <div class="col-md-6">
                                <input id="rg" type="text" class="form-control @error('rg') is-invalid @enderror" name="rg" onkeypress="return onlynumber();" required autocomplete="rg">
                                @error('rg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       <!--  orgaoEmissor -->
                       <div class="form-group row">
                            <label for="orgaoEmissor" class="col-md-4 col-form-label text-md-right">{{ __('Orgão Emissor') }}</label>
                            <div class="col-md-6">
                                <input id="orgaoEmissor" type="text" class="form-control @error('orgaoEmissor') is-invalid @enderror" name="orgaoEmissor"  required autocomplete="orgaoEmissor">
                                @error('orgaoEmissor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                    <!--  Vacina Covid 19 -->
                       <div class="form-group row">
                            <label for="vacina" class="col-md-4 col-form-label text-md-right">{{ __('Vacina Covid 19') }}</label>
                            <div class="col-md-6">
                                <input id="vacina" type="text" class="form-control @error('vacina') is-invalid @enderror" name="vacina"  required autocomplete="vacina">
                                @error('vacina')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                       <!--  estado -->
                       <div class="form-group row" required>
                            <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>
                            <div class="col-md-6">
                            <select id="estado" class="form-control" name="estado">
                            <option selected></option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goías</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraíma</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            </select>    
                            </div>
                        </div>




                  <!--  diagnostico -->
                  <div class="form-group row">
                            <label for="diagnostico" class="col-md-4 col-form-label text-md-right">{{ __('Diagnóstico') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('diagnostico') is-invalid @enderror" name="diagnostico"  required autocomplete="diagnostico" rows="3"></textarea>
                                @error('diagnostico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                  </div>


              
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script>
  $(function(){
        $("#selectServicos").change(function(){
            var valor = $(this).val();
            var texto = $("#selectServicos>option:selected").html();
            var nome = "input"+texto;
            $("#divCampos").append("<div class='form-group row'");
            $("#divCampos").append("<label class='col-md-4 col-form-label text-md-right'>"+"Quem Recebe a Gestante no Local de Destino: "+"</label>");
            $("#divCampos").append("<input type='text' name='nasceDestino'/>");
            $("#divCampos").append("</div>");
        });
    });
    </script>



                     <!--  Gestante -->
                    <div class="form-group row" required>
                            <label for="gestante" class="col-md-4 col-form-label text-md-right">{{ __('Gestante') }}</label>
                            <div class="col-md-6">
                            <select id="selectServicos" class="form-control" name="gestante">
                            <option value="Não">Não</option>
                            <option value="Sim">Sim</option>
                            </select>    
                            </div>
                        </div>

               

                        <form id="form1">

                                <!--  Se o nascimento for destino  -->
                            <div  id="divCampos">
                   

                            </div>



                        
                     <!--  hospitalOrigem -->
                       <div class="form-group row">
                            <label for="hospitalOrigem" class="col-md-4 col-form-label text-md-right">{{ __('Hospital de Origem') }}</label>
                            <div class="col-md-6">
                                <input id="hospitalOrigem" type="text" class="form-control @error('hospitalOrigem') is-invalid @enderror" name="hospitalOrigem"  required autocomplete="hospitalOrigem">
                                @error('hospitalOrigem')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                     <!--  LeitoOrigem -->
                       <div class="form-group row">
                            <label for="LeitoOrigem" class="col-md-4 col-form-label text-md-right">{{ __('Leito de Origem') }}</label>
                            <div class="col-md-6">
                                <input id="LeitoOrigem" type="text" class="form-control @error('LeitoOrigem') is-invalid @enderror" name="LeitoOrigem"  required autocomplete="LeitoOrigem">
                                @error('LeitoOrigem')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       

                      <!--  Setor de origem  -->
                       <div class="form-group row">
                            <label for="setorOrigem" class="col-md-4 col-form-label text-md-right">{{ __('Setor de Origem') }}</label>
                            <div class="col-md-6">
                                <input id="setorOrigem" type="text" class="form-control @error('setorOrigem') is-invalid @enderror" name="setorOrigem"  required autocomplete="setorOrigem">
                                @error('setorOrigem')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                      <!--  medicoResponsavel  -->
                       <div class="form-group row">
                            <label for="medicoResponsavel" class="col-md-4 col-form-label text-md-right">{{ __('Médico Responsável ') }}</label>
                            <div class="col-md-6">
                                <input id="medicoResponsavel" type="text" class="form-control @error('medicoResponsavel') is-invalid @enderror" name="medicoResponsavel"  required autocomplete="medicoResponsavel">
                                @error('medicoResponsavel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        
                           
                     <!--  hospitalDestino -->
                       <div class="form-group row">
                            <label for="hospitalDestino" class="col-md-4 col-form-label text-md-right">{{ __('Hospital de Destino') }}</label>
                            <div class="col-md-6">
                                <input id="hospitalDestino" type="text" class="form-control @error('hospitalDestino') is-invalid @enderror" name="hospitalDestino"  required autocomplete="hospitalDestino">
                                @error('hospitalDestino')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                                                
                     <!--  LeitoDestino -->
                       <div class="form-group row">
                            <label for="LeitoDestino" class="col-md-4 col-form-label text-md-right">{{ __('Leito de Destino') }}</label>
                            <div class="col-md-6">
                                <input id="LeitoDestino" type="text" class="form-control @error('LeitoDestino') is-invalid @enderror" name="LeitoDestino"  required autocomplete="LeitoDestino">
                                @error('LeitoDestino')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                 
                        
                    <!--  quemRecebe -->
                      <div class="form-group row">
                            <label for="quemRecebe" class="col-md-4 col-form-label text-md-right">{{ __('Quem Recebe') }}</label>
                            <div class="col-md-6">
                                <input id="quemRecebe" type="text" class="form-control @error('quemRecebe') is-invalid @enderror" name="quemRecebe"  required autocomplete="quemRecebe">
                                @error('quemRecebe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>







       
                       </div>
                        </div>
                        </div>
                        </div>
                        </div>


                        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tipos de Precaução:') }}</div>
              
             
                <div class="card-body">



         <!--  padrão -->
         <div class="form-group row" required>
                            <label for="padrao" class="col-md-4 col-form-label text-md-right">{{ __('Padrão') }}</label>
                            <div class="col-md-6">
                            <select id="padrao" class="form-control" name="padrao">
                            <option selected></option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                            </select>    
                            </div>
                        </div>

          
          <!--  contato -->
         <div class="form-group row" required>
                            <label for="contato" class="col-md-4 col-form-label text-md-right">{{ __('Contato') }}</label>
                            <div class="col-md-6">
                            <select id="contato" class="form-control" name="contato">
                            <option selected></option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                            </select>    
                            </div>
                        </div>
    
                        



            <!--  Motivo Contato -->
                <div class="form-group row">
                            <label for="motivoContato" class="col-md-4 col-form-label text-md-right">{{ __('Motivo do Contato') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('motivoContato') is-invalid @enderror" name="motivoContato"  required autocomplete="motivoContato" rows="3"></textarea>
                                @error('motivoContato')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                  </div>
               


      
         <!--  respiratoria -->
         <div class="form-group row" required>
                            <label for="respiratoria" class="col-md-4 col-form-label text-md-right">{{ __('Respiratoria') }}</label>
                            <div class="col-md-6">
                            <select id="respiratoria" class="form-control" name="respiratoria">
                            <option selected></option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                            </select>    
                            </div>
                        </div>


                  

            <!--  Motivo Respiratória -->
                <div class="form-group row">
                            <label for="motivoRespiratoria" class="col-md-4 col-form-label text-md-right">{{ __('Motivo Respiratória') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('motivoRespiratoria') is-invalid @enderror" name="motivoRespiratoria"  required autocomplete="motivoRespiratoria" rows="3"></textarea>
                                @error('motivoRespiratoria')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                  </div>
               


           <!--  covid -->
         <div class="form-group row" required>
                            <label for="covid" class="col-md-4 col-form-label text-md-right">{{ __('Covid') }}</label>
                            <div class="col-md-6">
                            <select id="covid" class="form-control" name="covid">
                            <option selected></option>
                            <option value="Supeito">Supeito</option>
                            <option value="Confirmado">Confirmado</option>
                            <option value="Não foi Testado">Não foi Testado</option>
                            <option value="Testado / Negativo">Testado / Negativo</option>
                            </select>    
                            </div>
                        </div>

          
          
                  <!--  metodo -->
                   <div class="form-group row" required>
                            <label for="metodo" class="col-md-4 col-form-label text-md-right">{{ __('Método ') }}</label>
                            <div class="col-md-6">
                            <select id="metodo" class="form-control" name="metodo">
                            <option selected></option>
                            <option value="TR">TR</option>
                            <option value="ANTIGENO">ANTIGENO</option>
                            <option value="PCR">PCR</option>
                            <option value="Não foi Testado">Não foi Testado</option>

                            </select>    
                            </div>
                        </div>



                   <div class="container">
                      <!--  dataSolicitacao -->
                        <div class="form-group row">
                            <label for="data" class="col-md-4 col-form-label text-md-right">{{ __('Data ') }}</label>
                            <div class="col-md-6">
                            <input id="data" type="date" class="form-control @error('data') is-invalid @enderror" name="data" required autocomplete="data">

                                @error('data')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>



                       </div>
                        </div>
                        </div>



<!--  fim -->



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dispositivos Invasivos:') }}</div>
        
             
                <div class="card-body">

              
             



    
                

                    <!--  sng -->
                      <div class="form-group row">
                            <label for="sng" class="col-md-4 col-form-label text-md-right">{{ __('SNG') }}</label>
                            <div class="col-md-6">
                                <input id="sng" type="text" class="form-control @error('sng') is-invalid @enderror" name="sng"  required autocomplete="sng">
                                @error('sng')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>



                      <!--  svd -->
                      <div class="form-group row">
                            <label for="svd" class="col-md-4 col-form-label text-md-right">{{ __('SVD') }}</label>
                            <div class="col-md-6">
                                <input id="svd" type="text" class="form-control @error('svd') is-invalid @enderror" name="svd"  required autocomplete="svd">
                                @error('svd')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>



                       <!--  Dreno -->
                      <div class="form-group row">
                            <label for="dreno" class="col-md-4 col-form-label text-md-right">{{ __('Dreno') }}</label>
                            <div class="col-md-6">
                                <input id="dreno" type="text" class="form-control @error('dreno') is-invalid @enderror" name="dreno"  required autocomplete="dreno">
                                @error('dreno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>



                       <!--  tottqd -->
                      <div class="form-group row">
                            <label for="tottqd" class="col-md-4 col-form-label text-md-right">{{ __('TOT/TQT') }}</label>
                            <div class="col-md-6">
                                <input id="tottqd" type="text" class="form-control @error('tottqd') is-invalid @enderror" name="tottqd"  required autocomplete="tottqd">
                                @error('tottqd')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>
    
                   <!--  acessoVenosoCentral -->
                          <div class="form-group row">
                            <label for="acessoVenosoCentral" class="col-md-4 col-form-label text-md-right">{{ __('Acesso Venoso Central') }}</label>
                            <div class="col-md-6">
                                <input id="acessoVenosoCentral" type="text" class="form-control @error('acessoVenosoCentral') is-invalid @enderror" name="acessoVenosoCentral"  required autocomplete="acessoVenosoCentral">
                                @error('acessoVenosoCentral')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>


                   <!--  avcOnde -->
                      <div class="form-group row">
                            <label for="avcOnde" class="col-md-4 col-form-label text-md-right">{{ __('Onde ? Acesso Venoso Central') }}</label>
                            <div class="col-md-6">
                                <input id="avcOnde" type="text" class="form-control @error('avcOnde') is-invalid @enderror" name="avcOnde"  required autocomplete="avcOnde">
                                @error('avcOnde')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>


                      <!--  acessoVenosoPeriferico -->
                      <div class="form-group row">
                            <label for="acessoVenosoPeriferico" class="col-md-4 col-form-label text-md-right">{{ __('Acesso Venoso Periférico') }}</label>
                            <div class="col-md-6">
                                <input id="acessoVenosoPeriferico" type="text" class="form-control @error('acessoVenosoPeriferico') is-invalid @enderror" name="acessoVenosoPeriferico"  required autocomplete="acessoVenosoPeriferico">
                                @error('acessoVenosoPeriferico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>


                        <!--  dve -->
                      <div class="form-group row">
                            <label for="dve" class="col-md-4 col-form-label text-md-right">{{ __('DVE') }}</label>
                            <div class="col-md-6">
                                <input id="dve" type="text" class="form-control @error('dve') is-invalid @enderror" name="dve"  required autocomplete="dve">
                                @error('dve')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>



              <div class="container">

            <!--  outros -->
                <div class="form-group row">
                              <label for="outros" class="col-md-4 col-form-label text-md-right">{{ __('Outros') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('outros') is-invalid @enderror" name="outros"  required autocomplete="outros" rows="3"></textarea>
                                @error('outros')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
              </div>
              </div>
    </div>
                  </div>
                        </div>
                        </div>

<!--  fim -->



    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Suporte Hemodinâmico: Drogas em BIC') }}</div>
              
             
                <div class="card-body">

              
             
     <table class="table">
  <thead class="">
    <tr>
   
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>NORADRENALINA</td>
      <td>VASOPRESINA</td>

    </tr>
    <tr>
      <td>ml/h</td>
      <td>ml/h</td>
    </tr>

  </tbody>
</table>




<table class="table">
  <thead class="">
    <tr>
   
    </tr>
  </thead>
  <tbody>
    <tr>

      <td>DOBUTAMINA</td>

    </tr>
    <tr>
       <td>ml/h</td>
    </tr>

  </tbody>
</table>







         

          <!--  Outros Especificar Drogas e Vazão -->
          <div class="form-group row">
                            <label for="diagnostico" class="col-md-4 col-form-label text-md-right">{{ __('Outros especificar drogas e vazão') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('drogas') is-invalid @enderror" name="drogas"  required autocomplete="drogas" rows="3"></textarea>
                                @error('drogas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
              </div>
          
          

            
            <!--  Sedação  -->
              <div class="form-group row">
                            <label for="diagnostico" class="col-md-4 col-form-label text-md-right">{{ __('Sedação') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('sedacao') is-invalid @enderror" name="sedacao"  required autocomplete="sedacao" rows="3"></textarea>
                                @error('sedacao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
              </div>
          
              </div>
                        </div>
                        </div>
                        </div>

<!--  fim -->



<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Suporte Ventilatorio:') }}</div>
                   <div class="card-body">



                   
                   
                    <!--  suporteo2 -->
                   <div class="form-group row" required>
                            <label for="metodo" class="col-md-4 col-form-label text-md-right">{{ __('suporteo2 ') }}</label>
                            <div class="col-md-6">
                            <select id="suporteo2" class="form-control" name="suporteo2">
                            <option selected></option>
                            <option value="SIM">SIM</option>
                            <option value="NÃO">NÃO</option>
                            </select>    
                            </div>
                        </div>










                                            
                      <!--  cateter -->
                      <div class="form-group row">
                            <label for="cateter" class="col-md-4 col-form-label text-md-right">{{ __('Cateter') }}</label>
                            <div class="col-md-6">
                                <input id="cateter" type="text" class="form-control @error('cateter') is-invalid @enderror" name="cateter"  required autocomplete="cateter">
                                @error('cateter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="cateter" class="col-md-4 col-form-label text-md-right">{{ __('L/min') }}</label>

                       </div>



                                                  
                      <!--  Mascara Reservatório -->
                      <div class="form-group row">
                            <label for="mascara" class="col-md-4 col-form-label text-md-right">{{ __('Mascara Reservatório') }}</label>
                            <div class="col-md-6">
                                <input id="mascara" type="text" class="form-control @error('mascara') is-invalid @enderror" name="mascara"  required autocomplete="mascara">
                                @error('cateter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>




                      <!-- Outros -->
                      <div class="form-group row">
                            <label for="outroSu" class="col-md-4 col-form-label text-md-right">{{ __('Outros') }}</label>
                            <div class="col-md-6">
                                <input id="outroSu" type="text" class="form-control @error('outroSu') is-invalid @enderror" name="outroSu"  required autocomplete="outroSu">
                                @error('outroSu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>

                    
                 <!-- vm -->
                  <div class="form-group row" required>
                            <label for="vm" class="col-md-4 col-form-label text-md-right">{{ __('vm ') }}</label>
                            <div class="col-md-6">
                            <select id="vm" class="form-control" name="vm">
                            <option selected></option>
                            <option value="SIM">SIM</option>
                            <option value="NÃO">NÃO</option>
                            </select>    
                            </div>
                        </div>



                     <!-- Fio2 -->
                      <div class="form-group row">
                            <label for="fiO2" class="col-md-4 col-form-label text-md-right">{{ __('FiO2') }}</label>
                            <div class="col-md-6">
                                <input id="fiO2" type="text" class="form-control @error('fiO2') is-invalid @enderror" name="fiO2"  required autocomplete="fiO2">
                                @error('fiO2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>


                       
                     <!-- peep -->
                      <div class="form-group row">
                            <label for="peep" class="col-md-4 col-form-label text-md-right">{{ __('PEEP') }}</label>
                            <div class="col-md-6">
                                <input id="peep" type="text" class="form-control @error('peep') is-invalid @enderror" name="peep"  required autocomplete="peep">
                                @error('peep')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>



                     <!-- spO2 -->
                      <div class="form-group row">
                            <label for="spO2" class="col-md-4 col-form-label text-md-right">{{ __('SPO2') }}</label>
                            <div class="col-md-6">
                                <input id="spO2" type="text" class="form-control @error('spO2') is-invalid @enderror" name="spO2"  required autocomplete="spO2">
                                @error('spO2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>


                       
                     <!-- prona -->
                      <div class="form-group row">
                            <label for="prona" class="col-md-4 col-form-label text-md-right">{{ __('Prona') }}</label>
                            <div class="col-md-6">
                                <input id="prona" type="text" class="form-control @error('prona') is-invalid @enderror" name="prona"  required autocomplete="prona">
                                @error('prona')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>



                       <!-- Volume -->
                      <div class="form-group row">
                            <label for="volume" class="col-md-4 col-form-label text-md-right">{{ __('Volume') }}</label>
                            <div class="col-md-6">
                                <input id="volume" type="text" class="form-control @error('volume') is-invalid @enderror" name="volume"  required autocomplete="volume">
                                @error('volume')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>


                

                    <!--  risco -->
                    <div class="form-group row" required>
                            <label for="metodo" class="col-md-4 col-form-label text-md-right">{{ __('Classificação de Risco do Transporte ') }}</label>
                            <div class="col-md-6">
                            <select id="risco" class="form-control" name="risco">
                            <option selected></option>
                            <option value="baixo">Baixo</option>
                            <option value="medio">Médio</option>
                            <option value="Alto">Alto</option>
                            </select>    
                            </div>
                        </div>






                        </div>
                        </div>
                        </div>
                        </div>

<!--  fim -->






<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Informações Complementares:') }}</div>
              
             
                <div class="card-body">


  


                      <!--  Funcionalidade -->
                    <div class="form-group row" required>
                            <label for="aguda" class="col-md-4 col-form-label text-md-right">{{ __(' Funcionalidade Prévia') }}</label>
                            <div class="col-md-6">
                            <select id="funcionalidade" class="form-control" name="funcionalidade">
                            <option selected></option>
                            <option value="ECOG">ECOG</option>
                            <option value="PPS">PPS</option>
                            </select>    
                            </div>
                        </div>


           
                

            
                      <!--  aguda -->
                      <div class="form-group row" required>
                            <label for="aguda" class="col-md-4 col-form-label text-md-right">{{ __(' Disfunção Renal Aguda') }}</label>
                            <div class="col-md-6">
                            <select id="aguda" class="form-control" name="aguda">
                            <option selected></option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                            </select>    
                            </div>
                        </div>




                  

          <!-- PA -->
          <div class="form-group row">
                            <label for="pa" class="col-md-4 col-form-label text-md-right">{{ __('PA') }}</label>
                            <div class="col-md-6">
                                <input id="pa" type="text" class="form-control @error('pa') is-invalid @enderror" name="pa"  required autocomplete="pa">
                                @error('pa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>






          <!-- FC -->
          <div class="form-group row">
                            <label for="fc" class="col-md-4 col-form-label text-md-right">{{ __('FC') }}</label>
                            <div class="col-md-6">
                                <input id="fc" type="text" class="form-control @error('fc') is-invalid @enderror" name="fc"  required autocomplete="fc">
                                @error('fc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>






            
          <!-- spo2 -->
          <div class="form-group row">
                            <label for="spo2c" class="col-md-4 col-form-label text-md-right">{{ __('SPO2') }}</label>
                            <div class="col-md-6">
                                <input id="spo2c" type="text" class="form-control @error('spo2c') is-invalid @enderror" name="spo2c"  required autocomplete="spo2c">
                                @error('spo2c')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>

                     
                    <!-- glasgow -->
                   <div class="form-group row">
                            <label for="spo2c" class="col-md-4 col-form-label text-md-right">{{ __('Glasgow') }}</label>
                            <div class="col-md-6">
                                <input id="glasgow" type="text" class="form-control @error('glasgow') is-invalid @enderror" name="glasgow"  required autocomplete="glasgow">
                                @error('glasgow')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>


          <!-- Temp -->
          <div class="form-group row">
                            <label for="temp" class="col-md-4 col-form-label text-md-right">{{ __('Temp') }}</label>
                            <div class="col-md-6">
                                <input id="temp" type="text" class="form-control @error('spo2c') is-invalid @enderror" name="temp"  required autocomplete="temp">
                                @error('temp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>


        
          <!-- Peso  -->
          <div class="form-group row">
                            <label for="peso" class="col-md-4 col-form-label text-md-right">{{ __('Peso') }}</label>
                            <div class="col-md-6">
                                <input id="peso" type="text" class="form-control @error('spo2c') is-invalid @enderror" name="peso"  required autocomplete="peso">
                                @error('peso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>



            <!-- Altura  -->
          <div class="form-group row">
                            <label for="altura" class="col-md-4 col-form-label text-md-right">{{ __('Altura') }}</label>
                            <div class="col-md-6">
                                <input id="altura" type="text" class="form-control @error('altura') is-invalid @enderror" name="altura"  required autocomplete="altura">
                                @error('peso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>




        
            <!-- Outros  -->
            <div class="form-group row">
                            <label for="altura" class="col-md-4 col-form-label text-md-right">{{ __('Outros') }}</label>
                            <div class="col-md-6">
                                <input id="outrosIC" type="text" class="form-control @error('outrosIC') is-invalid @enderror" name="outrosIC"  required autocomplete="outrosIC">
                                @error('outrosIC')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>




            <!-- FR  -->
            <div class="form-group row">
                            <label for="fr" class="col-md-4 col-form-label text-md-right">{{ __('FR') }}</label>
                            <div class="col-md-6">
                                <input id="fr" type="text" class="form-control @error('fr') is-invalid @enderror" name="fr"  required autocomplete="fr">
                                @error('fr')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>



                       
            <!-- hgt  -->
          <div class="form-group row">
                            <label for="hgt" class="col-md-4 col-form-label text-md-right">{{ __('HGT') }}</label>
                            <div class="col-md-6">
                                <input id="hgt" type="text" class="form-control @error('hgt') is-invalid @enderror" name="hgt"  required autocomplete="hgt">
                                @error('hgt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>



       <!--  Comorbidades  -->
       <div class="form-group row">
                            <label for="comorbidades" class="col-md-4 col-form-label text-md-right">{{ __('Comorbidades ') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('comorbidades') is-invalid @enderror" name="comorbidades"  required autocomplete="comorbidades" rows="3"></textarea>
                                @error('comorbidades')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
              </div>


       <!--  Histórico Clinico Atual   -->
       <div class="form-group row">
                            <label for="historicoClinico" class="col-md-4 col-form-label text-md-right">{{ __('Histórico Clínico Atual ') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('historicoClinico') is-invalid @enderror" name="historicoClinico"  required autocomplete="historicoClinico" rows="3"></textarea>
                                @error('historicoClinico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
              </div>


              
       <!--  Exames Físicos  -->
       <div class="form-group row">
                            <label for="efisico" class="col-md-4 col-form-label text-md-right">{{ __(' Exames Físicos ') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('efisico') is-invalid @enderror" name="efisico"  required autocomplete="efisico" rows="3"></textarea>
                                @error('efisico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
              </div>


              
       <!--  Exames complementares   -->
       <div class="form-group row">
                            <label for="eComplementar" class="col-md-4 col-form-label text-md-right">{{ __(' Exames complementares') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('eComplementar') is-invalid @enderror" name="eComplementar"  required autocomplete="eComplementar" rows="3"></textarea>
                                @error('eComplementar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
              </div>




                       </div>
                        </div>
                        </div>
                        </div>

<!--  fim -->






<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dados do Login:') }}</div>
              
             
                <div class="card-body">

                               
            <!-- usuário  -->
            <div class="form-group row">
                            <label for="usuario" class="col-md-4 col-form-label text-md-right">{{ __('Login de preenchimento ') }}</label>
                            <div class="col-md-6">
                                <input id="usuario" type="text" class="form-control @error('usuario') is-invalid @enderror" name="usuario" value="{{Auth::user()->email}}"  required autocomplete="usuario" readonly>
                                @error('usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>



            <!-- Data do Preenchimento   -->
            <div class="form-group row">
                            <label for="preenchimento" class="col-md-4 col-form-label text-md-right">{{ __('Data do preenchimento ') }}</label>
                            <div class="col-md-6">
                                <input id="preenchimento" type="text" class="form-control @error('preenchimento') is-invalid @enderror" name="preenchimento" value="<?php echo $today = date("d/m/20y"); ?>"  required autocomplete="preenchimento"  readonly>
                                @error('preenchimento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>


 <?php
$h = "3"; //HORAS DO FUSO ((BRASÍLIA = -3) COLOCA-SE SEM O SINAL -).
$hm = $h * 60;
$ms = $hm * 60;
//COLOCA-SE O SINAL DO FUSO ((BRASÍLIA = -3) SINAL -) ANTES DO ($ms). DATA
$gmdata = gmdate("d/m/Y", time()-($ms)); 
//COLOCA-SE O SINAL DO FUSO ((BRASÍLIA = -3) SINAL -) ANTES DO ($ms). HORA
$gmhora = gmdate("H:i:s", time()-($ms)); 

$today = date("H:i:s");

?>


             <!-- A hora do preenchimento  -->
              <div class="form-group row">
                            <label for="horaPreenchimento" class="col-md-4 col-form-label text-md-right">{{ __('Hora de preenchimento ') }}</label>
                            <div class="col-md-6">
                            <input id="horaPreenchimento" type="text" class="form-control @error('horaPreenchimento') is-invalid @enderror" name="horaPreenchimento" value="<?php echo   $gmhora; ?>"  required autocomplete="horaPreenchimento" readonly>
                                @error('horaPreenchimento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>
                 
                       </div>
                        </div>
                        </div>
                        </div>

<!--  fim -->
                            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                               <input type="submit" Value="Cdastrar">
                            </div>
                        </div>
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

