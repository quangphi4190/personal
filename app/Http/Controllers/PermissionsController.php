<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\PermissionCreateRequest;
use App\Http\Requests\PermissionUpdateRequest;
use App\Repositories\Contracts\PermissionRepository;
use App\Validators\PermissionValidator;
/**
 * Class PermissionsController.
 *
 * @package namespace App\Http\Controllers;
 */
class PermissionsController extends Controller
{
    /**
     * @var PermissionRepository
     */
    protected $repository;

    /**
     * @var PermissionValidator
     */
    protected $validator;

    /**
     * PermissionsController constructor.
     *
     * @param PermissionRepository $repository
     * @param PermissionValidator $validator
     */
    public function __construct(PermissionRepository $repository, PermissionValidator $validator)
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

            return $this->repository->permissionList();
        }

        $pageTitle ='Phân quyền';
        $breadcrumb = 'Danh sách';
        
        return view('permissions.index', compact('pageTitle', 'breadcrumb'));
    }

    public function create(){

        $pageTitle = 'Phân quyền';
        $breadcrumb = 'Thêm mới';

        $method_list = array('GET', 'POST', 'PUT', 'DELETE', 'PATCH', 'OPTIONS', 'HEAD');

        return view('permissions.create',compact('pageTitle', 'breadcrumb', 'method_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PermissionCreateRequest $request
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

            $data['method'] = isset($data['method']) && $data['method'] ? $data['method'] : [];

            $data['method'] = json_encode($data['method']);

            $permission = $this->repository->create($data);

            $response = [
                'message' => 'Tạo quyền thành công!',
                'data'    => $permission->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('permissions')->with('message', $response['message']);
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
        $permission = $this->repository->find($id);
        $methods = json_decode($permission->method);

        $pageTitle = 'Phân quyền';
        $breadcrumb = 'Xem';

        $method_list = array('GET', 'POST', 'PUT', 'DELETE', 'PATCH', 'OPTIONS', 'HEAD');

        return view('permissions.show', compact('permission', 'pageTitle', 'breadcrumb', 'methods', 'method_list'));
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
        $permission = $this->repository->find($id);
        $methods = json_decode($permission->method);

        $pageTitle = 'Phân quyền';
        $breadcrumb = 'Chỉnh sửa';

        $method_list = array('GET', 'POST', 'PUT', 'DELETE', 'PATCH', 'OPTIONS', 'HEAD');

        return view('permissions.edit', compact('permission', 'pageTitle', 'breadcrumb', 'methods', 'method_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PermissionUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|unique:permissions,name,'.$id,
                'key' => 'required|unique:permissions,key,'.$id,
            ]);
            $data = $request->all();

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $data['method'] = isset($data['method']) && $data['method'] ? $data['method'] : [];
            $data['method'] = json_encode($data['method']);

            $permission = $this->repository->update($data, $id);

            $response = [
                'message' => 'Cập nhật quyền thành công!',
                'data'    => $permission->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('permissions')->with('message', $response['message']);
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
                'message' => 'Permission deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Xóa quyền thành công!');
    }
}
