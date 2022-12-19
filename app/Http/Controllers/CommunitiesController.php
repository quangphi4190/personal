<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\CommunityCreateRequest;
use App\Http\Requests\CommunityUpdateRequest;
use App\Repositories\Contracts\CommunityRepository;
use App\Validators\CommunityValidator;

/**
 * Class CommunitiesController.
 *
 * @package namespace App\Http\Controllers\;
 */
class CommunitiesController extends Controller
{
    /**
     * @var CommunityRepository
     */
    protected $repository;

    /**
     * @var CommunityValidator
     */
    protected $validator;

    /**
     * CommunitiesController constructor.
     *
     * @param CommunityRepository $repository
     * @param CommunityValidator $validator
     */
    public function __construct(CommunityRepository $repository, CommunityValidator $validator)
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
        $communities = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $communities,
            ]);
        }

        return view('communities.index', compact('communities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CommunityCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CommunityCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $communities = $this->repository->create($request->all());

            $response = [
                'message' => 'Community created.',
                'data'    => $communities->toArray(),
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
        $communities = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $communities,
            ]);
        }

        return view('communities.show', compact('communities'));
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
        $communities = $this->repository->find($id);

        return view('communities.edit', compact('communities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CommunityUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(CommunityUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $communities = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Community updated.',
                'data'    => $communities->toArray(),
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
                'message' => 'Community deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Community deleted.');
    }
}
