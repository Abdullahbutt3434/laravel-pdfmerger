<?php namespace abdullahbutt3434\PDFMerger\Facades;

use Illuminate\Support\Facades\Facade;

class PdfMerger extends Facade {
	
    protected static function getFacadeAccessor()
    {
        return 'pdf-merger';
    }
} 