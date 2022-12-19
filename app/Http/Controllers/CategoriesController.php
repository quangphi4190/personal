<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Repositories\Contracts\CategoryRepository;
use App\Validators\CategoryValidator;
use Illuminate\Support\Str;

/**
 * Class CategoriesController.
 *
 * @package namespace App\Http\Controllers;
 */
class CategoriesController extends Controller
{
    /**
     * @var CategoryRepository
     */
    protected $repository;

    /**
     * @var CategoryValidator
     */
    protected $validator;

    /**
     * CategoriesController constructor.
     *
     * @param CategoryRepository $repository
     * @param CategoryValidator $validator
     */
    public function __construct(CategoryRepository $repository, CategoryValidator $validator)
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

            return $this->repository->categoryList();
        }

        $pageTitle = 'Danh mục thể loại';
        $breadcrumb = 'Danh sách';
        $createCategory = 'Thêm mới thể loại';

        return view('categories.index', compact('pageTitle', 'breadcrumb','createCategory'));
    }

    public function create()
    {
        $pageTitle = 'Danh mục thể loại';
        $breadcrumb = 'Thêm mới';

        return view('categories.create', compact('pageTitle', 'breadcrumb'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoryCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(Request $request)
    {
        try {

            $data = $request->all();

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $data['status'] = 1;
            $data['slug'] = Str::slug($data['name'], '-');
            $data['published'] = isset($data['published']) && $data['published'] == 'on' ? 1 : 0;

            $category = $this->repository->create($data);

            $response = [
                'message' => 'Tạo danh mục thể loại thành công.',
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

//            return redirect()->back()->with('message', $response['message']);
            $request->session()->flash('status', $response['message']);
            return redirect('categories');

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
        $category = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $category,
            ]);
        }

        return view('categories.show', compact('category'));
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
        $category = $this->repository->find($id);

        $pageTitle = 'Danh mục thể loại';
        $breadcrumb = 'chỉnh sửa';

        return view('categories.edit', compact('category', 'pageTitle', 'breadcrumb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CategoryUpdateRequest $request
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

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $data['status'] = 1;
/*            $data['slug'] = Str::slug($data['name'], '-');*/
            $data['published'] = isset($data['published']) && $data['published'] == 'on' ? 1 : 0;

            $category = $this->repository->update($data, $id);

            $response = [
                'message' => 'Chỉnh sửa danh mục thể loại thành công.',
                'data'    => $category->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

//            return redirect()->back()->with('message', $response['message']);
            $request->session()->flash('status', $response['message']);
            return redirect('categories');
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
                'message' => 'Xóa danh mục thể loại thành công.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Xóa danh mục thể loại thành công.');
    }
    public function changeStatus ($id){
        $category = $this->repository->find($id);
        $status = $category->status == 0 ? 1 : 0;
        $message = $category->status == 0 ? 'Ngưng kích hoạt danh mục '.$category->name.' thành công!' : 'Kích hoạt danh mục '.$category->name. ' thành công!';
        Category::where('id', $id)->update(array('status' =>$status ));

        return redirect()->back()->with('message', $message);
    }
}
