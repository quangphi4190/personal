<?php

namespace App\Repositories\Eloquents;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\ContactRepository;
use App\Contact;
use App\Validators\ContactValidator;

/**
 * Class ContactRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquents;
 */
class ContactRepositoryEloquent extends BaseRepository implements ContactRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Contact::class;
    }
    public function listContact()
    {
        $userRegis = $this->model()::where('status','<>',3)->orderBy('created_at','desc');
        return \DataTables::eloquent($userRegis)
            ->editColumn('created_at', '{!! formatDateENToVN($created_at) !!}')
            ->editColumn('status', '{!! statusRegisExam($status) !!}')
            ->addColumn('action', function ($userRegis) {
                $token = csrf_token();
                $is_status = $userRegis->status == 2 ? 'on' : 'off';
                $title = $userRegis->status == 1 ? 'Chưa liên hệ ' : 'Đã liên hệ';

                return '
                <div class="btn-action" data-status="'.$is_status.'">   
                     <a class="pd-r10 cursor" onclick="changeStatusUserRegis(this)" title="'.$title.'" ><i class="fa fa-toggle-'.$is_status.'"></i>
                        <form method="POST" action="' . route('contacts.changeStatusRegis', $userRegis->id) . '">
                         <input type="hidden" name="_method" value="PUT">
                         <input type="hidden" name="_token" value="'.$token.'">
                        </form>                        
                     </a>
                    <a class="cursor" onclick="deleteUserRegis(this)" title="Xóa thông tin gửi liên hệ"><i class="fa fa-trash-o"></i>
                        <form method="POST" action="' . route('contacts.deleteUserRegis', $userRegis->id) . '">
                         <input type="hidden" name="_method" value="DELETE">
                         <input type="hidden" name="_token" value="'.$token.'">
                        </form>
                    </a>   
                </div>';

            })
            ->rawColumns(['action','status','created_at'])
            ->toJson();
    }
    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ContactValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
