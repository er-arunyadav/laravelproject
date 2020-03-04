<?php

namespace App\Http\Controllers;
use Auth;
use App\Product;
use Session;
use App\Order_items;
use App\Order;
use DataTables;
use DB;
use App\Quotation;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $userid = Auth::user()->id;

        


         if($request->ajax())
        {


         $data =   DB::table('orders')
            ->select('*')
            ->join('order_items','order_items.order_id','=','orders.id')
            ->join('products','products.id','=','order_items.product_id')
            ->where(['orders.user_id' => $userid])
            ->get();
            // DB::connection()->enableQueryLog();
            // $queries = DB::getQueryLog();


                 return  DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);

                }


        return view('products.orderslist');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all(); 

        return view('products.orders')->with('products', Product::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'product_id' =>'required',
        ]);

         if($request->quantity < 0){
            Session::flash('msg', 'Invaild Quantity');

            return redirect()->back();
         }


$product = Product::find($request->product_id);

$total_amount = $product->price*$request->quantity;


$inv_no = mt_rand(10000, 99999);

$status = 1;



        $order= new Order();
        $order->user_id = Auth::user()->id;
        $order->invoice_number = $inv_no;
        $order->total_amount = $total_amount;
        $order->status = $status;


        $order->save();
        if($order->id){
            //order_id, product_id, quantity
            $order_items = new Order_items();
            $order_items->order_id = $order->id;
            $order_items->product_id = $request->product_id;
            $order_items->quantity = $request->quantity;
            $order_items->save();
        }


        Session::flash('msg', 'Your Order is Placed Successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
