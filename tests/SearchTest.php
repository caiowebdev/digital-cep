<?php

use PHPUnit\Framework\TestCase;
use Caiowebdev\DigitalCep\Search;

class SearchTest extends TestCase
{
    /**
     * @dataProvider dadosTeste
     */

    public function testGetAddressFromZipcodeDefaultUsage(string $input, array $esperado)
    {
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipcode($input);

        $this->assertEquals($esperado, $resultado);
    }

    public function dadosTeste()
    {
        return [
            "Endereço Praça da Sé" => [
                "01001000",
                [
                    "cep" => "01001-000",
                    "logradouro" => "Praça da Sé",
                    "complemento" => "lado ímpar",
                    "bairro" => "Sé",
                    "localidade" => "São Paulo",
                    "uf" => "SP",
                    "ibge" => "3550308",
                    "gia" => "1004",
                    "ddd" => "11",
                    "siafi" => "7107"
                ]
            ],
            "Inspire" => [
                "06401160",
                [
                    'cep' => '06401-160',
                    'logradouro' => 'Avenida Henriqueta Mendes Guerra',
                    'complemento' => 'até 416 - lado par',
                    'bairro' => 'Vila São João',
                    'localidade' => 'Barueri',
                    'uf' => 'SP',
                    'ibge' => '3505708',
                    'gia' => '2069',
                    'ddd' => '11',
                    'siafi' => '6213'
                ]
            ],
        ];
    }
}