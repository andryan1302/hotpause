<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TicketController extends Controller
{
    public function index(){
        $data = Category::leftJoin('tickets', 'categories.id', '=', 'tickets.category_id')
            ->select('categories.category','categories.id', DB::raw('COUNT(tickets.id) as ticket_count'))
            ->groupBy('categories.id','categories.category')
            ->get();   
        
        return view('allticket',['data' => $data]);
    }

    public function find($id){

        $data = Category::leftJoin('tickets', 'categories.id', '=', 'tickets.category_id')
        ->select('categories.category','categories.id', DB::raw('COUNT(tickets.id) as ticket_count'))
        ->groupBy('categories.id','categories.category')
        ->get();  

        $tickets = Category::join('tickets', 'categories.id', '=', 'tickets.category_id')->where('categories.id',$id)->get();   

        $nama = Category::findOrFail($id);
        return view('allticket2',['data' => $data,'tickets' => $tickets,'nama' => $nama]);
    }

    public function detail($id){
        $data = Detail::join('tickets', 'details.ticket_id', '=', 'tickets.id')->where('tickets.id',$id)->first();

        return view('detail',['data' => $data]);
    }
}
