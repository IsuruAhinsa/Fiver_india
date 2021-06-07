<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Patient;
use App\Client;
use App\Http\Requests;
use Session;
use Redirect;
// use DB;
use App\Package;
use App\Visit;

// Added By Noman

use Illuminate\Support\Facades\DB as DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index(Request $request)
    {
        //fetch patient data
        $starPriority = ['billing' => [], 'high' => [], 'medium' => [], 'low' => [], 'unStarted' => []];
        $patients = new Patient();
        foreach ($starPriority as $key => $sp) {
            if ($key != 'unStarted') {
                $starPriority[$key] = $patients->where('starpriority', $key)->where('starred', 'yes')->get();
            } else {
                // $starPriority[$key] = $patients->where('starred', '<>', 'yes')->get();
                $starPriority[$key] = $patients->where('starred', '=', null)->get();
            }
        }
        // $records = DB::table('patients')->orderBy('starpriority', 'desc')->get();
        $phoneCall = DB::table('encounters')->select(['patient_id', 'phonecall'])->groupBy('patient_id')->get();
        $phoneCall = $phoneCall->toArray();
        $encounters = function ($id) {
            $thisYearVisits = 0;
            $encount = DB::table('encounters')->where('patient_id', $id);
            $encounter = clone $encount;
            $years = $encount->select('dateyear')->groupBy('dateyear')->get()->toArray();
            $y = [];
            foreach ($years as $k => $year) {
                $yearCount = DB::table('encounters')->selectRaw("count('dateyear') as count")->whereRaw("dateyear = $year->dateyear and patient_id = $id")->get();
                $visitsPerYear = DB::table('encounters')->selectRaw("*")->whereRaw("dateyear=$year->dateyear and patient_id = $id")->get();
                $yearCount = $yearCount->toArray()[0];
                $visitsPerYear = $visitsPerYear->toArray();
                array_push($y, [$year->dateyear, $yearCount, $visitsPerYear]);
            }
            $years = $y;
            $encounter = $encounter->orderBy("encounterdatesort", 'desc')->get();
            foreach ($encounter as $k => $v) {
                if ($k == 0) {
                    $encount = $v;
                }
                if ($v->dateyear == date('Y')) {
                    $thisYearVisits++;
                }
            }
            $encounter = $encount;
            return compact('thisYearVisits', 'encounter', 'years');
        };

        return view('patient.index', compact('starPriority', 'phoneCall', 'encounters'));
    }

    public function scheduler1()
    { 
        $records = DB::table('patients')->orderBy('starpriority', 'desc')->get();
        return view('patient.scheduler', compact('records'));
    }

    public function datatable(Request $request)
    {
        //fetch patient data
        $records = DB::select('select * from patients');
        return view('patient.datatable', ['records' => $records]);
    }

    public function portalHome()
    {
        return view('patient.portalhome');
    }



    public function admin()
    {
        $records = DB::select('select * from patients');
        return view(
            'patient.admin',
            compact('records')
        );
    }


    public function algorithm($id)
    {
        $data = Patient::findOrFail($id);
//        $visits = Visit::where('patient_id', $id)->get();

//        $currentVisit = $data->encounters()->where('id', $encId)->get()[0];
        $visits = $data->encounters()->get();

        $yearVisits = [];

        $yearCount = $data->encounters()->selectRaw("count('dateyear') as count, dateyear as year")->groupBy('dateyear')->orderBy('dateyear', 'desc')->get();
        foreach ($yearCount as $k => $year) {
            $year = $year->toArray();
            array_push($yearVisits, $year);
        }

        return view('patient.newencounter', compact('data', 'visits','yearVisits'));
    }

    public function addClient()
    {
        $patients = DB::select('select * from patients');
        $records = DB::select('select * from clients');
        return view(
            'patient.addclient',
            compact('patients', 'records')
        );
    }

    public function insertCleint(Request $request)
    {
        $request->validate([

            //'first_name' =>'required',
            //'last_name' => 'required',
            //'phone'     => 'required',
            //'email'     => 'required',

        ]);
        if (!$request->has('invite_code')) {
            $invite_code = str_random(8);
            $request->request->add(['invite_code' => ($invite_code)]);
        }

        Client::create($request->all());
        return redirect()->route('addclient');
    }
    //return view('patient.addclient')

}
