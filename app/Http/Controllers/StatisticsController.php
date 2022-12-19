<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\StatisticCreateRequest;
use App\Http\Requests\StatisticUpdateRequest;
use App\Repositories\Contracts\StatisticRepository;
use App\Validators\StatisticValidator;

/**
 * Class StatisticsController.
 *
 * @package namespace App\Http\Controllers\;
 */
class StatisticsController extends Controller
{
    /**
     * @var StatisticRepository
     */
    protected $repository;

    /**
     * @var StatisticValidator
     */
    protected $validator;

    /**
     * StatisticsController constructor.
     *
     * @param StatisticRepository $repository
     * @param StatisticValidator $validator
     */
    public function __construct(StatisticRepository $repository, StatisticValidator $validator)
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
        $pageTitle = 'Thống kê';
        $breadcrumb = 'Danh sách';
        $create = 'Thêm mới';
        return view('statistics.index', compact('pageTitle','breadcrumb','create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StatisticCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(Request $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $statistics = $this->repository->create($request->all());

            $response = [
                'message' => 'Statistic created.',
                'data'    => $statistics->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('statistics')->with('message', $response['message']);
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
        $statistics = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $statistics,
            ]);
        }

        return view('statistics.show', compact('statistics'));
    }
    public function create()
    {
        $pageTitle = 'Statistics';
        $breadcrumb = 'Thêm mới';
        return view('statistics.create', compact('pageTitle', 'breadcrumb'));
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
        $statistic = $this->repository->find($id);
        $pageTitle = 'Thống kê';
        $breadcrumb = 'Chỉnh sửa';
        return view('statistics.edit', compact('statistic','pageTitle','breadcrumb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StatisticUpdateRequest $request
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

            $statistics = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Statistic updated.',
                'data'    => $statistics->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('statistics')->with('message', $response['message']);
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
                'message' => 'Statistic deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Statistic deleted.');
    }
}
