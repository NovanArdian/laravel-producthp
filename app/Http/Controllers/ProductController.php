<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Product;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;
use Illuminate\Support\Facades\Auth;





class ProductController extends Controller
{
    public function export()
{
    return Excel::download(new ProductsExport, 'products.xlsx');
}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data product terbaru
        $products = Product::where('user_id', Auth::id())
        ->orderBy('created_at', 'DESC')
        ->get();

    return view('products.index', compact('products'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create(array_merge(
            $request->all(),
            ['user_id' => Auth::id()]
        ));
    
        return redirect()->route('products')->with('success', 'Product added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.show', compact('product'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.edit', compact('product'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::where('id', $id)
        ->where('user_id', Auth::id())
        ->firstOrFail();

    $product->update($request->all());

    return redirect()->route('products')->with('success', 'Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::where('id', $id)
        ->where('user_id', Auth::id())
        ->firstOrFail();

    $product->delete();

    return redirect()->route('products')->with('success', 'Product deleted successfully');
    }

    public function generateInvoice($id)
{
    $product = Product::findOrFail($id);

    // Data yang akan digunakan di PDF
    $data = [
        'title' => $product->title,
        'price' => $product->price,
        'product_code' => $product->product_code,
        'description' => $product->description,
    ];

    // Membuat PDF
 
    
    $pdf = Pdf::loadView('products.invoice', $data);

    // Unduh PDF
    return $pdf->download('invoice-' . $product->id . '.pdf');
}
}