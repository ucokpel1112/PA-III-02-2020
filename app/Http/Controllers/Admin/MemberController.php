<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Komunitas;
use App\Mail\DitolakEmail;
use App\User;
use Mail;
use App\Mail\TerkonfirmasiEmail;
use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = [];
        $member = $this->defineMember(null, 1);
        $req = $this->defineMember(null, 0);

        $komunitas = Komunitas::all();
        $status = 1;
        $status_req = 0;

//        return $req;
        return view('admin.anggotacbt.member', compact('req', 'status_req', 'member', 'komunitas', 'status'));
    }

    public function defineMember($id_komut, $status)
    {
        $member = [];
        $members = Member::all();
        if ($id_komut === null || $id_komut == 'semua') {
            if (($status === null || $status === 'semua') && ($status != '0')) {
                foreach ($members as $row) {
                    if (($row->getUser->register_status == 1) || ($row->getUser->register_status == 2))
                        array_push($member, $row);
                }
            } else {
                foreach ($members as $row) {
                    if ($row->getUser->register_status == $status) {
                        array_push($member, $row);
                    }
                }
            }
        } else {
            if (($status === null || $status === 'semua') && ($status != '0')) {
                foreach ($members as $row) {
                    $s = 0;
                    foreach ($row->getKomunitasMember as $rows) {
                        if ($rows->id == $id_komut) {
                            $s = 1;
                        }
                    }
                    if ($s == 1) {
                        if (($row->getUser->register_status == 1) || ($row->getUser->register_status == 2))
                            array_push($member, $row);
                    }
                }
            } else {
                foreach ($members as $row) {
                    if ($row->getUser->register_status == $status) {
                        $s = 0;
                        foreach ($row->getKomunitasMember as $rows) {
                            if ($rows->id == $id_komut) {
                                $s = 1;
                            }
                        }
                        if ($s == 1) {
                            array_push($member, $row);
                        }
                    }
                }
            }
        }

        return $member;
    }

    public function defineMemberR($id_komut, $status)
    {
        $member = [];
        $members = Member::all();
        if ($id_komut === null || $id_komut == 'semua') {
            if (($status === null || $status === 'semua') && ($status != '0')) {
//                echo $status.' ';
                foreach ($members as $row) {
                    if (($row->getUser->register_status == 0) || ($row->getUser->register_status == 4))
                        array_push($member, $row);
                }
            } else {
                foreach ($members as $row) {
                    if ($row->getUser->register_status == $status) {
                        array_push($member, $row);
                    }
                }
            }
        } else {
            if (($status === null || $status == 'semua') && ($status != '0')) {
                foreach ($members as $row) {
                    $s = 0;
                    foreach ($row->getKomunitasMember as $rows) {
                        if ($rows->id == $id_komut) {
                            $s = 1;
                        }
                    }
                    if ($s == 1) {
                        if (($row->getUser->register_status == 1) || ($row->getUser->register_status == 2))
                            array_push($member, $row);
                    }
                }
            } else {
                foreach ($members as $row) {
                    if ($row->getUser->register_status == $status) {
                        $s = 0;
                        foreach ($row->getKomunitasMember as $rows) {
                            if ($rows->id == $id_komut) {
                                $s = 1;
                            }
                        }
                        if ($s == 1) {
                            array_push($member, $row);
                        }
                    }
                }
            }
        }

        return $member;
    }

    public function indexFilterM(Request $request)
    {
        $id_komut = $request->komunitas;
        $status = $request->status;
        $member = $this->defineMember($id_komut, $status);
        $req = $this->defineMember(null, 0);

        $komunitas = Komunitas::all();
        $status_req = 0;
//        return $member;
        return view('admin.anggotacbt.member', compact('req', 'status_req', 'member', 'komunitas', 'id_komut', 'status'));
    }

    public function indexFilterR(Request $request)
    {
        $id_komut_req = $request->komunitas_r;
        $status_req = $request->status_r;
        $member = $this->defineMemberR(null, 1);
        $req = $this->defineMemberR($id_komut_req, $status_req);

        $komunitas = Komunitas::all();
        $status = 1;
//        return $status_req;
        return view('admin.anggotacbt.member', compact('req', 'status_req', 'member', 'komunitas', 'id_komut_req', 'status'));
    }

    public function terima($id_member){
        $member = Member::find($id_member);
        $member->getUser->email_verified_at=now();
        $member->getUser->register_status = 1;
        $member->getUser->token= NULL;
        $member->getUser->save();
        $user = User::find($member->getUser->id);

        Mail::to($member->getUser['email'])->send(new TerkonfirmasiEmail());

        return redirect(route('member.request'));
    }

    public function tolak($id_member){
        $member = Member::find($id_member);
        $member->getUser->email_verified_at=now();
        $member->getUser->register_status = 4;
        $member->getUser->token= NULL;
        $member->getUser->save();
        $user = User::find($member->getUser->id);

        Mail::to($member->getUser['email'])->send(new DitolakEmail());

        return redirect(route('member.request'));
    }

    public function hapus($id_member){
        $member = Member::find($id_member);
        $id_user = $member->user_id;
        $member->delete();
        $user = User::find($id_user)->delete();

        return redirect(route('member.request'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_member)
    {
        $member = Member::find($id_member);
        return view('admin.anggotacbt.detail_member',compact('member'));
    }

    public function showRequest($id_member)
    {
        $member = Member::find($id_member);
        return view('admin.anggotacbt.detail_request',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

}
