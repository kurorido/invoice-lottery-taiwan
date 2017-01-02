<?php

namespace Roliroli\InvoiceLotteryTaiwan;

class InvoiceLotteryTaiwan
{

    private static $HOST = 'http://invoice.etax.nat.gov.tw';

    public static function query()
    {
        libxml_use_internal_errors(true);
        $html = new \DOMDocument();
        $html->loadHTMLFile(self::$HOST);

        $new = self::parse($html->getElementById('area1'));
        $old = self::parse($html->getElementById('area2'));

        return compact('new', 'old');
    }

    private static function parse($area)
    {
        $result = [];

        $titleElements = $area->getElementsByTagName('h2');
        $title = $titleElements->item($titleElements->length - 1)->nodeValue;
        $rows = $area->getElementsByTagName('tr');

        for ($i = 1; $i < $rows->length; $i++) {

            $row = $rows[$i];

            $cells = $row->getElementsByTagName('td');

            // 獎別
            $name = trim($cells->item(0)->nodeValue);

            // 中獎號碼
            $number_cell = $cells->item(1);

            $element_numbers = $number_cell->getElementsByTagName('span')->item(0);
            $number = $element_numbers ? trim($element_numbers->nodeValue) : '';
            $numbers = $number == '' ? [] : explode('、', $number);
            if ($element_numbers) $number_cell->removeChild($element_numbers);

            $description = trim($number_cell->nodeValue);

            $key = '';

            switch ($i) {
              case 1: $key = 'super';    break;
              case 2: $key = 'special';  break;
              case 3: $key = 'first';    break;
              case 4: $key = 'second';   break;
              case 5: $key = 'thrid';    break;
              case 6: $key = 'fourth';   break;
              case 7: $key = 'fifth';    break;
              case 8: $key = 'sixth';    break;
              case 9: $key = 'addition'; break;
            }

            $result[$key] = compact('title', 'name', 'numbers', 'description');
        }

        return $result;
    }
}