<?php

use PHPUnit\Framework\TestCase;
use Danso\DigitalCep\Search;

class SearchTest extends TestCase
{
    /**
     * @dataProvider dadosTeste
     */
    public function testGetAddressFromZipCodeDefaultUsage(string $input, array $esperado) {
        $resultado = new Search;
        $resultado = $resultado->getAddressFromZipCode($input);

       


        $this->assertEquals($esperado, $resultado);
    }

    public function dadosTeste() {
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
                    "gia" => '1004',
                    "ddd" => '11',
                    "siafi" => '7107',
                ]
            ],
            "Endereço Guararema" => [
                "08900000",
                [
                    "cep" => "08900-000",
                    "logradouro" => "",
                    "complemento" => "",
                    "bairro" => "",
                    "localidade" => "Guararema",
                    "uf" => "SP",
                    "ibge" => "3518305",
                    "gia" => '3311',
                    "ddd" => '11',
                    "siafi" => '6467',
                ]
            ],
        ];
    }

}