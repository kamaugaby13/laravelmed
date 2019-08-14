<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\Patient;
use App\Reply;
use App\consultation;
use App\Diet;
use Auth;

class PatientController extends Controller
{
public function register(){
    return view('pages.registerpatient');
}
public function loginForm(){
    return view('pages.loginpatient');
}
public function login(Request $request){

        $phonenumber=$request->input('phonenumber');
        $password=$request->input('password');
        $patient=Patient::where('phonenumber',$phonenumber)->first();

       if($patient){
        if(Hash::check($password,$patient->password)){

            $general='General';
            $optical='Optical';
            $dental='Dental';
            $paediatric='Paediatric';
            $ent='E.N.T';
            $cancer='Cancer';
            $obesity='Obesity';
            $hypertension='Hypertension';
            $aids='AIDS';
            $diabetes='Diabetes';
            $ulcers='Ulcers';
            $athritis='Athritis';
            $expectancy='Expectancy';
            return view('pages.welcomepatient')->with('patient',$patient)->with('general',$general)->
            with('dental',$dental)->with('paediatric',$paediatric)->with('ent',$ent)->with('optical',$optical)->
            with('cancer',$cancer)->with('obesity',$obesity)->with('ulcers',$ulcers)->with('athritis',$athritis)
            ->with('diabetes',$diabetes)->with('aids',$aids)->with('hypertension',$hypertension)->with('expectancy',$expectancy);
        }else{
            $message="invalid login details";
            return view('pages.loginpatient')->with('message',$message);
        }
    }else{
        $message="You are not in the system register first!";
        return view('pages.loginpatient')->with('message',$message);
    }

    }
public function home(){
    return view('pages.home');
}


public function createPatient(Request $request){
        $patient=new Patient;

        $patient->firstname=$request->input('firstname');
        $patient->lastname=$request->input('lastname');
        $phonenumber=$request->input('phonenumber');
        $patient->phonenumber=$phonenumber;
        $patient->age=$request->input('age');
        $patient->password=Hash::make($request->input('password'));
        $checkpat=Patient::where('phonenumber',$phonenumber)->first();
        if($checkpat){
            $message='your number already exists in the system!';
        return view('pages.registerpatient')->with('message',$message);
        }else{
        $patient->save();
        return view('pages.loginpatient');
        }
}
public function consult(){

$type=Input::get('type');
//$request->input('type');
$firstname=Input::get('firstname');
//$request->input('firstname');
$lastname=Input::get('lastname');
//$request->input('lastname');
$phonenumber=Input::get('phonenumber');
//$request->input('phonenumber');
$age=Input::get('age');
//$request->input('age');

return view('pages.consult')->with('type',$type)->with('firstname',$firstname)->
with('lastname',$lastname)->with('phonenumber',$phonenumber)->with('age',$age);
}
public function saveConsultation(Request $request){
    $this->validate($request,['description'=>'required']);
    $consult=new consultation;
    $phonenumber=$request->input('phonenumber');
    $consult->firstname=$request->input('firstname');
    $consult->lastname=$request->input('lastname');
    $consult->phonenumber=$phonenumber;
    $consult->age=$request->input('age');
    $consult->type=$request->input('consultationtype');
    $consult->description=$request->input('description');
    $consult->save();

    $patient=Patient::where('phonenumber',$phonenumber)->first();
            $general='General';
            $optical='Optical';
            $dental='Dental';
            $paediatric='Paediatric';
            $ent='E.N.T';
            $cancer='Cancer';
            $obesity='Obesity';
            $hypertension='Hypertension';
            $aids='AIDS';
            $diabetes='Diabetes';
            $ulcers='Ulcers';
            $athritis='Athritis';
            $expectancy='Expectancy';
            $message='request sent successfully!wait for a doctor to reply';
            return view('pages.welcomepatient')->with('patient',$patient)->with('general',$general)->
            with('dental',$dental)->with('paediatric',$paediatric)->with('ent',$ent)->with('optical',$optical)->
            with('cancer',$cancer)->with('obesity',$obesity)->with('ulcers',$ulcers)->with('athritis',$athritis)
            ->with('diabetes',$diabetes)->with('aids',$aids)->with('hypertension',$hypertension)->with('expectancy',$expectancy)
            ->with('message',$message);

}
public function viewReply(){

    $phonenumber=Input::get('phonenumber');
    $replys=Reply::where('patient_phone',$phonenumber)->get();
    return view('pages.viewreply')->with('replys',$replys);

}
public function viewSolution(){
    $solution=Input::get('solution');
    return view('pages.solutions')->with('solution',$solution);
}
public function diet(){
    $condition=Input::get('condition');
    $proteins=Input::get('proteins');
    $carbohydrates=Input::get('carbohydrates');
    $vitamins=Input::get('vitamins');
    $avoids=Input::get('avoids');

    $diet=new Diet;
    $diet->condition=$condition;
    $diet->proteins=$proteins;
    $diet->carbohydrates=$carbohydrates;
    $diet->vitamins=$vitamins;
    $diet->avoids=$avoids;

    $diet->save();
    return view('pages.dietentry')->with('message','added successfully!');
}
public function viewDiet(){

    $condition=Input::get('condition');

    $diet=Diet::where('condition',$condition)->first();
    if($diet){
    return view('pages.dietview')->with('diet',$diet);
    }
    else{
        return view('pages.nodiet');
    }

}
public function changepatient(){

    $phonenumber=Input::get('phonenumber');
 return view('pages.changepatient')->with('phonenumber',$phonenumber);

}
public function changespatient(){
    $phonenumber=Input::get('phonenumber');
    $oldpassword=Input::get('oldpassword');
    $confirmpassword=Input::get('confirmpassword');
    $newpassword=Input::get('newpassword');

    $patient=Patient::where('phonenumber',$phonenumber)->first();
     if(Hash::check($oldpassword, $patient->password)){

       if($newpassword===$confirmpassword){
       $patient->password=Hash::make($newpassword);
       $patient->save();
       $general='General';
            $optical='Optical';
            $dental='Dental';
            $paediatric='Paediatric';
            $ent='E.N.T';
            $cancer='Cancer';
            $obesity='Obesity';
            $hypertension='Hypertension';
            $aids='AIDS';
            $diabetes='Diabetes';
            $ulcers='Ulcers';
            $athritis='Athritis';
            $expectancy='Expectancy';
            return view('pages.welcomepatient')->with('patient',$patient)->with('general',$general)->
            with('dental',$dental)->with('paediatric',$paediatric)->with('ent',$ent)->with('optical',$optical)->
            with('cancer',$cancer)->with('obesity',$obesity)->with('ulcers',$ulcers)->with('athritis',$athritis)
            ->with('diabetes',$diabetes)->with('aids',$aids)->with('hypertension',$hypertension)->with('expectancy',$expectancy)
            ->with('message','password changed successfully!');
       }else{
        return view('pages.changepatient')->with('message','match password please!')->with('phonenumber',$phonenumber);
    }
    }
    else {

        return view('pages.changepatient')->with('message','incorrect old password!')->with('phonenumber',$phonenumber);
    }
}
}
