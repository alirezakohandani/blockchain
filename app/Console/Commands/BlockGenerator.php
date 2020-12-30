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
        $diffculty = $this->argument('difficulty');
        $number = ['0'];

        for ($i=0; $i <$diffculty - 1 ; $i++) { 
            $number[0] = $number[0] . '0';
        }
        while(true)
        {
            $genesis = 'hdasvfhvgsja42358jbdafdas';
            $nonce = rand(1,10000);
            $hash = md5($genesis . $nonce);
            echo $hash . "\n";
            if (substr($hash, 0, $diffculty) === $number[0]) {
                echo "Block genereated\n";
                break;
            }
        }
    }
}
