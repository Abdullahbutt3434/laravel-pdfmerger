<?php namespace abdullahbutt3434\PDFMerger\Providers;

use Illuminate\Support\ServiceProvider;

class PdfMergerServiceProvider extends ServiceProvider {

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('pdf-merger', function($app)
        {
            return new PdfManage();
        });
    }
} 