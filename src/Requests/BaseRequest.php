<?php 

namespace SamuelNunes\Requests;

use SamuelNunes\Contracts\BasicRequestMethodsContract;
use Laravel\Lumen\Routing\ProvidesConvenienceMethods;

class BaseRequest implements BasicRequestMethodsContract
{
    use ProvidesConvenienceMethods, BasicRequestMethods;
}