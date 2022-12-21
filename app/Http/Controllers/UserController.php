<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Kloter;

class UserController extends Controller
{
    public function index()
    {
        $member = Member::orderBy('id', 'desc')->get();
        $kloter = Kloter::orderBy('id', 'desc')->get();
        $tm = Kloter::get();
        $ct = array($tm);

        return view('dashboard.index', compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',

        ]);
        $lm = json_encode($request->list_member);


        Member::create($request->post());

        return redirect()->route('members.index')->with('success', 'Member telah ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        $mem = strval($member->id);
        $kloter = Kloter::where('list_member', 'LIKE', '%' . $mem . '%')->get();
        // dd($kloter);
        return view('members.show', compact('member', 'kloter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {

        return view('members.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $member->fill($request->post())->save();

        return redirect()->route('members.index')->with('success', 'Member telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('members.index')->with('success', 'Member telah dihapus');
    }
}
