<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
public function viewContact(){
    $Contacts=Contact::get();
    return view('admin.Contact.Contact',compact('Contacts'));
}
}
