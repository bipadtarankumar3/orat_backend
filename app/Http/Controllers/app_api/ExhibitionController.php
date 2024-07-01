<?php

namespace App\Http\Controllers\app_api;

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

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use DB;
use Validator;
use Session;
use File;
use Mail;
use JD\Cloudder\Facades\Cloudder;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class ExhibitionController extends Controller
{
    public function exhibition_travel(Request $request){

        $create =  ExhibitionTravel::create([
            'model_name' => $request->model_name,
            'date' => $request->date,
            'travel_mode' => $request->travel_mode,
            'flight_number' => $request->flight_number,
            'expenses_cost' => $request->expenses_cost,
            'exhibition_type' => $request->exhibition_type,
            'created_by' => Auth::user()->id,
        ]);

        $data =  $create ; // Replace this with your actual data
        $message = 'Data retrieved successfully';

        return $this->sendResponse($data, $message);

    }

    public function exhibition_hotel(Request $request){

        $create =  ExhibitionHotel::create([
            'model_name' => $request->model_name,
            'hotel_name' => $request->hotel_name,
            'checkin' => $request->checkin,
            'checkout' => $request->checkout,
            'room_type' => $request->room_type,
            'expenses_cost' => $request->expenses_cost,
            'exhibition_type' => $request->exhibition_type,
            'created_by' => Auth::user()->id,
        ]);

        $data =  $create ; // Replace this with your actual data
        $message = 'Data retrieved successfully';

        return $this->sendResponse($data, $message);

    }

    public function exhibition_food(Request $request){

        $create =  ExhibitionFood::create([
            'model_name' => $request->model_name,
            'date' => $request->date,
            'food_name' => $request->food_name,
            'expenses_cost' => $request->expenses_cost,
            'exhibition_type' => $request->exhibition_type,
            'created_by' => Auth::user()->id,
        ]);

        $data =  $create ; // Replace this with your actual data
        $message = 'Data retrieved successfully';

        return $this->sendResponse($data, $message);

    }

    public function exhibition_fees(Request $request){

        $create =  ExhibitionFees::create([
            'model_name' => $request->model_name,
            'payment_date' => $request->payment_date,
            'payment_mode' => $request->payment_mode,
            'payment_amount' => $request->payment_amount,
            'exhibition_type' => $request->exhibition_type,
            'created_by' => Auth::user()->id,
        ]);

        $data =  $create ; // Replace this with your actual data
        $message = 'Data retrieved successfully';

        return $this->sendResponse($data, $message);

    }

    public function exhibition_commission(Request $request){

        $create =  ExhibitionCommission::create([
            'model_name' => $request->model_name,
            'date' => $request->date,
            'travel_mode' => $request->travel_mode,
            'flight_number' => $request->flight_number,
            'expenses_cost' => $request->expenses_cost,
            'exhibition_type' => $request->exhibition_type,
            'created_by' => Auth::user()->id,
        ]);

        $data =  $create ; // Replace this with your actual data
        $message = 'Data retrieved successfully';

        return $this->sendResponse($data, $message);

    }

    public function others_expenses(Request $request){

        if ($request->type == 'stall_rent') {
            $create =  ExhibitionOtherStall::create([
                'type' => $request->type,
                'date' => $request->date,
                'payment_mode' => $request->payment_mode,
                'payment_amount' => $request->payment_amount,
                'created_by' => Auth::user()->id,
            ]);
    
            $data =  $create ; // Replace this with your actual data
            $message = 'Data retrieved successfully';
    
            return $this->sendResponse($data, $message);
        } 
        else if( $request->type == 'courier') {
            $create =  ExhibitionOtherCurrier::create([
                'type' => $request->type,
                'date' => $request->date,
                'courier_charges' => $request->courier_charges,
                'courier_company' => $request->courier_company,
                'created_by' => Auth::user()->id,
            ]);
    
            $data =  $create ; // Replace this with your actual data
            $message = 'Data retrieved successfully';
    
            return $this->sendResponse($data, $message);
        }
        else if( $request->type == 'fabrication') {
            $create =  ExhibitionOtherFabrication::create([
                'type' => $request->type,
                'date' => $request->date,
                'created_by' => Auth::user()->id,
            ]);

            // print_r($request->fabrication_charge_data);die;
            $fabrication_charge_data =$request->fabrication_charge_data;
        
            // print_r($fabrication_charge_data);die;
            foreach ($fabrication_charge_data as $key => $value) {
                // print_r($value);die;
                ExhibitionOtherFabricationCharge::create([
                    'other_fabrication_id' => $create->id,
                    'fabrication_charge' => $value['fabrication_charge'],
                    'amount' => $value['amount'],
                    'created_by' => Auth::user()->id,
                ]);
            }
    
            $data =  $create ; // Replace this with your actual data
            $message = 'Data retrieved successfully';
    
            return $this->sendResponse($data, $message);
        }
        else if( $request->type == 'mise_expenses') {

            $feature_image = '';
            if ($request->hasFile('file')) {
                $thumbnail = $request->file('file');
                $thumbnailName = Str::uuid() . '_' . $thumbnail->getClientOriginalName(); // Unique filename
                $feature_image = '/upload/' . $thumbnailName; // Adjust path as needed
                $thumbnail->move(public_path('upload'), $thumbnailName);
                
            }
            $create =  ExhibitionOtherMiscExpenses::create([
                'type' => $request->type,
                'date' => $request->date,
                'misc_expenses' => $request->misc_expenses,
                'misc_amount' => $request->misc_amount,
                'file' => $feature_image,
                'created_by' => Auth::user()->id,
            ]);
    
            $data =  $create ; // Replace this with your actual data
            $message = 'Data retrieved successfully';
    
            return $this->sendResponse($data, $message);
        }
        
    }


}
