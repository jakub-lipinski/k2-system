<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageReceived;
use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function home(): View
    {
        $products = Product::orderBy('created_at', 'desc')->limit(8)->get();

        return view('home', compact('products'));
    }

    public function shop(): View
    {
        $products = Product::orderBy('created_at', 'desc')->get();

        return view('shop', compact('products'));
    }

    public function product(Product $product): View
    {
        return view('product', compact('product'));
    }

    public function search(Request $request): View
    {
        $products = Product::search($request->input('query'))->get();
        $phrase = $request->input('query');

        return view('search', compact('products', 'phrase'));
    }

    public function contact(): View
    {
        return view('contact');
    }

    public function sendContact(ContactRequest $request): RedirectResponse
    {
        Mail::to('biuro@ksero-k2system.pl')
            ->send(new ContactMessageReceived($request->safe()->only([
                'name',
                'email',
                'phone',
                'message',
            ])));

        return to_route('contact')->with('status', 'Dziękujemy za wiadomość. Skontaktujemy się z Tobą najszybciej jak to możliwe.');
    }

    public function page(string $slug): View
    {
        $page = Page::where('slug', $slug)->first();

        return view('page', compact('page'));
    }
}
