<?php

namespace App\Http\Controllers;


class FrontendController extends Controller
{
    public function home()
    {
        return view(
            'frontend.pages.home',
            [
                'title' => 'Home | ' . config('var.website_name'),
                'description' => '',
            ]
        );
    }

    public function about()
    {
        return view(
            'frontend.pages.about',
            [
                'title' => 'About' . config('var.website_name') . ' ',
                'description' => '',
            ]
        );
    }

    public function contact()
    {
        return view(
            'frontend.pages.contact',
            [
                'title' => "Contact Us | " . config('var.website_name'),
                'description' => '',
            ]
        );
    }
    public function thankyou()
    {
        return view(
            'frontend.pages.thankyou',
            [
                'title' => "Thank You | " . config('var.website_name'),
                'description' => '',
            ]
        );
    }
    public function privacyPolicy()
    {
        return view(
            'frontend.pages.privacy-policy',
            [
                'title' => "Privacy Policy | " . config('var.website_name'),
                'description' => '',
            ]
        );
    }
    public function termsAndConditions()
    {
        return view(
            'frontend.pages.terms-and-conditions',
            [
                'title' => "Terms and Conditions | " . config('var.website_name'),
                'description' => '',
            ]
        );
    }
}
