<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Solution;
use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\SolutionCreateRequest;
use App\Http\Requests\SolutionUpdateRequest;
use App\Repositories\Contracts\SolutionRepository;
use App\Validators\SolutionValidator;

/**
 * Class SolutionsController.
 *
 * @package namespace App\Http\Controllers\;
 */
class SolutionsController extends Controller
{
    /**
     * @var SolutionRepository
     */
    protected $repository;

    /**
     * @var SolutionValidator
     */
    protected $validator;

    /**
     * SolutionsController constructor.
     *
     * @param SolutionRepository $repository
     * @param SolutionValidator $validator
     */
    public function __construct(SolutionRepository $repository, SolutionValidator $validator)
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
        $pageTitle = 'Giải pháp';
        $breadcrumb = 'Danh sách';
        $create = 'Thêm mới';
        return view('solutions.index', compact('pageTitle','breadcrumb','create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SolutionCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(Request $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $solutions = $this->repository->create($request->all());

            $response = [
                'message' => 'Solution created.',
                'data'    => $solutions->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }
            return redirect('solutions')->with('message', $response['message']);

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
    public function create()
    {
        $pageTitle = 'Solutions';
        $breadcrumb = 'Thêm mới';
        return view('solutions.create', compact('pageTitle', 'breadcrumb'));
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
        $solutions = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $solutions,
            ]);
        }

        return view('solutions.show', compact('solutions'));
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
        $solution = $this->repository->find($id);
        $pageTitle = 'Thống kê';
        $breadcrumb = 'Chỉnh sửa';
        return view('solutions.edit', compact('solution','pageTitle','breadcrumb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SolutionUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(Request $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $solutions = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Solution updated.',
                'data'    => $solutions->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('solutions')->with('message', $response['message']);

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
                'message' => 'Solution deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Solution deleted.');
    }
}
