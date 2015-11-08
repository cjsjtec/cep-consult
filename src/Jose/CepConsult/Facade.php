<?php namespace Jose\CepConsult;

use Illuminate\Support\Facades\Facade as BaseFacade;

class Facade extends BaseFacade
{
	protected static function getFacadeAccessor()
	{
		return 'cep_consulta';
	}
}