<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\WarRequestFormRequest;


class WarcraftController extends Controller
{
    /**
    * @OA\Post(
    *      path="/api/war",
    *      operationId="postArmy",
    *      tags={"Admin"},
    *      summary="Post Army",
    *      description="Post Army",
    *      @OA\RequestBody(
    *          required=true,
    *          @OA\JsonContent(ref="#/components/schemas/WarRequestFormRequest")
    *      ),
    *      @OA\Response(
    *          response=200,
    *          description="Successful signin",
    *          @OA\MediaType(
    *             mediaType="application/json",
    *         ),
    *       ),
    *      @OA\Response(
    *          response=400,
    *          description="Bad Request"
    *      ),
    *      @OA\Response(
    *          response=401,
    *          description="unauthenticated",
    *      ),
    *      @OA\Response(
    *          response=403,
    *          description="Forbidden"
    *      ),
    * )
    */

    public function __invoke(WarRequestFormRequest $request)
    {
        $result = [];
        $checkTotal = true;
        $troop1 = $troop2 = $troop3 = $total = 0;
        $number = (int) $request['number'];

        if ($number < 3){
            return $this->errorResponse('you cannot split troops', 409);
        } 

        while($checkTotal){
            $troop1 = rand(1, $number);
            $troop2 = rand(1, $number);
            $troop3 = rand(1, $number);
            $total = $troop1 + $troop2 + $troop3;

            if ($total === $number){
                $checkTotal = false;
            } 
        }

        $result[] = ['Spearmen' => $troop1];
        $result[] = ['Swordsmen' => $troop2];
        $result[] = ['Archers' => $troop3];

        return $this->showMessage($result);
    }
}
