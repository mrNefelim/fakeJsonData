<?php

namespace fakeJsonDataBundle\Client\Controller;

use App\Http\Controllers\Controller as BaseController;
use fakeJsonDataBundle\Client\Service\RandomClientList;
use fakeJsonDataBundle\DTO\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    /**
     * @var RandomClientList
     */
    private $randomClientListGenerator;

    /**
     * @param RandomClientList $randomClientListGenerator
     */
    public function __construct(RandomClientList $randomClientListGenerator)
    {
        $this->randomClientListGenerator = $randomClientListGenerator;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        return new Response($this->randomClientListGenerator->generate($request));
    }
}
