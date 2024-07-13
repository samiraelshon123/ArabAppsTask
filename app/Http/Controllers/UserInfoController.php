<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeneralRequest;
use App\Http\Requests\PersonalRequest;
use App\Http\Requests\TechnicalRequest;
use App\Models\UserInfo;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function generalInfo(){
        $data = UserInfo::where('user_id', auth()->user()->id)->first();
        return view('form.general', compact('data'));
    }
    public function storeGeneralInfo(GeneralRequest $request){
        $data = $request->except('_token');
        $data['user_id'] = auth()->user()->id;
        $UserInfo = UserInfo::where('user_id', auth()->user()->id)->first();
        if($UserInfo != null){
            $UserInfo = UserInfo::where('user_id', auth()->user()->id)->first();
            $UserInfo->update($data);
        }else{
            $form = UserInfo::Create($data);
        }
        return redirect()->route('personalInfo');
    }
    public function personalInfo(){
        $data = UserInfo::where('user_id', auth()->user()->id)->first();
        return view('form.personal', compact('data'));
    }
    public function storePersonalInfo(PersonalRequest $request){
        $data = $request->except('_token');
        $UserInfo = UserInfo::where('user_id', auth()->user()->id)->first();
        $UserInfo->update($data);

        return redirect()->route('technicalInfo');
    }
    public function technicalInfo(){
        $data = UserInfo::where('user_id', auth()->user()->id)->first();
        return view('form.technical', compact('data'));
    }
    public function storeTechnicalInfo(TechnicalRequest $request){
        $data = $request->except('_token');
        $UserInfo = UserInfo::where('user_id', auth()->user()->id)->first();
        $UserInfo->update($data);

        return redirect()->route('summary');
    }
    public function summary(){
        $data = UserInfo::where('user_id', auth()->user()->id)->first();
        return view('form.summary', compact('data'));
    }
    public function storeSummary(){

        return redirect()->route('generalInfo');
    }

}
