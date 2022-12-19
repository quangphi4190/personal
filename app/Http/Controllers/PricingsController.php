<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\PricingCreateRequest;
use App\Http\Requests\PricingUpdateRequest;
use App\Repositories\Contracts\PricingRepository;
use App\Validators\PricingValidator;

/**
 * Class PricingsController.
 *
 * @package namespace App\Http\Controllers\;
 */
class PricingsController extends Controller
{
    /**
     * @var PricingRepository
     */
    protected $repository;

    /**
     * @var PricingValidator
     */
    protected $validator;

    /**
     * PricingsController constructor.
     *
     * @param PricingRepository $repository
     * @param PricingValidator $validator
     */
    public function __construct(PricingRepository $repository, PricingValidator $validator)
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
        $pricings = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $pricings,
            ]);
        }

        return view('pricings.index', compact('pricings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PricingCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(PricingCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $pricings = $this->repository->create($request->all());

            $response = [
                'message' => 'Pricing created.',
                'data'    => $pricings->toArray(),
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
        $pricings = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $pricings,
            ]);
        }

        return view('pricings.show', compact('pricings'));
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
        $pricings = $this->repository->find($id);

        return view('pricings.edit', compact('pricings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PricingUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(PricingUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $pricings = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Pricing updated.',
                'data'    => $pricings->toArray(),
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
                'message' => 'Pricing deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Pricing deleted.');
    }
}
