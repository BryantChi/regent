<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    public $table = 'requirement_infos';

    public $fillable = [
        'type',
        'identity',
        'name',
        'phone',
        'email',
        'address',
        'message'
    ];

    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'identity' => 'string',
        'name' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'address' => 'string'
    ];

    public static array $rules = [
        'type' => 'required',
        'identity' => 'required',
        'name' =>  ['required', 'string', 'regex:/^[\x{4e00}-\x{9fa5}a-zA-Z\s]{2,20}$/u'],
        'phone' =>  ['required', 'regex:/^(09\d{8}|0\d{1,2}-?\d{6,8})$/'],
        'email' => ['required', 'email'],
        'address' => ['nullable', 'string', 'max:255'],
        'message' => ['nullable', 'string', 'max:1000']
    ];

    public static array $messages = [
        'type.required' => '請選擇諮詢類型',
        'identity.required' => '請選擇您的身分別',
        'name.required' => '請輸入姓名',
        'name.string' => '姓名格式錯誤',
        'name.regex' => '姓名只能包含中英文與空白，長度需為 2～20 字元',
        'phone.required' => '請輸入聯絡電話',
        'phone.regex' => '請輸入正確的手機號碼或市話格式（如：0912345678 或 02-12345678）',
        'email.required' => '請輸入電子郵件',
        'email.email' => '電子郵件格式錯誤',
        'address.string' => '聯絡地址格式錯誤',
        'address.max' => '聯絡地址最多 255 個字元',
        'message.string' => '內容格式錯誤',
        'message.max' => '內容最多 1000 個字元'
    ];
}
