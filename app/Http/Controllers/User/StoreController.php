<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Http\Requests\User\StoreRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {

            $data = $request->validated();
            User::firstOrCreate($data);
            return redirect()->route('users.index');

    }
}
