<?php

namespace App\Enums;

enum ProdutoEnum: string
{
    case CHAPAS_ACM = 'Chapas de ACM';
    case FITA_DUPLA_FACE = 'Fita Dupla Face';
    case FITA_FORTE_ADERE = 'Fita Forte Adere';
    case ILHOS_MACHO_10MM = 'Ilhós Macho 10mm';
    case ILHOSEIRA_APLICADORA = 'Ilhoseira Aplicadora';
    case PONTEIRAS = 'Ponteiras';
    case MODULO_LED_6013_12V = 'Módulo LED 6013 12V';
    case ALCOOL_ISOPROPILICO = 'Álcool Isopropílico';
    case PRIMER_PA02 = 'Primer PA02';
    case LACA_ALT_PRO_BRILHO = 'Laca Alt Pro Brilho';
    case TINTA_SUBLIMATICA_KIAN = 'Tinta Sublimática Kian';
    case ADESIVO_PERFURADO = 'Adesivo Perfurado';
    case ADESIVO_BRANCO = 'Adesivo Branco';
    case PVC_EXPANDIDO = 'PVC Expandido';

    public static function getProdutos(): array
    {
        return [
            self::CHAPAS_ACM->value => '/produtos/acm',
            self::FITA_DUPLA_FACE->value => '/produtos/fita_forte_adere_dupla_face',
            self::FITA_FORTE_ADERE->value => '/produtos/fita_forte_adere_dupla_face',
            self::ILHOS_MACHO_10MM->value => '/produtos/ilhoseira_semi_auto_10mm',
            self::ILHOSEIRA_APLICADORA->value => '/produtos/ilhoseira_semi_auto_10mm',
            self::PONTEIRAS->value => '/produtos/ponteira',
            self::MODULO_LED_6013_12V->value => '/produtos/luz_led_12v',
            self::ALCOOL_ISOPROPILICO->value => '/produtos/alcool-isopropanol-st-900',
            self::PRIMER_PA02->value => '/produtos/primer_pa02_940ml',
            self::LACA_ALT_PRO_BRILHO->value => '/produtos/laca_alt_pro_brilho_1l',
            self::TINTA_SUBLIMATICA_KIAN->value => '/produtos/tinta_sublimatica_kian_1l',
            self::ADESIVO_PERFURADO->value => '/produtos/adesivo_perfurado',
            self::ADESIVO_BRANCO->value => '/produtos/adesivo_branco',
            self::PVC_EXPANDIDO->value => '/produtos/pvc_expandido'
        ];
    }

    public static function getNomesProdutos(): array
    {
        return array_keys(self::getProdutos());
    }
}
