<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MathCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'math:sum {--d}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'do something with user input!';

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
        $a=$this->ask('input first number:', 0);
        $b=$this->ask('input second number:', 0);
        $result=(int)$a+(int)$b;

        if ($this->option('d')){
            $result=$result*2;
        }

        $this->info('Result:'.$result);

    }
}
