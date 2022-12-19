<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\PhotoCreateRequest;
use App\Http\Requests\PhotoUpdateRequest;
use App\Repositories\Contracts\PhotoRepository;
use App\Validators\PhotoValidator;
class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * @var PhotoRepository
     */
    protected $repository;

    /**
     * @var PhotoValidator
     */
    protected $validator;
    /**
     * ServicesController constructor.
     *
     * @param PhotoRepository $repository
     * @param PhotoValidator $validator
     */
    public function __construct(PhotoRepository $repository, PhotoValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));

        if (request()->wantsJson()) {

            return $this->repository->photosList();
        }

        $pageTitle = 'Danh sách';
        $breadcrumb = 'Hình ảnh hoạt động';
        $create = 'Thêm mới';

        return view('photo.index', compact('pageTitle', 'breadcrumb','create'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = 'Hình ảnh hoạt động';
        $breadcrumb = 'Thêm mới';
        return view('photo.create', compact('pageTitle', 'breadcrumb'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);
            $data['image'] = imageSplitLfm($data['image']);
            $data['feature'] = isset($data['feature']) && $data['feature'] == 'on' ? 1 : 0;
            $photo = $this->repository->create($data);

            $response = [
                'message' => 'Thêm mới thành công!',
                'data'    => $photo->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('photo')->with('message', $response['message']);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $photo,
            ]);
        }

        return view('photo.show', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo = $this->repository->find($id);

        $pageTitle = 'Hình ảnh hoạt động';
        $breadcrumb = 'Chỉnh sửa';
        return view('photo.edit', compact('pageTitle', 'breadcrumb','photo'));
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
        try {
            $data = $request->all();
            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);
            $data['image'] = imageSplitLfm($data['image']);
            $data['feature'] = isset($data['feature']) && $data['feature'] == 'on' ? 1 : 0;
            $photo = $this->repository->update($data,$id);

            $response = [
                'message' => 'Cập nhật thành công!',
                'data'    => $photo->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('photo')->with('message', $response['message']);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Xóa thành công',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Xóa thành công!');
    }
}
