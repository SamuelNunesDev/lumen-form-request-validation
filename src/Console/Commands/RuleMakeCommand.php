<?php

namespace SamuelNunes\Console\Commands;

use SamuelNunes\Contracts\GenerateStubMethodsContract;
use Illuminate\Console\Command;

class RuleMakeCommand extends Command implements GenerateStubMethodsContract
{
    use ProvidesGenerateStubMethods;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:rule {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate new validation request rule';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Rule';

     /**
     * The name of stub file.
     *
     * @var string
     */
    protected $stubName = 'rule';

    /**
     * The class namespace
     * 
     * @var string
     */
    protected $namespace = '\Rules';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->generateClassFromStub();
    }
}
