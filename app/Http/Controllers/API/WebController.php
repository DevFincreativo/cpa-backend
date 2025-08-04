<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormEmail;
use App\Models\Contacto;


class WebController extends Controller
{

    public function store(Request $request)
    {

        $data = $request->only(['nombre', 'empresa', 'telefono', 'correo', 'mensaje']);
        /*
        $response = $request->input('g-recaptcha-response');
        $secretKey = env('RECAPTCHA_KEY_SECRET');

        $recaptcha = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response");
        $recaptcha_response = json_decode($recaptcha);
        */

        $contacto = Contacto::create($data);



        return response()->json(['success' => true], 201);


        /*
        try {

           // if ($recaptcha_response->success) {

                $var = Mail::to('web@fincreativo.com')->send(new ContactFormEmail($data));

                return response()->json(['success' => true], 201);

          //  } else {
           //     return response()->json(['success' => false], 201);
           // }

        } catch (\Throwable $th) {

            return response()->json(['success' => false], 201);
        }

        */
    }

}
