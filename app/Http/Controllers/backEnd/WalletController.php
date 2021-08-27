<?php

namespace App\Http\Controllers\backEnd;

use App\Wallet;
use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class WalletController extends Controller
{
    public function index()
    {
        return view('backEnd.Wallet.index');
    }
    public function ssd()
    {
        $data = Wallet::with('user');
        return Datatables::of($data)
            ->addColumn('account_person', function ($each) {

                $user = $each->user;
                if ($user) {
                    return '<p>Name :' . $user->name . ' </p><p>mail:' . $user->email . ' </p><p>Phone :' . $user->phone . ' </p>';
                }
            })
            ->editColumn('created_at', function ($each) {
                return Carbon::parse($each->created_at)->format('Y-m-d H:i:s');
            })
            ->editColumn('updated_at', function ($each) {
                return Carbon::parse($each->updated_at)->format('Y-m-d H:i:s');
            })
            ->editColumn('amount', function ($each) {
                return number_format($each->amount, 2);
            })
            ->rawColumns(['account_person'])
            ->make(true);
    }
}
