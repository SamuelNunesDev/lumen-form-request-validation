<?php 

namespace SamuelNunes\LumenFormRequestValidation\Requests;

use SamuelNunes\LumenFormRequestValidation\Contracts\BasicRequestMethodsContract;
use Laravel\Lumen\Routing\ProvidesConvenienceMethods;

class BaseRequest implements BasicRequestMethodsContract
{
    use ProvidesConvenienceMethods, BasicRequestMethods;
}