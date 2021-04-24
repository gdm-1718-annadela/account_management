<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {

    public function update($key) {
        $category = Category::where('field_category_name', $key)->first();

        $data = [
            'field_category_name' => request('name'),
        ];

        $category->update($data);
        return redirect()->back()->with('succes', 'updated');

    }

    public function delete($key) {
        $category = Category::where('field_category_name', $key)->delete();
        return redirect()->back();
    }
}
