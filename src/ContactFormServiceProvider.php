<?php
namespace Iocod\ContactForm;
use Illuminate\Support\ServiceProvider;
class ContactFormServiceProvider extends ServiceProvider {
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->loadViewsFrom(__DIR__.'/resources/views', 'contact_form');
    }
    public function register()
    {
    }
}
?>
