<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    protected $table = 'degrees';
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $fillable =['upon','dob','gender', 'yog','major', 'ranking', 'mode', 'serial_number','reference_number','address','dos', 'sign_name'];
//'upon' => $data['name'],
//'dob' => date('y-m-d', strtotime($data['dob'])),
//'gender'=> $data['gender'],
//'yog' =>$data['yog'],
//'major'=>$data['major'],
//'ranking'=>$data['ranking'],
//'mode'=>$data['mode-of-study'],
//'serial_number'=>$data['serial-number'],
//'reference_number'=>$data['reference-number'],
//'address'=>$data['address'],
//'dos'=> date('y-m-d', strtotime($data['dos'])),            'mode'=>$data['mode-of-study'],
//'sign_name'=>$data['sign-name'],
}
