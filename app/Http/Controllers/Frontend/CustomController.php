<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CustomField;

class CustomController extends Controller
{
    /**
     * getCustom
     */
    public function getCustom($type)
    {
        return CustomField::where('type', $type)->paginate(15);
    }
}
