<?php

namespace DevDojo\Chatter\Events;

use Illuminate\Http\Request;

class ChatterAfterNewResponse
{
    /**
     * @var Request
     */
    public $request;

    /**
     * Constructor.
     *
     * @param Request $request
     */
    public function __construct($request)
    {
        // $this->request = $request;
    }
}
