<?php

namespace App\Http\Controllers\;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\CategoryProductCreateRequest;
use App\Http\Requests\CategoryProductUpdateRequest;
use App\Repositories\Contracts\CategoryProductRepository;
use App\Validators\CategoryProductValidator;

/**
 * Class CategoryProductsController.
 *
 * @package namespace App\Http\Controllers\;
 */
class CategoryProductsController extends Controller
{
    /**
     * @var CategoryProductRepository
     */
    protected $repository;

    /**
     * @var CategoryProductValidator
     */
    protected $validator;

    /**
     * CategoryProductsController constructor.
     *
     * @param CategoryProductRepository $repository
     * @param CategoryProductValidator $validator
     */
    public function __construct(CategoryProductRepository $repository, CategoryProductValidator $validator)
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
        $categoryProducts = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $categoryProducts,
            ]);
        }

        return view('categoryProducts.index', compact('categoryProducts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoryProductCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CategoryProductCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $categoryProducts = $this->repository->create($request->all());

            $response = [
                'message' => 'CategoryProduct created.',
                'data'    => $categoryProducts->toArray(),
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
        $categoryProducts = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $categoryProducts,
            ]);
        }

        return view('categoryProducts.show', compact('categoryProducts'));
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
        $categoryProducts = $this->repository->find($id);

        return view('categoryProducts.edit', compact('categoryProducts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CategoryProductUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(CategoryProductUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $categoryProducts = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'CategoryProduct updated.',
                'data'    => $categoryProducts->toArray(),
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
                'message' => 'CategoryProduct deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'CategoryProduct deleted.');
    }
}
