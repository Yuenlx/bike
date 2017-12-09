<?php
/**
 * Created by PhpStorm.
 * User: swift
 * Date: 17/12/6
 * Time: 下午1:33
 */
namespace App\Handlers;
class ImageUploadHandler
{
    // 应用允许上传的图片文件后缀名
    protected $allowed_ext = ['png', 'jpg', 'gif', 'jpeg'];

    // 保存图片到
    public function save($file, $folder, $file_prefix)
    {
        // 构建存储的文件夹规则，值如：uploads/images/avatars/201712/06/
        // 文件夹切割能让查找效率更高
        $folder_name = "uploads/images/$folder/" . date('Ym', time()) . date('d', time()) . '/';

        // 文件具体存储的物理路径(服务器上绝对地址)
        // 虚拟机上，举例是 /home/vagrant/code/public/uploads/images/avatars/201712/06/
        $upload_path = public_path() . '/' . $folder_name;

        // 获取文件的后缀名，因图片从剪切板里粘贴时后缀名为空，所以此处确保后缀名一直在
        $extension = strtolower($file->getClientOriginalExtension()) ? : 'png';

        // 拼接文件名，加前缀是为了增加辨析度，前缀可以是相关数据模型的 ID
        // 值如：1_1493521050_7BVc9v9ujP.png
        $filename = $file_prefix . '_' . time() . '_' . str_random(10) . '.' . $extension;

        // 如果上传的不是图片将终止操作
        if(!in_array($extension, $this->allowed_ext)){
            return false;
        }

        $file->move($upload_path, $filename);

        return [
            'path' => config('app.url') . "/$folder_name$filename"
        ];
    }


}