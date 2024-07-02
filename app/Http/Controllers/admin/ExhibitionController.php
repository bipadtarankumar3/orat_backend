<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\ExhibitionTravel;
use App\Models\ExhibitionCommission;
use App\Models\ExhibitionFees;
use App\Models\ExhibitionFood;
use App\Models\ExhibitionHotel;
use App\Models\ExhibitionOtherCurrier;
use App\Models\ExhibitionOtherFabrication;
use App\Models\ExhibitionOtherFabricationCharge;
use App\Models\ExhibitionOtherMiscExpenses;
use App\Models\ExhibitionOtherStall;

class ExhibitionController extends Controller
{

    public function list(){
        $data['title']='Exhibition Create';
        return view('admin.pages.exhibition.list',$data);
    }
    public function query(){
        $data['title']='Exhibition query';
        return view('admin.pages.exhibition.exhibition_query',$data);
    }
    public function inventory(){
        $data['title']='Exhibition inventory';
        return view('admin.pages.exhibition.inventory',$data);
    }
    public function ExhibitionUserlist(){
        $data['title']='Exhibition  User';
        return view('admin.pages.exhibition.exhibitionuser_list',$data);
    }

    public function sales_create(){
        $data['title']='Exhibition Sales';
        return view('admin.pages.exhibition.exhibitionsales',$data);
    }
    public function sales_list(){
        $data['title']='Exhibition Sales';
        return view('admin.pages.exhibition.exhibitionsales_list',$data);
    }
    public function expense(){
        $data['title']='Exhibition expense';
        return view('admin.pages.exhibition.exhibitionexpense',$data);
    }

    public function model_list(){
        $data['title']='Exhibition model';

        $data['ExhibitionTravel'] = ExhibitionTravel::where('exhibition_type','model')->get();
        $data['ExhibitionCommission'] = ExhibitionCommission::where('exhibition_type','model')->get();
        $data['ExhibitionFees'] = ExhibitionFees::where('exhibition_type','model')->get();
        $data['ExhibitionFood'] = ExhibitionFood::where('exhibition_type','model')->get();
        $data['ExhibitionHotel'] = ExhibitionHotel::where('exhibition_type','model')->get();

        return view('admin.pages.exhibition.model_list',$data);
    }

    public function staff_list(){

        $data['ExhibitionTravel'] = ExhibitionTravel::where('exhibition_type','staff')->get();
        $data['ExhibitionCommission'] = ExhibitionCommission::where('exhibition_type','staff')->get();
        $data['ExhibitionFees'] = ExhibitionFees::where('exhibition_type','staff')->get();
        $data['ExhibitionFood'] = ExhibitionFood::where('exhibition_type','staff')->get();
        $data['ExhibitionHotel'] = ExhibitionHotel::where('exhibition_type','staff')->get();

        $data['title']='Exhibition staff';
        return view('admin.pages.exhibition.staff_list',$data);
    }

    
    public function owner_list(){

        $data['ExhibitionTravel'] = ExhibitionTravel::where('exhibition_type','owner')->get();
        $data['ExhibitionCommission'] = ExhibitionCommission::where('exhibition_type','owner')->get();
        $data['ExhibitionFees'] = ExhibitionFees::where('exhibition_type','owner')->get();
        $data['ExhibitionFood'] = ExhibitionFood::where('exhibition_type','owner')->get();
        $data['ExhibitionHotel'] = ExhibitionHotel::where('exhibition_type','owner')->get();

        $data['title']='Exhibition owner';
        return view('admin.pages.exhibition.owner_list',$data);
    }

    public function others_list(){
        $data['title']='Exhibition others';

        $data['ExhibitionTravel'] = ExhibitionTravel::where('exhibition_type','owner')->get();
        $data['ExhibitionCommission'] = ExhibitionCommission::where('exhibition_type','owner')->get();
        $data['ExhibitionFees'] = ExhibitionFees::where('exhibition_type','owner')->get();
        $data['ExhibitionFood'] = ExhibitionFood::where('exhibition_type','owner')->get();
        $data['ExhibitionHotel'] = ExhibitionHotel::where('exhibition_type','owner')->get();

        return view('admin.pages.exhibition.others_list',$data);
    }

}
