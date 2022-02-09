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
      'hospitalOrigem',
      'LeitoOrigem',
      'hospitalDestino',
      'LeitoDestino',
      'quemRecebe',

      

      /*333333333333333333333333333333333333333333333333333 */ 
      'padrao',
      'contato',
      'respiratoria',
      'covid',
      'metodo',
      'data',
     
      
 
               

   ];
}


  
