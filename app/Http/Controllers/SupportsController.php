<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\SupportsCreateRequest;
use App\Http\Requests\SupportsUpdateRequest;
use App\Repositories\Contracts\SupportsRepository;
use App\Validators\SupportsValidator;

/**
 * Class SupportsController.
 *
 * @package namespace App\Http\Controllers\;
 */
class SupportsController extends Controller
{
    /**
     * @var SupportsRepository
     */
    protected $repository;

    /**
     * @var SupportsValidator
     */
    protected $validator;

    /**
     * SupportsController constructor.
     *
     * @param SupportsRepository $repository
     * @param SupportsValidator $validator
     */
    public function __construct(SupportsRepository $repository, SupportsValidator $validator)
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
        if (request()->wantsJson()) {

            return $this->repository->list();
        }
        $pageTitle = 'Thành phần hệ thống';
        $breadcrumb = 'Danh sách';
        $create = 'Thêm mới';

        return view('supports.index', compact('pageTitle','breadcrumb','create'));
    }
    public function create()
    {
        $pageTitle = 'Supports';
        $breadcrumb = 'Thêm mới';
        return view('supports.create', compact('pageTitle', 'breadcrumb'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  SupportsCreateRequest $request
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
            $supports = $this->repository->create($data);

            $response = [
                'message' => 'Supports created.',
                'data'    => $supports->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('supports')->with('message', $response['message']);
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
        $support = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $support,
            ]);
        }

        return view('supports.show', compact('supports'));
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
        $support = $this->repository->find($id);
        $pageTitle = 'Supports';
        $breadcrumb = 'Thêm mới';
        return view('supports.edit', compact('support','pageTitle','breadcrumb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SupportsUpdateRequest $request
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
            $supports = $this->repository->update($data, $id);

            $response = [
                'message' => 'Supports updated.',
                'data'    => $supports->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }
            return redirect('supports')->with('message', $response['message']);
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
                'message' => 'Supports deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Supports deleted.');
    }
}
