<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){
        $product = Product::paginate(20);//lấy 20 recored
        return view('product', compact('product'));
    }
    public function getProductDetail($id){
        $product = Product::where("ProductId", $id)->first();
        return view('productdetail', compact('product'));
    }
    public function addProduct(){
        $category = Category::all();
        return view('addproduct', compact('category'));
    }
    public function insertProduct(Request $request){
        $messages =[
        'productname.required' => 'Bạn phải nhập tên sản phẩm!',
        'price.required' => 'Bạn phải nhập giá sản phảm!,'];
        $validator = Validator::make($request->all(),[
            'productname'=> 'required',
            'price'=> 'required',
        ], $messages)->validate();
        // $this->validate(request(),['productname'=>'required']);
        $filename = "";
        if ($request->file('fileUpload')->isValid()) {
            $filename = $request->fileUpload->getClientOriginalName();
            $request->fileUpload -> move('images/', $filename);
        }
        $product = Product::create([
            'ProductName'=> $request->productname,
            'Unit'=> $request->unit,
            'Price'=> $request->price,
            'CategoryId'=> $request->categories,
            'Img'=> $filename
        ]);
        $product= Product::paginate(20);//lấy 20 recored
        return view('product', compact('product'));
    }
    public function listProduct(){
        $product = Product::paginate(10);//lấy 100 recored
        return view('productlist', compact('product'));
    }
    public function delProduct($id){
        $record = Product::where("ProductId", $id)->first();
        if(file_exists(public_path("images/".$record->Img)))
        {
            //xóa file hình tương ứng
            unlink(public_path("images/".$record->Img));
        }
        //xóa record trong data base
        product::where("ProductId", $id)->delete();
        $product = Product::paginate(10);//lấy 10 recored
        return view('productlist', compact('product'));
    }
}
