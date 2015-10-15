<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;

use Illuminate\Database\Eloquent\Render;
use Illuminate\Pagination\Paginator;

use DB;

class Booking extends Model {
	
	protected $table = 'bookings';
	protected $fillable = ['type','uid','money','description','add_time']; 


	public static $uid;

	//获取单个用户的记账单
	public static function getBook($uid){
			
		return self::where('uid',$uid)->orderBy('created_at', 'desc')->paginate(15);
	}

	public static function getWeek($uid)
	{
		return DB::select('select sum(`money`) as money,add_time from bookings  where uid = ? group by add_time order by created_at desc limit 7', [$uid]);
	}
	
	public static function getMonth($uid)
	{
		return DB::select('select sum(`money`) as money from bookings  where uid = ? and add_time > ? order by created_at desc', [$uid,date('Y-m-d',time()-date('d')*24*3600)]);
	}
}
