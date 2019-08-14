<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use \App\Doctor;
use \App\Reply;
use \App\ChiefHealth;
use \App\Patient;
use \App\consultation;
use \App\Dietician;
use \App\Archive;
use \App\Abuse;

class DoctorController extends Controller
{

    public function showLoginForm(){
        return view('pages.doctorlogin');
    }
    public function login(Request $request){

        $doctor_id=$request->input('doctor_id');
        $password=$request->input('password');
        $doctor=Doctor::where('doctor_id',$doctor_id)->first();
        if($doctor){
        if(Hash::check($password, $doctor->password)){


       return view('pages.welcomedoctor')->with('doctor',$doctor);
        }
        else{
            $message='invalid login details!';
            return view('pages.doctorlogin')->with('message',$message);
        }
    }else{
        return view('pages.doctorlogin')->with('message','you are not in the system');
    }
    }
    public function showRegisterForm(){
        $chief_id=Input::get('chief_id');
        return view('pages.doctorregister')->with('chief_id',$chief_id);
    }
    public function register(Request $request){

        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $phonenumber=$request->input('phonenumber');
        $specialty=$request->input('specialty');
        $doctor_id=$request->input('doctor_id');
        $chief_id=$request->input('chief_id');
        $password=$request->input('password');


        $doctor=new Doctor;
        $doctor->firstname=$firstname;
        $doctor->lastname=$lastname;
        $doctor->phonenumber=$phonenumber;
        $doctor->doctor_id=$doctor_id;
        $doctor->specialty=$specialty;
        $doctor->password=Hash::make($password);
        $checkdoc=Doctor::where('doctor_id',$doctor_id)->first();
        if($checkdoc)
        {
            $message='Doctor Id already exists in the system!';
            return view('pages.doctorregister')->with('message',$message)->with('chief_id',$chief_id);
        }else{
        $doctor->save();
        $chief=ChiefHealth::where('chief_id',$chief_id)->first();
        return view('pages.welcomechief')->with('chief',$chief)->with('message','Doctor added successfully!');
        }
    }
    public function getConsultation(){
        $specialty=Input::get('specialty');
        $doctorphonenumber=Input::get('doctorphonenumber');
        $doctor_id=Input::get('doctor_id');
        $doctorfirstname=Input::get('doctorfirstname');
        $consultation=consultation::where('type',$specialty)->get();
        return view('pages.doctorview')->with('consultation',$consultation)->with('specialty',$specialty)
        ->with('doctorphonenumber',$doctorphonenumber)->with('doctor_id',$doctor_id)->with('doctorfirstname',$doctorfirstname);
    }
    public function description(){
        $specialty=Input::get('specialty');
        $doctorphonenumber=Input::get('doctorphonenumber');
        $doctor_id=Input::get('doctor_id');
        $doctorfirstname=Input::get('doctorfirstname');
        $patientfirstname=Input::get('patientfirstname');
        $patientphonenumber=Input::get('patientphonenumber');
        $description=Input::get('consultation');
        return view('pages.description')->with('doctorphonenumber',$doctorphonenumber)->
        with('specialty',$specialty)->with('doctor_id',$doctor_id)->with('doctorfirstname',$doctorfirstname)
        ->with('patientfirstname',$patientfirstname)->with('description',$description)->with('patientphonenumber',$patientphonenumber);
    }
    public function reply(){
        $specialty=Input::get('specialty');
        $doctorphonenumber=Input::get('doctorphonenumber');
        $doctor_id=Input::get('doctor_id');
        $doctorfirstname=Input::get('doctorfirstname');
        $patientfirstname=Input::get('patientfirstname');
        $patientphonenumber=Input::get('patientphonenumber');
        $description=Input::get('description');

        return view('pages.sendreply')->with('doctorphonenumber',$doctorphonenumber)->
        with('specialty',$specialty)->with('doctor_id',$doctor_id)->with('doctorfirstname',$doctorfirstname)
        ->with('patientfirstname',$patientfirstname)->with('patientphonenumber',$patientphonenumber)
        ->with('description',$description);
    }
    public function sendreply(){
        $specialty=Input::get('type');
        $doctorphonenumber=Input::get('doctorphonenumber');
        $doctor_id=Input::get('doctor_id');
        $doctorfirstname=Input::get('doctorfirstname');
        $patientfirstname=Input::get('patientfirstname');
        $patientphonenumber=Input::get('patientphonenumber');
        $description=Input::get('description');
        $solution=Input::get('solution');

        $reply=new Reply;
        $reply->doctor_phone=$doctorphonenumber;
        $reply->doctor_name=$doctorfirstname;
        $reply->doctor_id=$doctor_id;
        $reply->patient_phone=$patientphonenumber;
        $reply->patient_name=$patientfirstname;
        $reply->type=$specialty;
        $reply->solution=$solution;
        $reply->save();

        $archive=new Archive;
        $archive->doctor_phone=$doctorphonenumber;
        $archive->doctor_name=$doctorfirstname;
        $archive->doctor_id=$doctor_id;
        $archive->patient_phone=$patientphonenumber;
        $archive->patient_name=$patientfirstname;
        $archive->type=$specialty;
        $archive->description=$description;
         $archive->save();

        $consult=consultation::where('phonenumber',$patientphonenumber)->where('description',$description)->first();
        $consult->delete();

        $doctor=Doctor::where('doctor_id',$doctor_id)->first();
        return view('pages.welcomedoctor')->with('doctor',$doctor)->with('message','Reply sent thankyou!');

    }
    public function registerchief(){
        $firstname=Input::get('firstname');
        $lastname=Input::get('lastname');
        $phonenumber=Input::get('phonenumber');
        $chief_id=Input::get('chief_id');
        $password=Input::get('password');

        $chief=new ChiefHealth;
        $chief->firstname=$firstname;
        $chief->lastname=$lastname;
        $chief->phonenumber=$phonenumber;
        $chief->chief_id=$chief_id;
        $chief->password=Hash::make($password);

        $checkdoc=ChiefHealth::where('chief_id',$chief_id)->first();
        if($checkdoc)
        {
            $message='Chief Id already exists in the system!';
            return view('pages.chiefregister')->with('message',$message);
        }else{
        $chief->save();
        return view('pages.chieflogin');
        }


    }
    public function registerdiet(){
        $firstname=Input::get('firstname');
        $lastname=Input::get('lastname');
        $phonenumber=Input::get('phonenumber');
        $dietician_id=Input::get('dietician_id');
        $password=Input::get('password');
        $chief_id=Input::get('chief_id');

        $diet=new Dietician;
        $diet->firstname=$firstname;
        $diet->lastname=$lastname;
        $diet->phonenumber=$phonenumber;
        $diet->dietician_id=$dietician_id;
        $diet->password=Hash::make($password);
        $checkdoc=Dietician::where('dietician_id',$dietician_id)->first();
        if($checkdoc)
        {
            $message='Dietician Id already exists in the system!';
            return view('pages.dieticianregister')->with('message',$message)->with('chief_id',$chief_id);
        }else{
        $diet->save();
        $chief=ChiefHealth::where('chief_id',$chief_id)->first();
        return view('pages.welcomechief')->with('chief',$chief)->with('message','Dietician added successfully!');
        }

    }
    public function registerdiets(){

        $chief_id=Input::get('chief_id');
        return view('pages.dieticianregister')->with('chief_id',$chief_id);
    }
    public function loginchief(){
       $chief_id=Input::get('chief_id');
       $password=Input::get('password');

       $chief=ChiefHealth::where('chief_id',$chief_id)->first();
       if($chief){

        if(Hash::check($password, $chief->password)){

            return view('pages.welcomechief')->with('chief',$chief);
        }
        else {
            return view('pages.chieflogin')->with('message','invalid login details');
        }
       }
else{
 return view('pages.chieflogin')->with('message','you are not in the system');
}
    }
    public function logindietician(){
        $dietician_id=Input::get('dietician_id');
        $password=Input::get('password');

        $diet=Dietician::where('dietician_id',$dietician_id)->first();
        if($diet){

         if(Hash::check($password, $diet->password)){

             return view('pages.welcomediet')->with('dietician',$diet);
         }
         else {
             return view('pages.dietlogin')->with('message','invalid login details');
         }
        }
 else{
  return view('pages.dietlogin')->with('message','you are not in the system');
 }
     }
    public function viewPatients(){
        $patients=Patient::all();
        return view('pages.viewpatients')->with('patients',$patients);
    }
    public function viewDoctors(){
        $doctors=Doctor::all();
        return view('pages.viewdoctors')->with('doctors',$doctors);
    }
    public function findDoctor(){
        $doctor_id=Input::get('doctor_id');
        $doctors=Doctor::where('doctor_id',$doctor_id)->get();
        return view('pages.viewdoctors')->with('doctors',$doctors);
    }
    public function findPatient(){
        $phonenumber=Input::get('phonenumber');
        $patients=Patient::where('phonenumber',$phonenumber)->get();
        return view('pages.viewpatients')->with('patients',$patients);
    }
    public function deleteDoctor(){
        $doctor_id=Input::get('doctor_id');
        $doctor=Doctor::where('doctor_id',$doctor_id)->first();
        $doctor->delete();

        $doctors=Doctor::all();
        return view('pages.viewdoctors')->with('doctors',$doctors);
    }
    public function deletePatient(){
        $phonenumber=Input::get('phonenumber');
        $patient=Patient::where('phonenumber',$phonenumber)->first();
        $patient->delete();

        $patients=Patient::all();
        return view('pages.viewpatients')->with('patients',$patients);
    }
    public function changechief(){

        $chief_id=Input::get('chief_id');
     return view('pages.changechief')->with('chief_id',$chief_id);

    }
    public function changeschief(){
        $chief_id=Input::get('chief_id');
        $oldpassword=Input::get('oldpassword');
        $confirmpassword=Input::get('confirmpassword');
        $newpassword=Input::get('newpassword');

        $chief=ChiefHealth::where('chief_id',$chief_id)->first();
         if(Hash::check($oldpassword, $chief->password)){

           if($newpassword===$confirmpassword){
           $chief->password=Hash::make($newpassword);
           $chief->save();
           return view('pages.welcomechief')->with('chief',$chief)->with('message','password changed successfully');
           }else{
            return view('pages.changechief')->with('message','match password please!')->with('chief_id',$chief_id);
        }
        }
        else {

            return view('pages.changechief')->with('message','incorrect old password!')->with('chief_id',$chief_id);
        }
    }
    public function changedoctor(){

        $doctor_id=Input::get('doctor_id');
     return view('pages.changedoctor')->with('doctor_id',$doctor_id);

    }
    public function changesdoctor(){
        $doctor_id=Input::get('doctor_id');
        $oldpassword=Input::get('oldpassword');
        $confirmpassword=Input::get('confirmpassword');
        $newpassword=Input::get('newpassword');

        $doctor=Doctor::where('doctor_id',$doctor_id)->first();
         if(Hash::check($oldpassword, $doctor->password)){

           if($newpassword===$confirmpassword){
           $doctor->password=Hash::make($newpassword);
           $doctor->save();
           return view('pages.welcomedoctor')->with('doctor',$doctor)->with('message','password changed successfully');
           }else{
            return view('pages.changedoctor')->with('message','match password please!')->with('doctor_id',$doctor_id);
        }
        }
        else {

            return view('pages.changedoctor')->with('message','incorrect old password!')->with('doctor_id',$doctor_id);
        }
    }
    public function changediet(){

        $doctor_id=Input::get('dietician_id');
     return view('pages.changepatient')->with('dietician_id',$dietician_id);

    }
    public function changesdiet(){
        $dietician_id=Input::get('dietician_id');
        $oldpassword=Input::get('oldpassword');
        $confirmpassword=Input::get('confirmpassword');
        $newpassword=Input::get('newpassword');

        $diet=Dietician::where('dietician_id',$dietician_id)->first();
         if(Hash::check($oldpassword, $diet->password)){

           if($newpassword===$confirmpassword){
           $diet->password=Hash::make($newpassword);
           $diet->save();
           return view('pages.welcomediet')->with('diet',$diet)->with('message','password changed successfully');
           }else{
            return view('pages.changediet')->with('message','match password please!')->with('dietician_id',$dietician_id);
        }
        }
        else {

            return view('pages.changediet')->with('message','incorrect old password!')->with('dietician_id',$dietician_id);
        }
    }
    public function getabuse(){
        $doctorfirstname=Input::get('doctorfirstname');
        $doctor_id=Input::get('doctor_id');
        return view('pages.abuses')->with('doctorfirstname',$doctorfirstname)->with('doctor_id',$doctor_id);
    }
    public function abuse(){
        $patient_number=Input::get('phonenumber');
        $doctor_id=Input::get('doctor_id');
        $doctor_name=Input::get('dfirstname');
        $description=Input::get('description');

        $abuse=new Abuse;
        $abuse->doctor_name=$doctor_name;
        $abuse->doctor_id=$doctor_id;
        $abuse->patient_number=$patient_number;
        $abuse->abuse_description=$description;
        $abuse->save();

        $doctor=Doctor::where('doctor_id',$doctor_id)->first();
        return view('pages.welcomedoctor')->with('doctor',$doctor)->with('message','abuse reported the Chief Officer will recieve it');

    }
    public function viewabuse(){
        $abuses=Abuse::all();
        return view('pages.abuseview')->with('abuses',$abuses);
    }
    public function abusedesc(){
        $description=Input::get('description');
        return view('pages.abusedescription')->with('description',$description);
    }
    public function deleteabuse(){
        $id=Input::get('id');
        $abuse=Abuse::where('id',$id)->first();
        $abuse->delete();
        $abuses=Abuse::all();
        return view('pages.abuseview')->with('abuses',$abuses);
    }
    public function viewarchives(){
        $archives=Archive::all();
        return view('pages.archives')->with('archives',$archives);
    }
    public function archivedescription(){
        $description=Input::get('description');
        return view('pages.archivedescription')->with('description',$description);
    }
}
