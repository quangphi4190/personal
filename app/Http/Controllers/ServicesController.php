<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ServiceCreateRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Repositories\Contracts\ServiceRepository;
use App\Validators\ServiceValidator;

/**
 * Class ServicesController.
 *
 * @package namespace App\Http\Controllers\;
 */
class ServicesController extends Controller
{
    /**
     * @var ServiceRepository
     */
    protected $repository;

    /**
     * @var ServiceValidator
     */
    protected $validator;

    /**
     * ServicesController constructor.
     *
     * @param ServiceRepository $repository
     * @param ServiceValidator $validator
     */
    public function __construct(ServiceRepository $repository, ServiceValidator $validator)
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
        $services = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $services,
            ]);
        }

        return view('services.index', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ServiceCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(ServiceCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $services = $this->repository->create($request->all());

            $response = [
                'message' => 'Service created.',
                'data'    => $services->toArray(),
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
        $services = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $services,
            ]);
        }

        return view('services.show', compact('services'));
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
        $services = $this->repository->find($id);

        return view('services.edit', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ServiceUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(ServiceUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $services = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Service updated.',
                'data'    => $services->toArray(),
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
                'message' => 'Service deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Service deleted.');
    }
}
