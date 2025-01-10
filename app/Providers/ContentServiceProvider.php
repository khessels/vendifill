<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\ServiceProvider;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app = config('kcs-content-manager.app');
        $path = storage_path('app/kcs-content-manager.resources.' . Lang::locale());
        try{
            $content = file_get_contents( $path );
        }catch(\Exception $e){
            $content = "[]";
        }
        Blade::directive('c', function (string $expression) use ( $content) {
            $contentEditMode = Cache::get('kcs-content-manager.edit-mode');
            if( $contentEditMode) {
                return "<?php echo \App\Http\Controllers\ContentController::translate(  $expression, '" . $content . "'); ?>";
            }else{
                return "<?php echo \App\Http\Controllers\ContentController::translateEdit(  $expression, '" . $content . "'); ?>";
            }
        });
    }
}
