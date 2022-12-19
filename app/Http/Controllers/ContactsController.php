<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Content;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ContactCreateRequest;
use App\Http\Requests\ContactUpdateRequest;
use App\Repositories\Contracts\ContactRepository;
use App\Validators\ContactValidator;

/**
 * Class ContactsController.
 *
 * @package namespace App\Http\Controllers;
 */
class ContactsController extends Controller
{
    /**
     * @var ContactRepository
     */
    protected $repository;

    /**
     * @var ContactValidator
     */
    protected $validator;

    /**
     * ContactsController constructor.
     *
     * @param ContactRepository $repository
     * @param ContactValidator $validator
     */
    public function __construct(ContactRepository $repository, ContactValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $from_date = date('01/m/Y');
        $to_date = date('d/m/Y');
        if (request()->wantsJson()) {

            return $this->repository->listContact();
        }


        $pageTitle = 'Danh sách gửi liên hệ';
        $breadcrumb = 'Danh sách';

        return view('contacts.index',compact('pageTitle','breadcrumb','from_date','to_date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ContactCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(ContactCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $contact = $this->repository->create($request->all());

            $response = [
                'message' => 'Contact created.',
                'data'    => $contact->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $contact,
            ]);
        }

        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = $this->repository->find($id);

        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ContactUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(ContactUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $contact = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Contact updated.',
                'data'    => $contact->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Contact deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Contact deleted.');
    }
    public function deleteUserRegis($id)
    {
//        status = / đã xóa
        Contact::where('id', $id)->update(array('status' =>3 ));
        return redirect('danh-sach-gui-lien-he')->with('message', 'Xóa người dùng gửi liên hệ thành công');
    }
    public function changeStatusRegis ($id){
        $dk = Contact::where('id', $id)->first();
        $status = $dk->status == 1 ? 2 : 1;
        $message = $dk->status == 1 ? 'Đã liên hệ tư vấn với '.$dk->name.' thành công!' : 'Chưa liên hệ với '.$dk->name;
        Contact::where('id', $id)->update(array('status' =>$status ));
        return redirect('danh-sach-gui-lien-he')->with('message', $message);
    }
    public function thong_tin_trang(){
        $info =  Content::first();
        $pageTitle = 'Cập nhật thông tin';
        $breadcrumb = 'Page';
        return view('contacts.info', compact('pageTitle', 'breadcrumb','info'));
    }
    public function saveInfo(Request $request, $id)
    {

        try {
            $data = $request->all();
            /*$data['image_1'] = imageSplitLfm($data['image_1']);
            $data['image_2'] = imageSplitLfm($data['image_2']);
            $data['image_3'] = imageSplitLfm($data['image_3']);*/

            Content::where('id', $id)
                ->update(['name' => isset($data['name']) ? $data['name'] :  '',
                    'description' => $data['description'],
                    'address' => $data['address'],
                    'facebook' => isset($data['facebook']) ? $data['facebook'] :  '#',
                    'youtube' => isset($data['youtube']) ? $data['youtube'] :  '#',
                  /*  'image_1' => $data['image_1'],
                    'image_2' => $data['image_2'],
                    'image_3' => $data['image_3'],*/
                    'phone' => $data['phone'],
                    'tencongty' => $data['tencongty'],
                    'email' => $data['email'],
                    'text_contact' => $data['text_contact']
                ]);


            return redirect('/thong-tin-trang')->with('message', 'Cập nhật thông tin thành công');
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }
}
