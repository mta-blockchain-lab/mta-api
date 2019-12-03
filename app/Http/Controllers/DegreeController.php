<?php

namespace App\Http\Controllers;

use App\Events\AddTransactionEvent;
use App\Degree;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DegreeController extends Controller
{
    function index()
    {
        $data = Degree::paginate(10);
        return view('degrees.all', compact('data'));
    }

    function  add(){
        return view('degrees.add');
    }

    protected function create(array $data)
    {
        return Degree::create([
            'upon' => $data['upon'],
            'dob' => date('y-m-d', strtotime($data['dob'])),
            'gender'=> $data['gender'],
            'yog' =>$data['yog'],
            'major'=>$data['major'],
            'ranking'=>$data['ranking'],
            'mode'=>$data['mode-of-study'],
            'serial_number'=>$data['serial-number'],
            'reference_number'=>$data['reference-number'],
            'address'=>$data['address'],
            'dos'=> date('y-m-d', strtotime($data['dos'])),            'mode'=>$data['mode-of-study'],
            'sign_name'=>$data['sign-name'],

        ]);
    }

    function  addRequest(Request $request){
        $allRequest  = $request->all();
//        return $allRequest;
//
        $result = $this->create($allRequest);
//        $bot_id = $request->bot_station_id;
//        $money = floatval($request->money);
//
        if( $result) {
            return redirect()->back()->with('success','');

//
//            $id = Transaction::where('txs', $result->txs)->first()->id;
//            // Insert thành công sẽ hiển thị thông báo
//            $bot = Bot::Where('id',$bot_id)->first();
//            $bot->current = $bot->current + $money;
//            $bot->count ++;
//            $bot->save();
//            event(new AddTransactionEvent($id, $bot->count, $bot->current));
//            return response()->json([
//                'transaction_id' => $id
//            ], 200); // Status code here
        } else {
            return redirect()->back()->with('failed','');
//            // Insert thất bại sẽ hiển thị thông báo lỗi
//            return response()->json([], 500); // Status code here
        }
    }

    public function  find(Request $request){
        $serial_number = $request->serial_number;
        $reference_number = $request->reference_number;
        $dos=$request->dos;
        $data = Degree::Where('serial_number',$serial_number)->Where('reference_number', $reference_number)->first();

        if (!$data){
            return response()->json([], 202);
        }
        return response()->json($data, 200); // Status code here

    }

    function detail($degree_id)
    {
        $data = Degree::Where('id', $degree_id)->firstOrFail();
        $hash = hash('sha256', $data);


        return view('degrees.detail', ['degree'=>$data,'hash'=>$hash]);
    }
//    function fetch_data(Request $request)
//    {
//        if($request->ajax())
//        {
//            $data = Transaction::paginate(10);
//            return view('transactions.pagination_data', compact('data'))->render();
//        }
//    }
//
//    function search(Request $request)
//    {
//        $keyword = $request->keyword;
//        $count = strlen($keyword); // 6
//        $data=null;
//
//        if ($count<15){
//            $data=Transaction::Where('plate_id', $keyword)->paginate(10);;
//        }
//        if ($count==36){
//            $data=Transaction::Where('id', $keyword)->orWhere('bot_station_id', $keyword)->paginate(10);;
//        }
//        if ($count==66){
//            $data=Transaction::Where('txs', $keyword)->paginate(10);;
//        }
//
//        return view('transactions.result',compact('data', $data),['keyword'=>$keyword]) ->render();
//    }

}
