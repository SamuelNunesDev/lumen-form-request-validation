<?php

namespace SamuelNunes\Console\Commands;

use SamuelNunes\Contracts\GenerateStubMethodsContract;
use Illuminate\Console\Command;

class RequestMakeCommand extends Command implements GenerateStubMethodsContract
{
    use ProvidesGenerateStubMethods;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:request {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate new form request validate';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Request';

     /**
     * The name of stub file.
     *
     * @var string
     */
    protected $stubName = 'request';

    /**
     * The class namespace
     * 
     * @var string
     */
    protected $namespace = '\Http\Requests';

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
