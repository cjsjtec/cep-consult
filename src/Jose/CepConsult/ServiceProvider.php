<?php namespace Jose\CepConsult;

use Illuminate\Support\ServiceProvider as BaseServiceProvidor;

class ServiceProvider extends BaseServiceProvidor
{

	public function register()
	{
		$this->app->bind('cep_consulta', function(){
			return new \Jose\CepConsult\CepConsult;
		});
	}
}