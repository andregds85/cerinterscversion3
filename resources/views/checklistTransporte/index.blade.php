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


if(document.regform.macroOrigem.value==""  || document.regform.macroOrigem.value.length < 3)   
{
alert( "Preencha campo Macro de Origem Corretamente ");
regform.macroOrigem.focus();
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

if(document.regform.macroDestino.value==""  || document.regform.macroDestino.value.length < 3)   
{
alert( "Preencha campo Macro de Destino Corretamente ");
regform.macroDestino.focus();
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


if(document.regform.respiratoria.value=="") 
{
 alert( "Selecione campo respiratoria com Sim / Não ");
regform.respiratoria.focus();
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

if(document.regform.gtt.value=="") 
{
 alert( "Preencha Campo gtt ");
regform.gtt.focus();
return false;
}


if(document.regform.pai.value=="") 
{
 alert( "Preencha Campo pai ");
regform.pai.focus();
return false;
}



if(document.regform.kehr.value=="") 
{
 alert( "Preencha Campo kehr ");
regform.kehr.focus();
return false;
}


if(document.regform.acessoVenosoCentral.value=="") 
{
 alert( "Preencha Campo Acesso Venoso Central ");
regform.acessoVenosoCentral.focus();
return false;
}


if(document.regform.acessoVenosoPeriferico.value=="") 
{
 alert( "Preencha Campo Acesso Venoso Periferico ");
regform.acessoVenosoPeriferico.focus();
return false;
}


if(document.regform.cateterDialise.value=="") 
{
 alert( "Preencha Campo Cateter Dialise ");
regform.cateterDialise.focus();
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

if(document.regform.comorbidades.value=="") 
{
alert( "Preencha o Campo  comorbidades");
regform.comorbidades.focus();
return false;
}

if(document.regform.nir.value=="") 
{
alert( "Preencha o Campo  nir");
regform.nir.focus();
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


                         <!--  VACINA COVID -->
                          <div class="form-group row" required>
                              <label for="va" class="col-md-4 col-form-label text-md-right">{{ __('Vacina Covid 19') }}</label>
                            <div class="col-md-6">
                            <select id="vacina" class="form-control" name="vacina">
                            <option selected></option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                            </select>    
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



                       <!--  GESTANTE   -->
                      <div class="form-group row" required>
                       <label for="gestante" class="col-md-4 col-form-label text-md-right">{{ __('Gestante') }}</label>
                            <div class="col-md-6">
                            <select id="gestante" class="form-control" name="gestante">
                            <option selected></option>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                            </select>    
                            </div>
                        </div>


                      
                      <!--  recebeGestante -->
                      <div class="form-group row">
                            <label for="recebeGestante" class="col-md-4 col-form-label text-md-right">{{ __('Quem Recebe') }}</label>
                            <div class="col-md-6">
                                <input id="recebeGestante" type="text" class="form-control @error('recebeGestante') is-invalid @enderror" name="recebeGestante"  required autocomplete="recebeGestante">
                                @error('recebeGestante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       </div>


                     
                     <!--  Se o Nascimento for no local de Destino  -->
                      <div class="form-group row">
                            <label for="nascDestino" class="col-md-4 col-form-label text-md-right">{{ __('Se o nascimento for no local de destino ?') }}</label>
                            <div class="col-md-6">
                                <input id="nascDestino" type="text" class="form-control @error('nascDestino') is-invalid @enderror" name="nascDestino"  required autocomplete="nascDestino">
                                @error('nascDestino')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
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


                      
                      
                        <!--  Setor de Origem -->
                         <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Setor de Origem:') }}</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" required autocomplete="nome">
                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
   



                       <!--  Médico responsavel  -->
                       <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Médico Responsável') }}</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" required autocomplete="nome">
                                @error('nome')
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
    


                <!--  Motivo do Contato -->
       <div class="form-group row">
                            <label for="mcontato" class="col-md-4 col-form-label text-md-right">{{ __('Motivo do Contato ') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('mcontato') is-invalid @enderror" name="mcontato"  required autocomplete="mcontato" rows="3"></textarea>
                                @error('diagnostico')
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




        <!--  Motivo do Contato -->
       <div class="form-group row">
                            <label for="mrespiratoria" class="col-md-4 col-form-label text-md-right">{{ __('Motivo: Respiratoria') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('mrespiratoria') is-invalid @enderror" name="mrespiratoria"  required autocomplete="mrespitartoria" rows="3"></textarea>
                                @error('mrespiratoria')
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
                            <option value="TR">Antigeno</option>
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




                          <!--  SNG -->
                          <div class="form-group row">
                            <label for="sng" class="col-md-4 col-form-label text-md-right">{{ __('SNG') }}</label>
                            <div class="col-md-6">
                                <input id="sng" type="text" class="form-control @error('sng') is-invalid @enderror" name="sng" required autocomplete="sng">
                                @error('sng')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
              

                          <!--  SVD -->
                          <div class="form-group row">
                            <label for="svd" class="col-md-4 col-form-label text-md-right">{{ __('Svd') }}</label>
                            <div class="col-md-6">
                                <input id="svd" type="text" class="form-control @error('svd') is-invalid @enderror" name="svd" required autocomplete="svd">
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
                                <input id="dreno" type="text" class="form-control @error('dreno') is-invalid @enderror" name="dreno" required autocomplete="dreno">
                                @error('dreno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
       

                <!--  DVE -->
                <div class="form-group row">
                            <label for="dve" class="col-md-4 col-form-label text-md-right">{{ __('DVE') }}</label>
                            <div class="col-md-6">
                                <input id="dve" type="text" class="form-control @error('dve') is-invalid @enderror" name="dve" required autocomplete="dve">
                                @error('dve')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
                        
             
                <!--  Acesso Venoso Central -->
                <div class="form-group row">
                            <label for="avc" class="col-md-4 col-form-label text-md-right">{{ __('Acesso Venoso Central') }}</label>
                            <div class="col-md-6">
                                <input id="avc" type="text" class="form-control @error('avc') is-invalid @enderror" name="avc" required autocomplete="avc">
                                @error('avc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
                
                <!-- Onde ? -->
                <div class="form-group row">
                            <label for="periferico" class="col-md-4 col-form-label text-md-right">{{ __('Acesso Venoso Central Onde ?') }}</label>
                            <div class="col-md-6">
                                <input id="avconde" type="text" class="form-control @error('avconde') is-invalid @enderror" name="avconde" required autocomplete="avconde">
                                @error('avconde')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
        
                        
                    
                    
                        <!--  Acesso Venoso Periférico -->
                         <div class="form-group row">
                            <label for="periferico" class="col-md-4 col-form-label text-md-right">{{ __('Acesso Venoso Periférico') }}</label>
                            <div class="col-md-6">
                                <input id="periferico" type="text" class="form-control @error('periferico') is-invalid @enderror" name="periferico" required autocomplete="periferico">
                                @error('periferico')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


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

<!--  fim -->



                            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 



