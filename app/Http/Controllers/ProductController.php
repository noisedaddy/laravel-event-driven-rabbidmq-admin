<?php

namespace App\Http\Controllers;

use App\Jobs\ProductCreated;
use App\Jobs\ProductDeleted;
use App\Jobs\ProductUpdated;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::all();
    }
    public function show($id)
    {
        return Product::find($id);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->only('title', 'image'));

        ProductCreated::dispatch($product->toArray());
//        ProductCreated::dispatch($product->toArray())->onQueue('main_queue');

        return response($product, \Symfony\Component\HttpFoundation\Response::HTTP_CREATED);
    }

    public function update($id, Request $request)
    {
        $product = Product::find($id);

        $product->update($request->only('title', 'image'));
        ProductUpdated::dispatch($product->toArray());
//        ProductUpdated::dispatch($product->toArray())->onQueue('main_queue');

        return response($product, \Symfony\Component\HttpFoundation\Response::HTTP_ACCEPTED);
    }

    public function destroy($id)
    {
        Product::destroy($id);

//        ProductDeleted::dispatch($id);
        ProductDeleted::dispatch($id)->onQueue('main_queue');

        return response(null, \Symfony\Component\HttpFoundation\Response::HTTP_NO_CONTENT);
    }
}
