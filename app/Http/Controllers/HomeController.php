<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    /**
     * Display the homepage with gallery images.
     */
    public function index(): View
    {
        // Get all gallery images from the public directory
        $galleryPath = public_path('images/gallery');
        $galleryImages = [];

        if (File::exists($galleryPath)) {
            $files = File::files($galleryPath);

            foreach ($files as $file) {
                if (in_array($file->getExtension(), ['jpg', 'jpeg', 'png', 'gif'])) {
                    $galleryImages[] = '/images/gallery/' . $file->getFilename();
                }
            }
        }

        return view('home', [
            'galleryImages' => $galleryImages,
        ]);
    }

    /**
     * Handle contact form submission.
     */
    public function contact(Request $request): RedirectResponse
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Here you would typically send an email with the contact form data
        // For example:
        // Mail::to('contact@example.com')->send(new ContactFormMail($validated));

        // Redirect back with success message
        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}
