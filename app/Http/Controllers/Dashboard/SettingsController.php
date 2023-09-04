<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function editShippingMethods($type){

        //free , local , outer for shipping methods in sidebar view

        if ($type === 'free')
            $shippingMethod = Setting::where('key', 'free_shipping_label')->first();

        elseif ($type === 'local')
            $shippingMethod = Setting::where('key', 'local_label')->first();

        elseif ($type === 'outer')
            $shippingMethod = Setting::where('key', 'outer_label')->first();

        else
            $shippingMethod = Setting::where('key', 'free_shipping_label')->first();

        return view('dashboard.settings.shippings.edit', compact('shippingMethod'));

    }

    // ------------------------------------------------------//

    public function updateShippingMethods(){

    }
}
