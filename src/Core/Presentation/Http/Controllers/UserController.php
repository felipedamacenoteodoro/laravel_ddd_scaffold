<?php

namespace Core\Presentation\Http\Controllers;

use App\Http\Controllers\Controller;
use Core\Application\Services\User\UserService;
use Core\Presentation\Http\Request\UserRequest;

class UserController extends Controller
{

    private $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }


    public function index(UserRequest $request)
    {
        try {

            $result = $this->UserService->getAll($request);

            return response()->json([
                'data' => $result
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
