<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BIll;
use App\Models\BIllDetail;

class BillController extends Controller
{
    public function listBill(){
        $bill = Bill::all();
        return view('admin.listBill',compact('bill'));
    }

    public function getBillDetails($id_bill)
    {
        //$billDetails = BillDetail::where('id_bill',$id_bill)->get();
        //dd($billDetails);

        $billDetail = BillDetail::where('bill_detail.id_bill',$id_bill)
        ->join('product','product.id','=','bill_detail.id_product')
        ->get(['bill_detail.*','product.name']);

        $bill = Bill::find($id_bill);
        return view('admin.billDetail',compact('billDetail','bill'));
    }

    public function getBillPrint($id_bill)
    {
        //$billDetails = BillDetail::where('id_bill',$id_bill)->get();
        //dd($billDetails);

        $billDetail = BillDetail::where('bill_detail.id_bill',$id_bill)
        ->join('product','product.id','=','bill_detail.id_product')
        ->get(['bill_detail.*','product.name']);

        $bill = Bill::find($id_bill);
        return view('admin.billPrint',compact('billDetail','bill'));
    }

    public function postBillUpdateStatus($id_bill, Request $req)
    {
        $bill = Bill::find($id_bill);
        //dd($order);
        $bill->status = $req->status;
        $bill->save();
        return redirect()->route('admin/bill')->with('success','Cập nhật trạng thái đơn hàng thành công.');
    }


}
