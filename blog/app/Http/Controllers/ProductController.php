<?php

namespace App\Http\Controllers;

use App\Category;
use App\Brand;
use App\Product;
use Image;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index () {
        $categories = Category::where('publication_status', 1)->get();
        $Brands = Brand::where('publication_status', 1)->get();
        return view('admin.product.add-product', ['categories' =>$categories, 'Brands' =>$Brands]);
    }
    protected function productInfoValidate($request) {
        $this->validate($request, [
            'product_name' => 'required'
        ]);
    }
    protected function productImageUpload($request) {
        $productImage = $request->file('product_image');
        //$fileType=$productImage->getClientOriginalExtension();
        $imageName= $productImage->getClientOriginalName();
        //$imageName = $request->product_name.' '.$fileType;
        $directory = 'product-image/';
        $productImage->move($directory, $imageName);
      //  Image::make($productImage)->save($imageUrl);
        $imageUrl = $directory.$imageName;
        return $imageUrl;
    }
    protected function saveProductBasicInfo($request, $imageUrl) {
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->product_short_description = $request->product_short_description;
        $product->product_long_description = $request->product_long_description;
        $product->product_image = $imageUrl;
        $product->publication_status = $request->publication_status;
        $product->save();
    }
    public function saveProductInfo (Request $request) {
        $this->productInfoValidate($request);
        $imageUrl = $this->productImageUpload($request);
        $this->saveProductBasicInfo($request, $imageUrl);

        return redirect('/product/add')->with('message', 'Product info save successfully');

    }
    public function manageProductInfo() {
        //$products = Product::all();                for all
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id' )
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*', 'categories.category_name', 'brands.brand_name')
            ->get();
        return view('admin.product.manage-product', ['products' =>$products]);
    }
    public function unpublishedProductInfo($id) {
        $product = Product::find($id);
        $product->publication_status = 0;
        $product->save();
        return redirect('/manage/product')->with('message', 'Product unpublished successfully');
    }
     public function publishedProductInfo($id) {
            $product = Product::find($id);
            $product->publication_status = 1;
            $product->save();
            return redirect('/manage/product')->with('message', 'Product unpublished successfully');
    }
    public function editProductInfo($id) {
        $productById = Product::find($id);
        $categories = Category::where('publication_status', 1)->get();
        $Brands = Brand::where('publication_status', 1)->get();

//        $productById = DB::table('products')
//            ->join('categories', 'products.category_id', '=', 'categories.id' )
//            ->join('brands', 'products.brand_id', '=', 'brands.id')
//            ->select('products.*', 'categories.category_name', 'brands.brand_name')
//            ->where('products.id', $id)
//            ->first();
             return view('admin.product.edit-product', ['categories'=>$categories, 'Brands'=>$Brands, 'productById' =>$productById ] );
    }

    public function updateProductInfo(Request $request) {
            $imageUrl = $this->imageExistStatus($request);

         $productById = Product::find($request->product_id);
         $productById->category_id = $request->category_id;
         $productById->brand_id = $request->brand_id;
         $productById->product_name = $request->product_name;
         $productById->product_price = $request->product_price;
         $productById->product_quantity = $request->product_quantity;
         $productById->product_short_description = $request->product_short_description;
         $productById->product_long_description = $request->product_long_description;
         $productById->product_image = $imageUrl;
         $productById->publication_status = $request->publication_status;
         $productById->save();

        return redirect('/manage/product')->with('message', 'Product info updated successfully');
    }
    private function imageExistStatus ($request) {
        $productById = Product::find($request->product_id);
        $productImage = $request->file('product_image');
        if($productImage) {
            unlink($productById->product_image);
            $imageName= $productImage->getClientOriginalName();
            $directory = 'product-image/';
            $productImage->move($directory, $imageName);
            $imageUrl = $directory.$imageName;
        } else {
            $imageUrl=$productById->product_image;
        }
        return $imageUrl;
    }


    public function deleteProductInfo($id) {
        $productById = Product::find($id);
        $productById->delete();
        return redirect('manage/product')->with('message', 'Product info delete successfully');
    }

    public function viewProductInfo($id) {

        $productById = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id' )
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*', 'categories.category_name', 'brands.brand_name')
            ->where('products.id', $id)
            ->first();

        return view('admin.product.product-view', ['productById' =>$productById]);
    }
    public function backBtn() {
        return redirect('/manage/product');
    }








}
