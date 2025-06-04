<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/calculate-loan',  function (Request $request){
       $validated = $request->validate([
        'amount' => 'required|numeric|min:1',
        'interest' => 'required|numeric|min:0',
        'duration' => 'required|numeric|min:1',
        'duration_unit' => 'required|in:months,years'
    ]);

    $amount = $validated['amount'];
    $interest = $validated['interest'];
    $duration = $validated['duration'];
    $unit = $validated['duration_unit'];

    $totalMonths = $unit === 'years' ? $duration * 12 : $duration;
    $monthlyRate = ($interest / 100) / 12;

    if ($monthlyRate == 0) {
        $monthlyPayment = $amount / $totalMonths;
    } else {
        $monthlyPayment = $amount * ($monthlyRate * pow(1 + $monthlyRate, $totalMonths)) / (pow(1 + $monthlyRate, $totalMonths) - 1);
    }

    $totalPayment = $monthlyPayment * $totalMonths;

    return response()->json([
        'monthlyPayment' => number_format($monthlyPayment, 2),
        'totalPayment' => number_format($totalPayment, 2)
    ]);
    
})->name('loan.calculate');

Route::post('/contact/send', function(Request $request)
    {
        // Validate the input if you want
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'nullable|string',
            'message' => 'required|string',
        ]);

        // Compose SMS message or do whatever you want here
        $phoneNumber = '8329982873'; // you need to get or assign the number

        $smsMessage = "New Contact Message from {$data['name']}, Email: {$data['email']}, Subject: {$data['subject']}, Message: {$data['message']}";

        // Prepare SMS API data (example)
        $postData = [
            'user' => 'SITSol',
            'key' => 'b6b34d1d4dXX',
            'mobile' => $phoneNumber,
            'message' => $smsMessage,
            'senderid' => 'DALERT',
            'accusage' => '10',
        ];

        // Send SMS via HTTP Client
        $response = Http::asForm()->post('http://redirect.ds3.in/submitsms.jsp', $postData);

        // You can redirect back with success message
        return back()->with('success', 'Message sent successfully! SMS status: ' . $response->body());
    })->name('contact.send');

