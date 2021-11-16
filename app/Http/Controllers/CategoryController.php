<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function AllCat()
    {


        $categories = Category::latest()->paginate(5);
        $trashCat= Category::onlyTrashed()->latest()->paginate(3);

        return view('admin.category.index', compact('categories', 'trashCat'));
    }


    public function AddCat(Request $request){
        $validatedData = $request->validate([
            'category_name' => 'required|unique:brands|max:255',

        ],
            [
                'category_name.required' => 'Please Input Category Name',
                'category_name.max' => 'Category Less Then 255Chars',
            ]);

        Category::insert([
            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);



        return Redirect()->back()->with('success','Category Inserted Successfull');

        }

            public function Edit($id){
                $categories = Category::find($id);
                $categories = DB::table('categories')->where('id',$id)->first();
                return view('admin.category.edit',compact('categories'));

            }

            public function Update(Request $request ,$id){

                $data = array();
                $data['category_name'] = $request->category_name;
                $data['user_id'] = Auth::user()->id;
                DB::table('categories')->where('id',$id)->update($data);

                return Redirect()->route('all.category')->with('success','Category Updated Successfull');

            }

            public function SoftDelete($id){
                $delete = Category::find($id)->delete();
                return Redirect()->back()->with('success','Category Soft Delete Successfully');
            }

            public function Restore($id){
                    $delete = Category::withTrashed()->find($id)->restore();
                    return Redirect()->back()->with('success','Category Restore Successfully');
                }

        public function Delete($id){
            $delete = Category::onlyTrashed()->find($id)->forceDelete();
            return Redirect()->back()->with('success','Category Permanently Deleted');
        }

}
