<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Product::all(); // Mengambil semua data produk
    }

    public function headings(): array
    {
        return [
            'No',
            'Handphone Name',
            'Harga',
            'Code Produk',
            'Deskripsi',
            'tanggal',
        ];
    }
}
