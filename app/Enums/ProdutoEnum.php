<?php

namespace App\Enums;

enum ProdutoEnum: string
{
    case CHAPAS_ACM = 'Chapas de ACM';
    case FITA_DUPLA_FACE = 'Fita Dupla Face';
    case FITA_FORTE_ADERE = 'Fita Forte Adere';
    case FITA_DUPLA_FACE_ALTA_PERFORMANCE = 'Fita Dupla Face Alta Performance';
    case ILHOS_MACHO_10MM = 'Ilhós Macho 10mm';
    case ILHOSEIRA_APLICADORA = 'Ilhoseira Aplicadora';
    case PONTEIRAS = 'Ponteiras';
    case MODULO_LED_6013_12V = 'Módulo LED 6013 12V';
    case ALCOOL_ISOPROPILICO = 'Alcool Isopropílico ST900';
    case PRIMER_PA02 = 'Primer PA02';
    case LACA_ALT_PRO_BRILHO = 'Laca Alt Pro Brilho';
    case TINTA_SUBLIMATICA_KIAN = 'Tinta Sublimática Kian';
    case TINTA_MARA_JET_CYAN = 'Tinta Mara Jet Cyan 500ml';
    case ADESIVO_PERFURADO = 'Adesivo Perfurado';
    case ADESIVO_BRANCO = 'Adesivo Branco';
    case PVC_EXPANDIDO = 'PVC Expandido';
    case TINTA_SUBLIMATICA_MARABU = 'Tinta Sublimática Marabu';
    case SILICONE_NEUTRO_INCOLOR = 'Silicone Neutro Incolor 260g';
    case POXPUR_FLEX_PU_COLORS = 'Poxpur Flex PU Colors Base Poliuretano';

    public static function getProdutos(): array
    {
        return [
            self::CHAPAS_ACM->value => '/produtos/acm',
            self::FITA_DUPLA_FACE->value => '/produtos/fita_forte_adere_dupla_face',
            self::FITA_FORTE_ADERE->value => '/produtos/fita_forte_adere_dupla_face',
            self::FITA_DUPLA_FACE_ALTA_PERFORMANCE->value => '/produtos/fita_dupla_face_alta_performance',
            self::ILHOS_MACHO_10MM->value => '/produtos/ilho_macho_10mm',
            self::ILHOSEIRA_APLICADORA->value => '/produtos/ilhoseira_semi_auto_10mm',
            self::PONTEIRAS->value => '/produtos/ponteira',
            self::MODULO_LED_6013_12V->value => '/produtos/luz_led_12v',
            self::ALCOOL_ISOPROPILICO->value => '/produtos/alcool-isopropanol-st-900',
            self::PRIMER_PA02->value => '/produtos/primer_pa02_940ml',
            self::LACA_ALT_PRO_BRILHO->value => '/produtos/laca_alt_pro_brilho_1l',
            self::TINTA_SUBLIMATICA_KIAN->value => '/produtos/tinta_sublimatica_kian_1l',
            self::TINTA_MARA_JET_CYAN->value => '/produtos/tinta_mara_jet_cyan_500ml',
            self::ADESIVO_PERFURADO->value => '/produtos/adesivo_perfurado',
            self::ADESIVO_BRANCO->value => '/produtos/adesivo_branco',
            self::PVC_EXPANDIDO->value => '/produtos/pvc_expandido',
            self::TINTA_SUBLIMATICA_MARABU->value => '/produtos/tinta_sublimatica_marabu',
            self::SILICONE_NEUTRO_INCOLOR->value => '/produtos/silicone_neutro_incolor_260g',
            self::POXPUR_FLEX_PU_COLORS->value => '/produtos/poxpur_flex_pu_colors_base_poliuretano',
        ];
    }

    public static function getNomesProdutos(): array
    {
        return array_keys(self::getProdutos());
    }
}
