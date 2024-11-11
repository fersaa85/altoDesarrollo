<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\WelcomeEmail;
use App\Repositories\Contact\ContactRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Session;
use App;
use Config;

class ContactController extends Controller
{
    private $contactRepository;
    function __construct(ContactRepositoryInterface $contactRepository) {
        $this->contactRepository = $contactRepository;
    }

    public function __invoke(ContactRequest $request) {

        dd($request);
        Mail::to(env('MAIL_FROM_TO', "fersaavedra85@gmail.com"))->send(new WelcomeEmail([
            "name" => $request->get('name'),
            "email" => $request->get('email'),
            "phone" => $request->get('phone'),
            "message" => $request->get('message', ''),
        ]));

        $this->contactRepository->create($request->except(['_token']));

        //eturn view('tankyou')->with(['name' => 'Blog Post Form Data Has Been inserted']);
    }

}
