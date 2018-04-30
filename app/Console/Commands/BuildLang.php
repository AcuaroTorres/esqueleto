<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class BuildLang extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'BuildLang {lang : en|es|etc...}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Build lang files: Ex: "php artisan BuildLang es" generate es.json file with all string to translate in view folder (*.blade.php)';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {                
        $lang = $this->argument('lang');

        $lang_file = 'resources\\lang\\'.$lang.'.json';

        $arr_strings = $arr_finded = array();

        if(file_exists($lang_file)) {
            $lang_content = file_get_contents($lang_file, true);
            $arr_strings = json_decode($lang_content, true);
        }

        $Directory = new \RecursiveDirectoryIterator('resources\\views\\');
        $Iterator = new \RecursiveIteratorIterator($Directory);
        $Regex = new \RegexIterator($Iterator, '/^.+\.blade.php$/i', \RecursiveRegexIterator::GET_MATCH);

        foreach($Regex as $name => $object){
            $input_lines = file_get_contents("$name", true);
            preg_match_all("/\@lang\('(.*)'/U", $input_lines, $output_array);
            $arr_finded = array_merge($arr_finded,$output_array[1]);
            preg_match_all("/\{{__\('(.*)'/U", $input_lines, $output_array);
            $arr_finded = array_merge($arr_finded,$output_array[1]);
        }

        foreach($arr_finded as $key=>$val){ 
            if(!array_key_exists($val, $arr_strings)) {
                $arr_strings[$val]=null;
            }
        }

        $locale = '{'."\n";

        foreach($arr_strings as $key=>$val){
            $locale .= "\t\"$key\":\"$val\",\n";
        }

        $locale = rtrim($locale,",\n");
        $locale .= "\n".'}'."\n";

        file_put_contents($lang_file, $locale);
        echo "\n".$lang_file."\n\n";
        echo $locale;
    }
}
