<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\queryBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{

    public function header()
    {
        return view('header');
    }

    public function index()
    {
        return view('insertPage');
    }

    public function storeData(Request $request)
    {
        $student = new queryBuilder;
        $data = DB::table('query_builders')->insert([
            "name" => $request->name,
            "age" => $request->age,
            "gender" => $request->gender,
            "email" => $request->email,
            "password" => $request->password,
            "created_at" => now(),
            "updated_at" => now(),

        ]);
        return redirect('viewData');
    }

    public function viewAll()
    {
        $data = DB::table('query_builders')->orderBy("name")->paginate(8);
        return view('allView', ["data2" => $data]);
    }

    public function viewSingle($id)
    {
        $data = DB::table('query_builders')->where('id', $id)->get();
        return view('allView', ["data2" => $data]);
    }

    public function singlePge($id)
    {
        $data = DB::table('query_builders')->where('id', $id)->get();
        return view('singlePge', ["data2" => $data]);
    }

    public function updatePage($id)
    {

        $data =  DB::table('query_builders')->where('id', $id)->first();
        return view('dataUpdate')->with(["data" => $data]);
    }
    public function updated(Request $request)
    {
        $data = DB::table('query_builders')->where('id', $request->id)->update([
            "name" => $request->name,
            "age" => $request->age,
            "gender" => $request->gender,
            "email" => $request->email,
            "password" => $request->password,
            "created_at" => now(),
            "updated_at" => now(),
        ]);
        return redirect('viewData');
    }

    public function delete($id)
    {
        $data = DB::table('query_builders')->where('id', $id)->delete();
        return redirect('viewData');
    }
}
