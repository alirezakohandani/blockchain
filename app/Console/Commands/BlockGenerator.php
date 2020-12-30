<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class BlockGenerator extends Command
{
   /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:block {difficulty : please set difficulty level. suggestion(1,2,3).}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generating block with diffault difficulty level 00XXXXXX';

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
     * @return int
     */
    public function handle()
    {
        $number = [1 => '0', 2 => '00', 3 => '000'];
        while(true)
        {
            $genesis = 'hdasvfhvgsja42358jbdafdas';
            $nonce = rand(1,1000);
            $hash = md5($genesis . $nonce);
            echo $hash . "\n";
            if (substr($hash, 0, $this->argument('difficulty')) == $number[$this->argument('difficulty')]) {
                echo "Block genereated\n";
                break;
            }
        }
    }
}
