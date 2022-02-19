<?php

namespace App\Http\Controllers;

use App\Traits\Api\ApiResponder;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, ApiResponder;
    
    /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="Warcraft App OpenApi API Documentation",
     *      description="Warcraft App Using L5 Swagger OpenApi description",
     *      @OA\Contact(
     *          email="schneiderkomolafe@gmail.com"
     *      ),
     *      @OA\License(
     *          name="Apache 2.0",
     *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
     *      )
     * )
     *
     * @OA\Tag(
     *     name="Warcraft Application",
     *     description="API Endpoints of Projects"
     * )
     */
}
