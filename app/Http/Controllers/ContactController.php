<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Method for send contact message with validation
     */
    public function send(Request $request)
    {

        $rules = [
            'name' => 'required|max:100|',
            'email' => 'required|email',
            'phone' => 'required|regex:/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/',
            'message' => 'required|max:255',
        ];
        $messages =
            [
                'name.required' => 'Поле :attribute должно быть заполнено!',
                'name.max' => ':attribute не должно превышать 100 символов',
                'email.required' => 'Поле :attribute должно быть заполнено!',
                'email.email' => 'Неверный форма поля attribute',
                'phone.required' => 'Поле :attribute должно быть заполнено!',
                'phone.regex' => 'Поле :attribute не соответсвует формату телефона',
                'message.required' => 'Поле :attribute должно быть заполнено!',
                'message.max' => 'Текст сообешния не должен превышать 255 символов',
            ];
        $this->validate($request, $rules, $messages);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message_text = $request->message;
        $contact->save();
        return view('contact');
    }
}
