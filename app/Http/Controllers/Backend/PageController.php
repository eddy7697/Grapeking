<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;

class PageController extends Controller
{
    public function createPage(Request $request)
    {
        $data = $request->all();

        try {
            Page::create([
                'guid' => str_random(6),
                'title' => $data['title'],
                'content' => $data['content'],
                'featureImage' => $data['featureImage']
            ]);

            $status = 200;
            $message = 'Create Page success.';
        } catch (Exception $e) {
            $status = 500;
            $message = $e;
        }

        return response()->json([ 'status' => $status, 'message' => $message ], $status);
    }

    public function getPages()
    {
        return Page::paginate(150);
    }

    public function getPage($id)
    {
        return Page::where('id', $id)->first();
    }

    public function updatePage(Request $request, $id)
    {
        $data = $request->all();

        try {
            Page::where('id', $id)->update($data);

            $status = 200;
            $message = 'Update Page success.';
        } catch (Exception $e) {
            $status = 500;
            $message = $e;
        }

        return response()->json([ 'status' => $status, 'message' => $message ], $status);
    }
}