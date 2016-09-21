# CepConsult (Laravel4 Package) DEPRECATED

----------------------
This package has the objective to consult the CEP within one or more web APIs that will retrieve the address of the given number.
Esse pacote tem o objetivo de consultar o numero CEP em uma ou mais APIs web que irão retornar o endereço do numero dado.

### Required setup

In the `require` key of `composer.json` file add the following

    "cjsjtec/cep-consult": "dev-master"

Run the Composer update comand

    $ composer update

In your `config/app.php` add `'Jose\CepConsult\ServiceProvider'` to the end of the `$providers` array

    'providers' => array(

        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,
        ...
        Jose\CepConsult\ServiceProvider::class,

    ),

Then at the end of `config/app.php` add `'CepConsult'    => 'Jose\CepConsult\Facade'` to the `$aliases` array

    'aliases' => array(

        'App'        => 'Illuminate\Support\Facades\App',
        'Artisan'    => 'Illuminate\Support\Facades\Artisan',
        ...
        'CepConsult'    => 'Jose\CepConsult\Facade',

    ),

Now you are ready to go:

    // Simply do
    CepConsult::getAddress('01009-000');

    // Or
    CepConsult::getAddress('010090000');
