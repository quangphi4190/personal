<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\NewImage;
use Illuminate\Http\Request;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\NetworkCreateRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Repositories\Contracts\NewsRepository;
use App\Validators\NewsValidator;
use Illuminate\Support\Str;
use App\Category;
use  App\News;
use Illuminate\Support\Facades\Session;
use App\Repositories\Contracts\UserRepository;
use Illuminate\Support\Facades\File;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * @var UserRepository
     */
    protected $userRepository;
 /**
     * @var NewsRepository
     */
    protected $repository;

    /**
     * @var NewsValidator
     */
    protected $validator;

    /**
     * ServicesController constructor.
     *
     * @param NewsRepository $repository
     * @param NewsValidator $validator
     */
    public function __construct(NewsRepository $repository, NewsValidator $validator,UserRepository $userRepository)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
        $this->userRepository  = $userRepository;
    }

    public function index()
    {


        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));

            if (request()->wantsJson()) {

                return $this->repository->newsList();
            }



        $pageTitle = 'Danh sách';
        $breadcrumb = 'Tin đăng';
        $createNew = 'Thêm mới tin';
        return view('news.index', compact('pageTitle', 'breadcrumb','createNew'));
    }
    public function qlynoidung()
    {

        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));

        if (request()->wantsJson()) {

            return $this->repository->qlynoidung();
        }



        $pageTitle = 'Danh sách';
        $breadcrumb = 'Giới thiệu';
        return view('news.noi-dung', compact('pageTitle', 'breadcrumb'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = 'Thêm mới';
        $breadcrumb = 'Tin đăng';

        $categories = Category::select('name', 'id')->get();

        return view('news.create', compact('pageTitle', 'breadcrumb', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $data = $request->all();
            $images = $request->file('image');
            if ($request->hasFile('image')) :
                foreach ($images as $item):
                    $var = date_create();
                    $time = date_format($var, 'YmdHis');
                    $imageName = $time . '-' . $item->getClientOriginalName();
                    $item->move(base_path() . '/public/uploads/files/', $imageName);
                    $arr[] = $imageName;
                endforeach;
                $image = implode(",", $arr);
            else:
                $image = '';
            endif;

            $slug = Str::slug($data['name'], '-');
            $data['slug'] = $slug;
            $data['image'] = imageSplitLfm($data['cover']);
            $data['feature'] = isset($data['feature']) && $data['feature'] == 'on' ? 1 : 0;

            $files = explode(",", $image);
            $new = $this->repository->create($data);
            foreach ($files as $f){
                $newImage = new NewImage();
                $newImage->image = $f;
                $newImage->news_id = $new->id;
                $newImage->save();
            }

            $response = [
                'message' => 'Thêm mới tin thành công!',
                'data'    => $new->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect('news')->with('message', $response['message']);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $new= $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $new,
            ]);
        }

        return view('news.show', compact('new'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = $this->repository->find($id);

        $pageTitle = 'Tin tức';
        $breadcrumb = 'Chỉnh sửa';
        $categories = Category::select('name', 'id')->get();

        return view('news.edit', compact('new', 'breadcrumb', 'pageTitle', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {

            $data = $request->all();
            if($request->hasFile("image")){
                $files=$request->file("image");

                foreach($files as $file){
                    $imageName=time().'_'.$file->getClientOriginalName();
                    $newImage = new NewImage();
                    $newImage->image = $imageName;
                    $newImage->news_id = $id;
                    $newImage->save();

                    $file->move(base_path() . '/public/uploads/files/',$imageName);


                }
            }
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_UPDATE);
            $data['slug'] = Str::slug($data['name'], '-');
            $data['image'] = imageSplitLfm($data['cover']);
            $data['feature'] = isset($data['feature']) && $data['feature'] == 'on' ? 1 : 0;

            $new = $this->repository->update($data, $id);

            $response = [
                'message' => 'Chỉnh sửa tin thành công.',
                'data'    => $new->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }
            if($data['category_id'] == 1 || $data['category_id'] == 16 || $data['category_id'] == 19){
                return redirect(url('qly-noi-dung'))->with('message', $response['message']);
            }
            return redirect('news')->with('message', $response['message']);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Xóa tin thành công.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Xóa tin thành công.');
    }
    public function deleteimage($id){
        $images=NewImage::findOrFail($id);
        if (File::exists("images/".$images->image)) {
            File::delete("images/".$images->image);
        }

        NewImage::find($id)->delete();
        return back();
    }
}
