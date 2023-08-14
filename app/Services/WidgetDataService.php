<?php

// app/Services/WidgetDataService.php
namespace App\Services;

use DOMDocument;

class WidgetDataService
{
    public function extractDataFromHtml($html)
    {
        $dom = new DOMDocument();
        @$dom->loadHTML($html);

        $data = [];
        $cardNodes = $dom->getElementsByTagName('div');

        foreach ($cardNodes as $card) {
            if ($card->getAttribute('class') === 'card-flush') {
                $title = $card->getElementsByTagName('span')[1]->nodeValue;
                $amount = $card->getElementsByTagName('span')[0]->nodeValue;
                $percentage = $card->getElementsByTagName('span')[3]->nodeValue;

                $data[] = [
                    'Title' => $title,
                    'Amount' => $amount,
                    'Percentage' => $percentage,
                ];
            }
        }

        return $data;
    }
}
