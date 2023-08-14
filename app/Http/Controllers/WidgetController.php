<?php

// app/Http/Controllers/WidgetController.php
namespace App\Http\Controllers;

use App\Services\WidgetDataService;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class WidgetController extends Controller
{
    public function exportData(Request $request, WidgetDataService $widgetDataService)
    {
        $html = view('dashboard')->render();

         // Extract data from each widget
         $widget1Data = $widgetDataService->extractDataFromHtml($html);
         $widget2Data = $widgetDataService->extractDataFromHtml($html);
         // Add more widgets as needed

         // Combine widget data into a single array
         $allWidgetData = array_merge($widget1Data, $widget2Data);
         // Merge more widget data arrays if you have more widgets

         return Excel::download(new DataExport($allWidgetData), 'all_widget_data.xlsx');
    }
}

class DataExport implements FromCollection, WithHeadings
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return collect($this->data);
    }

    public function headings(): array
    {
        return ['Title', 'Amount', 'Percentage'];
    }
}
