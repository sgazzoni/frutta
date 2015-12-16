<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    	//serve in fase di aggiornamento, a dire al programma che i dati devono essere accettati. (sono sicuri)
	protected $fillable = ['title','body','codice_prodotto','disponibile','prezzo','categoria','immagine'];
}
