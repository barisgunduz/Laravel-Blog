<?php

namespace App\Http\Controllers;

use App\Category;
use App\Permission;
use App\Post;
use App\Role;
use App\User;

use Illuminate\Http\Request;
use Validator;

class ApiController extends Controller
{

    public function news(Request $request)
    {
        $take = $request->get('take', 20);
        $results = Post::orderBy("id", "desc")->paginate($take);
        return response()->json($results);
    }

    public function newsDetail(Request $request, $id)
    {
        $newsDetail = Post::find($id);
        if($newsDetail) {
            return response()->json($newsDetail);
        } else {
            return response()->json([
                'error' => 'news not found'
            ]);
        }
    }

    public function categories(Request $request)
    {
        $take = $request->get('take', 20);
        return response()->json(Category::orderBy("id", "desc")->paginate($take));
    }

    public function categoryDetail(Request $request, $id)
    {
        $categoryDetail = Category::find($id);
        if($categoryDetail) {
            return response()->json($categoryDetail);
        } else {
            return response()->json([
                'error' => 'news not found'
            ]);
        }
    }


}
