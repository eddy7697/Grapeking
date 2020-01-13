<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CustomField;
use Log;

class CustomController extends Controller
{
    /**
     * getCustom
     */
    public function getCustom($type, Request $request)
    {
        return CustomField::where('type', $type)
                            ->where(function ($q) use ($request)
                            {
                                if ($request->keyword != null) {
                                    $q->where('locale', 'like', "%$request->keyword%");
                                }
                            })
                            ->orderBy($request->flag, $request->order)
                            ->paginate(15);
    }
}
