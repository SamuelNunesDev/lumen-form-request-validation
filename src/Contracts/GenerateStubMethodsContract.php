<?php 

namespace SamuelNunes\LumenFormRequestValidation\Contracts;

interface GenerateStubMethodsContract
{
    /**
     * Generate file from stub.
     * 
     * @return void
     */
    public function generateClassFromStub();

     /**
     * Get the stub file name for the generator.
     *
     * @return string
     */
    public function getStub();

    /**
     * Parse the class name and format according to the root namespace.
     *
     * @param  string  $name
     * @return string
     */
    public function qualifyClass($name);

    /**
     * Get root location the file should be written to.
     * 
     * @param string $rootNamespace
     * @return string
    */
    public function getDefaultNamespace($rootNamespace);

    /**
     * Get the root namespace for the class.
     *
     * @return string
     */
    public function rootNamespace();

    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    public function getPath($name);

    /**
     * Build the directory for the class if necessary.
     *
     * @param  string  $path
     * @return string
     */
    public function makeDirectory($path);

    /**
     * Build the class with the given name.
     *
     * @param  string  $name
     * @return string
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function buildClass($name);

    /**
     * Replace the namespace for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return $this
     */
    public function replaceNamespace(&$stub, $name);

    /**
     * Get the full namespace for a given class, without the class name.
     *
     * @param  string  $name
     * @return string
     */
    public function getNamespace($name);

    /**
     * Replace the class name for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return string
     */
    public function replaceClass($stub, $name);

    /**
     * Alphabetically sorts the imports for the given stub.
     *
     * @param  string  $stub
     * @return string
     */
    public function sortImports($stub);

     /**
     * Get the model for the default guard's user provider.
     *
     * @return string|null
     */
    public function userProviderModel();

    /**
     * Get the desired class name from the input.
     *
     * @return string
     */
    public function getNameInput();
}