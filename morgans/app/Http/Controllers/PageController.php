<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function HomePage(){

        return view('pages.index');
    }

    public function RiskRegulations(){

        return view('pages.services.risk');
    }

    public function Academy(){
        return view('pages.services.academy');
    }
    public function VettingScreening(){
        return view('pages.services.vetting');
    }
    public function TaxAdvisory(){
        return view('pages.services.tax_advisory');
    }
    public function FAC_Authorization(){
        return view('pages.services.fac_authorization');
    }
    public function documenttationManuals(){
        return view('pages.services.documenttation_manuals');
    }
    public function Outsourcing(){
        return view('pages.services.outsourcing');
    }

    public function solutionDelivery(){
        return view('pages.services.solution_delivery');
    }

    public function Location(){
        return view('pages.about.location');
    }

    public function Company(){
        return view('pages.about.company');
    }
    public function Privacy(){
        return view('pages.about.privacy');
    }
    public function Team(){
        return view('pages.about.team');
    }

    public function Contact(){
        return view('pages.contact');
    }

    public function contactForm(Request $request){
        $form = new ContactForm;
        $form->name = $request->name;
        $form->email = $request->email;
        $form->phone = $request->phone;
        $form->message = $request->message;
       // $form->save();

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ];

        mail::to('support@morgansconsulting.ng')->send(new ContactMail($data));
        return redirect()->back()->with('success', 'Message send successfully');
    }
}
