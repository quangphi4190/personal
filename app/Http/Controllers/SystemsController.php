<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\SystemCreateRequest;
use App\Http\Requests\SystemUpdateRequest;
use App\Repositories\Contracts\SystemRepository;
use App\Validators\SystemValidator;
use App\Config;

/**
 * Class SystemsController.
 *
 * @package namespace App\Http\Controllers\;
 */
class SystemsController extends Controller
{
    /**
     * @var SystemRepository
     */
    protected $repository;

    /**
     * @var SystemValidator
     */
    protected $validator;

    /**
     * SystemsController constructor.
     *
     * @param SystemRepository $repository
     * @param SystemValidator $validator
     */
    public function __construct(SystemRepository $repository, SystemValidator $validator)
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
        return view('systems.index', compact('pageTitle','breadcrumb','create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SystemCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(Request $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $systems = $this->repository->create($request->all());

            $response = [
                'message' => 'System created.',
                'data'    => $systems->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('systems')->with('message', $response['message']);
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
        $pageTitle = 'Systems';
        $breadcrumb = 'Thêm mới';
        return view('systems.create', compact('pageTitle', 'breadcrumb'));
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
        $systems = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $systems,
            ]);
        }

        return view('systems.show', compact('systems'));
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
        $system = $this->repository->find($id);
        $pageTitle = 'Systems';
        $breadcrumb = 'Chỉnh sửa';
        return view('systems.edit', compact('system','breadcrumb','pageTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SystemUpdateRequest $request
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

            $systems = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'System updated.',
                'data'    => $systems->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }
            return redirect('systems')->with('message', $response['message']);
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
                'message' => 'System deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'System deleted.');
    }

    public function setting(){
        $configs =  Config::all();
        $pageTitle = 'Cập nhật thông tin';
        $breadcrumb = 'Page';
        return view('systems.info', compact('pageTitle', 'breadcrumb','configs'));
    }
    public function save_config(Request $request, $id)
    {

        try {
            $data = $request->all();
            /*$data['image_1'] = imageSplitLfm($data['image_1']);
            $data['image_2'] = imageSplitLfm($data['image_2']);
            $data['image_3'] = imageSplitLfm($data['image_3']);*/

            Content::where('id', $id)
                ->update(['name' => $data['name'],
                    'description' => $data['description'],
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
