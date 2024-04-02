<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Subscription;
use App\Mail\SubscriptionReceived;
use App\Mail\SubscriptionThankYou;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|unique:subscriptions,email',
        ]);

        $subscription = new Subscription();
        $subscription->first_name = $validatedData['first_name'];
        $subscription->email = $validatedData['email'];
        $subscription->save();

        // Send email to owner
        Mail::to('laurencemariita@gmail.com')->send(new SubscriptionReceived($subscription));

        // Send email to user
        Mail::to($subscription->email)->send(new SubscriptionThankYou($subscription));

        return redirect()->back()->with('success', 'Subscription successful!');
    }
}
