<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use \Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();
//        dd($supports);

        return view('admin.supports.index', compact('supports'));
    }

    public function create()
    {
        return view('admin.supports.create');
    }

    public function show(string|int $id)
    {
        //Support::where('id', $id)->first();
        if(!$support = Support::find($id)) {
            return back();
        }
        return view('admin.supports.show', compact('support'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['status'] = 'Ativo';

        $support = Support::create($data);

        return redirect()->route('supports.index');
    }
}

