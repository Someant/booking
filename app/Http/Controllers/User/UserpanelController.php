<?php namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Database\Eloquent\Render;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginato;

use App\Booking;



use App\User;
use Request;

class UserpanelController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$money=Booking::getBook(Request::user()->id);
		$week=Booking::getWeek(Request::user()->id);
		//var_dump($week);
		//dd($week);
		$weekarray='';//$timearray=[];
		if(count($week)==0) $key=0;
		krsort($week);
		for($k=6;$k>-1;$k--)		
		{
			$val=0;			
			foreach($week as $key => $i)
			{
				if(date('Y-m-d',time()-3600*24*$k)==$i->add_time)
				{
					$val=$i->money;
				}				
			}
						
			if($key==count($week))
			{
				$weekarray=$val;
			}				
			else
			{
				$weekarray=$weekarray.$val.',';				
			}
				
		}

		//var_dump($timearray);
		
		foreach($money as $key => $val)
		{
			
			if($val['type']==0)
			{
				$money[$key]->type='bookmark icon';
			}
			
			if($val['type']==1)
			{
				$money[$key]->type='user icon';
			}
			
			if($val['type']==2)
			{
				$money[$key]->type='food icon';
			}
			
			if($val['type']==3)
			{
				$money[$key]->type='home icon';
			}
			
			if($val['type']==4)
			{
				$money[$key]->type='car icon';
			}
			
		}
		//dd($money->render());
		return view('user.userpanel',array(
			'money' => $money,
			'week'=>$weekarray

		));
	}

	public function listPage($page)
	{
		//dd($page);
		$money=Booking::getBook(Request::user()->id);
		
		foreach($money as $key => $val)
		{
			
			if($val['type']==0)
			{
				$money[$key]->type='bookmark icon';
			}
			
			if($val['type']==1)
			{
				$money[$key]->type='user icon';
			}
			
			if($val['type']==2)
			{
				$money[$key]->type='food icon';
			}
			
			if($val['type']==3)
			{
				$money[$key]->type='home icon';
			}
			
			if($val['type']==4)
			{
				$money[$key]->type='car icon';
			}
			
		}
		//dd($money->render());
		return $money;
	}
	
	public function setting(Request $request)
	{
		$userinfo=Request::user();
		$status=FALSE;
		if($_POST)
		{
			$input=Request::all();
			$userinfo->update($input);
			$status=true;
		}						
		
		return view('user.setting',array(
			'userinfo' => $userinfo,
			'status' => $status
		));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return updateProfile();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		return $request;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
