<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\BannerCreateRequest;
use App\Http\Requests\BannerUpdateRequest;
use App\Repositories\Contracts\BannerRepository;
use App\Validators\BannerValidator;

/**
 * Class BannersController.
 *
 * @package namespace App\Http\Controllers;
 */
class BannersController extends Controller
{
    /**
     * @var BannerRepository
     */
    protected $repository;

    /**
     * @var BannerValidator
     */
    protected $validator;

    /**
     * BannersController constructor.
     *
     * @param BannerRepository $repository
     * @param BannerValidator $validator
     */
    public function __construct(BannerRepository $repository, BannerValidator $validator)
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
        $banners = $this->repository->all();

        if (request()->wantsJson()) {

            return $this->repository->bannersList();
        }
        $pageTitle = 'Danh sách';
        $breadcrumb = 'Banners';
        $create = 'Thêm mới';
        return view('banners.index', compact('banners','pageTitle','breadcrumb','create'));
    }
    public function create()
    {
        $pageTitle = 'Banners';
        $breadcrumb = 'Thêm mới';
        return view('banners.create', compact('pageTitle', 'breadcrumb'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BannerCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);
            $data['image'] = imageSplitLfm($data['image']);
            $banner = $this->repository->create($data);

            $response = [
                'message' => 'Thêm mới Banner thành công.',
                'data'    => $banner->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('banners')->with('message', $response['message']);
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
        $banner = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $banner,
            ]);
        }

        return view('banners.show', compact('banner'));
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
        $banner = $this->repository->find($id);
        $pageTitle = 'Banners';
        $breadcrumb = 'Chỉnh sửa';
        return view('banners.edit', compact('banner','pageTitle','breadcrumb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BannerUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();
            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);
            $data['image'] = imageSplitLfm($data['image']);
            $banner = $this->repository->update($data, $id);

            $response = [
                'message' => 'Cập nhật Banner thành công.',
                'data'    => $banner->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('banners')->with('message', $response['message']);
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
                'message' => 'Xóa banner thành công',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Xóa banner thành công');
    }
}
