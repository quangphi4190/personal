<?php

namespace App\Http\Controllers;

use App\Role;
use App\Permission;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\RoleCreateRequest;
use App\Http\Requests\RoleUpdateRequest;
use App\Repositories\Contracts\RoleRepository;
use App\Validators\RoleValidator;

/**
 * Class RolesController.
 *
 * @package namespace App\Http\Controllers;
 */
class RolesController extends Controller
{
    /**
     * @var RoleRepository
     */
    protected $repository;

    /**
     * @var RoleValidator
     */
    protected $validator;

    /**
     * RolesController constructor.
     *
     * @param RoleRepository $repository
     * @param RoleValidator $validator
     */
    public function __construct(RoleRepository $repository, RoleValidator $validator)
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

            return $this->repository->roleList();
        }

        $pageTitle = 'Vai trò';
        $breadcrumb = 'Danh sách';
        
        return view('roles.index', compact('pageTitle', 'breadcrumb'));
    }
    public function create(){

        $pageTitle = 'Vai trò';
        $breadcrumb = 'Thêm mới';

        $permissions = Permission::all();

        return view('roles.create',compact('pageTitle', 'breadcrumb', 'permissions'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  RoleCreateRequest $request
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

            $role = $this->repository->create($data);

            if(isset($data['permission']) && sizeof($data['permission']) > 0){
                foreach ($data['permission'] as $key => $permission) {
                    $role->permissions()->attach($permission);
                }
            }

            $response = [
                'message' => 'Tạo vai trò '.$request->name.' thành công!',
                'data'    => $role->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('roles')->with('message', $response['message']);
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
        $role = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $role,
            ]);
        }

        return view('roles.show', compact('role'));
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
        $role = $this->repository->find($id);
        
        $permission_old = $role->permissions()->pluck('id')->toArray();

        $permissions = Permission::all();

        $pageTitle = 'Vai trò';
        $breadcrumb = 'Chỉnh sửa';

        return view('roles.edit', compact('role', 'pageTitle', 'permission_old', 'breadcrumb', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  RoleUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:roles,name,'.$id,

        ]);
        try {

            $data = $request->all();

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $this->repository->update($data, $id);

            $role = $this->repository->find($id);

            if(isset($data['permission'])) $role->permissions()->sync($data['permission']);

            $response = [
                'message' => 'Cập nhật vai trò '.$request->name.' thành công!',
                'data'    => $role->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('roles')->with('message', $response['message']);
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
                'message' => 'Role delete',
                'deleted' => $deleted,
            ]);
        }

        return redirect('roles')->with('message', 'Xóa vai trò thành công!');
    }
    /**
     * Change status.
     */
    public function changeStatus ($id){
        $role = $this->repository->find($id);
        $active = $role->active == 1 ? 0 : 1;
        $message = $role->active == 1 ? 'Ngưng kích hoạt vai trò '.$role->name.' thành công!' : 'Kích hoạt vai trò '.$role->name. ' thành công!';
        Role::where('id', $id)->update(array('active' => $active ));
        return redirect()->back()->with('message', $message);
    }


}
