<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        1 => [
            'name' => 'Premium Sneakers',
            'image' => 'https://images.unsplash.com/photo-1549298916-b41d501d3772?q=80&w=2012',
            'price' => 299.99,
            'originalPrice' => 399.99,
            'reviewCount' => 128,
            'description' => 'Experience ultimate comfort and style with our Premium Sneakers. Crafted with innovative technology and premium materials, these sneakers provide exceptional support and durability for all-day wear.',
            'features' => [
                'Breathable mesh upper construction',
                'Advanced cushioning system',
                'Anti-slip rubber outsole',
                'Memory foam insole',
                'Reflective details for visibility'
            ]
        ],
        // Add more products here...
    ];

    public function show($id)
    {
        $product = $this->products[$id] ?? null;

        if (!$product) {
            return redirect('/products');
        }

        return view('product-detail', $product);
    }
}
