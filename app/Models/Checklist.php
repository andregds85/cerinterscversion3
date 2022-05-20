<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checklist extends Model
{
    use HasFactory;
    protected $table="checklist";
    protected $fillable = [
   
      'nome',
      'dataSolicitacao',
      'cns',
      'dn',
      'idade',
      'sexo',
      'cpf',
      'rg',
      'orgaoEmissor',
      'vacina',
      'estado',
      'diagnostico',
     
     
      'gestante',
      'nasceDestino',



      'hospitalOrigem',
      'LeitoOrigem',

      'setorOrigem',
      'medicoResponsavel',
      
      'hospitalDestino',
      'LeitoDestino',
      'quemRecebe',

    
      /*333333333333333333333333333333333333333333333333333 */ 
      'padrao',
      'contato',
      'motivoContato',

      'respiratoria',
      'motivoRespiratoria',

      'covid',
      'metodo',
      'data',
      /*Dispositivos invasivos */ 
      /*fila 1 */ 
      'sng',
      'svd',
      'dreno',
      'tottqd',
      /*Dispositivos invasivos */ 
      /*fila 2 */ 
      'acessoVenosoCentral',
      'avcOnde',
      'acessoVenosoPeriferico',
      /*Dispositivos invasivos */ 
      /*fila 3 */ 
      'dve',
      'outros',
      
      
      
      /*suporte hemodinamico */ 
      'drogas',
      'sedacao',




     /*suporte ventilatorio */ 
     'suporteo2',
     'cateter',
     'mascara',
     'outroSu',
     'vm',
     'fiO2',
     'peep',
     'spO2',
     'prona',
     'volume',

     'risco',

   /*informações complementares */ 
    'aguda',
    'funcionalidade',
    'pa',
    'fc',
    'spo2c',
    'glasgow',
    'temp',
    'peso',
    'altura',
    'outrosIC',
    'fr',
    'hgt',
    'comorbidades',
    'historicoClinico',
    'efisico',
    'eComplementar',
 


    /*Regulação Estadual */ 
      'usuario',
      'preenchimento',
      'horaPreenchimento',
             








             

   ];
}


