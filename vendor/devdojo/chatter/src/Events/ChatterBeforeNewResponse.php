<?php

namespace DevDojo\Chatter\Events;

use Illuminate\Http\Request;
use Validator;

class ChatterBeforeNewResponse
{
    /**
     * @var Request
     */
    public $request;

    /**
     * @var Validator
     */
    public $validator;

    /**
     * Constructor.
     *
     * @param Request   $request
     * @param Validator $validator
     */
    public function __construct( $request, $validator)
    {
        // $this->request = $request;
        // $this->validator = $validator;
    }
}
