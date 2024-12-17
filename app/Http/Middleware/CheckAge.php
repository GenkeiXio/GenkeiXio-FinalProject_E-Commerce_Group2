<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Get the birthdate from the form input
        $birthDate = $request->input('birthday');
        $username = $request->input('username');

        // Check if birthdate is provided
        if (!$birthDate) {
            // Redirect to Access Denied if the birthdate is missing
            return redirect('/accessDenied')->with('error', 'Birthdate is required.');
        }

        // Parse the birthdate and validate the format
        try {
            $age = Carbon::parse($birthDate)->age;
        } catch (\Exception $e) {
            // Invalid birthdate format
            return redirect('/accessDenied')->with('error', 'Invalid birthdate format.');
        }

        \Log::info("User Age: $age, Username: {$request->input('username')}");


        // Check if the user is under 18
        if ($age < 18) {
            // Redirect to Access Denied page if under 18
            return redirect('/accessDenied')->with('error', 'You must be 18 or older to access this page.');
        } elseif ($age >= 18 && $age <= 20) {
            // Redirect to homepage if age is between 18 and 20
            return redirect("/homepage/" . $username);
        } elseif ($age >= 21) {

            \Log::info('Redirecting to restricted area for user: ' . $username);
            // Redirect to restricted area if 21 or older
            return redirect("/restrictedArea/" . $username);
        }

        // Proceed if 18 or older
        return $next($request);
    }
}