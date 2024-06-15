<?php
// app/Http/Controllers/SeoSettingController.php

namespace App\Http\Controllers;

use App\Models\SeoSetting;
use Illuminate\Http\Request;

class SeoSettingsController extends Controller
{
    public function edit()
    {
        $seoSetting = SeoSetting::firstOrCreate([]);
        return view('admin.seo-settings.edit', compact('seoSetting'));
    }

    public function update(Request $request, SeoSetting $seoSetting)
    {
        $request->validate([
            'site_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:160',
            'meta_keywords' => 'nullable|string',
            'author' => 'nullable|string|max:255',
            'favicon_url' => 'nullable|url',
            'og_title' => 'nullable|string|max:255',
            'og_description' => 'nullable|string',
            'og_image' => 'nullable|url',
            'og_type' => 'nullable|string|max:255',
            'og_url' => 'nullable|url',
            'twitter_title' => 'nullable|string|max:255',
            'twitter_description' => 'nullable|string',
            'twitter_image' => 'nullable|url',
            'twitter_site' => 'nullable|string|max:255',
            'twitter_creator' => 'nullable|string|max:255',
            'google_analytics_id' => 'nullable|string|max:255',
        ]);

        $seoSetting->update($request->all());

        return redirect()->route('admin.seo-settings.edit')->with('success', 'SEO settings updated successfully.');
    }
}
