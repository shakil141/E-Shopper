<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menufacture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SomeController extends Controller
{
    public function unactive($category)
    {
        Category::where('category_id',$category)->update(['publication_status' => 0]);

        $value = 'Category InActive Successfully';

        Session::flash('alert-danger',$value);
       return redirect()->route('categories.index');
    }

    public function active($category)
    {
        Category::where('category_id',$category)->update(['publication_status'=> 1]);

        $value = 'Category Active Successfully';

        Session::flash('added-sucess',$value);
        return redirect()->back();
    }

    public function unactivebrand($menufacture)
    {
        Menufacture::where('menufacture_id',$menufacture)->update(['menufacture_status' => 0]);

        $value = 'MenuFacture InActive Successfully';

        Session::flash('alert-danger',$value);
       return redirect()->route('menufacture.index');
    }

    public function activebrand($menufacture)
    {
        Menufacture::where('menufacture_id',$menufacture)->update(['menufacture_status'=> 1]);

        $value = 'MenuFacture Active Successfully';

        Session::flash('added-sucess',$value);
        return redirect()->back();
    }
}
