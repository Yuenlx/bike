<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TopicRequest;
use Auth;
use App\Handlers\ImageUploadHandler;

class TopicsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index(Request $request, Topic $topic)
	{
	    // 默认不写数字是每页 15 条记录
		$topics = $topic->withOrder($request->order)->paginate(20);
		return view('topics.index', compact('topics'));
	}


	// 隐形路由模型绑定，请求...topics/1类似的时，$topic变量自动解析为ID为1的话题对象
    public function show(Request $request, Topic $topic)
    {
        // URL 矫正
        if (! empty($topic->slug) && $topic->slug != $request->slug) {
            return redirect($topic->link(), 301);
        }
        return view('topics.show', compact('topic'));
    }


    // 发布新话题
	public function create(Topic $topic)
	{
        $categories = Category::all();
		return view('topics.create_and_edit', compact('topic', 'categories'));
	}


	// 话题保存 第二个参数会创建一个空白的$topic实例
	public function store(TopicRequest $request, Topic $topic)
	{
	    $topic->fill($request->all());
	    $topic->user_id = Auth::id();
	    $topic->save();

		return redirect()->route('topics.show', $topic->id)->with('message', '话题发布成功！');
	}

	public function edit(Topic $topic)
	{
	    $this->authorize('update', $topic);
	    $categories = Category::all();
        $this->authorize('update', $topic);
		return view('topics.create_and_edit', compact('topic', 'categories'));
	}

	public function update(TopicRequest $request, Topic $topic)
	{
		$this->authorize('update', $topic);
		$topic->update($request->all());

		//return redirect()->route('topics.show', $topic->id)->with('message', '话题修改成功！');
        return redirect()->to($topic->link())->with('message', '话题修改成功！');
	}

	public function destroy(Topic $topic)
	{
		$this->authorize('destroy', $topic);
		$topic->delete();

		return redirect()->route('topics.index')->with('message', '话题删除成功！');
	}

	// 处理发布新话题页，内容里添加了图片的处理
	public function uploadImage(Request $request, ImageUploadHandler $uploader)
    {
        // 初始化返回数据，默认是失败的。在LA中返回数组会自动解析为JSON的。
        $data = [
            'success'   => false,
            'msg'       => '上传失败！',
            'file_path' => ''
        ];

        // 判断是否有上传文件，并赋值给 $file
        if ($file = $request->upload_file) {
            // 保存图片到服务器本地
            $result = $uploader->save($request->upload_file, 'topics', Auth::id(), 1024);
            // 图片保存成功的话
            if ($result) {
                $data['success'] = true;
                $data['msg'] = '上传成功！';
                $data['file_path'] = $result['path'];
            }
        }

        return $data;
    }
}