<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
グローバル変数を定義
global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body {font-size: 16px; color: #999; }
h1 {font-size: 100px; text-align: right; color: #eee;
    margin: -40px 0 -50px 0; }
</style>
EOF;
$body = '</head><body>';
$end = '</body></html>';
// 関数
function tag($tag, $txt) {
    return "<{$tag}>" . $txt . "</{$tag}>";
}
class HelloController extends Controller
{
    // public function index($id='noname', $pass='unknown') {
    //     return <<<EOF
    //     <html>
    //     <head>
    //     <title>Hello/Index</title>
    //     <style>
    //     body {font-size: 20px; color: #999; }
    //     h1 {font-size: 100px; text-align: right; color: #eee;
    //         margin: 140px 30 150px 0; }
    //     </style>
    //     </head>
    //     <body>
    //         <h1>Index</h1>
    //         <p>これは、HelloコントローラのIndexアクションです。</p>
    //         <ul>
    //             <li>ID: {$id}</li>
    //             <li>PASS: {$pass}</li>
    //         </ul>
    //     </body>
    //     </html>
    //     EOF;
    // }
    // public function index() {
    //     global $head, $style, $body, $end;
    //     $html = $head . tag('title','Hello/Index') . $style . $body
    //          . tag('h1','Index') . tag('p','this is Index page')
    //          . '<a href="/hello/other">go to Other page</a>'
    //          . $end;
    //     return $html;
    // }
    // public function other() {
    //     global $head, $style, $body, $end;
    //     $html = $head . tag('title','Hello/Other') . $style . $body
    //          .tag('h1','Other') . tag('p','this is Other page')
    //          . $end;
    //          return $html;
    // }
    // シングルアクションコントローラ
    // public function __invoke() {
    //     return <<<EOF
    //     <html>
    //     <head>
    //     <title>Hello/Index</title>
    //     <style>
    //     body {font-size: 20px; color: #999; }
    //     h1 {font-size: 100px; text-align: right; color: #eee;
    //         margin: 140px 30 150px 0; }
    //     </style>
    //     </head>
    //     <body>
    //         <h1>Single Action</h1>
    //         <p>これは、シングルアクションコントローラのアクションです。</p>
    //     </body>
    //     </html>
    //     EOF;
    // }
    // public function index($id='zero') {
    //     $data = ['msg'=>'これはコントローラから渡されたメッセージです。',
    //              'id'=>$id
    //     ];
    //     return view('hello.index', $data);
    // }
    // public function index(Request $request) {
    //     $data = ['msg'=>'これはコントローラから渡されたメッセージです。',
    //              'id'=>$request->id
    //     ];
    //     return view('hello.index', $data);
    // }
    // public function index() {
    //     $data = [
    //         'msg'=>'これはBladeを利用したサンプルです。',
    //     ];
    //     return view('hello.index', $data);
    // }
    // public function index() {
    //     $data = [
    //         'msg'=>'お名前を入力してください',
    //     ];
    //     return view('hello.index', $data);
    // }
    // public function post(Request $request) {
    //     $msg = $request->msg;
    //     $data = [
    //         'msg'=>'こんにちは、' . $msg . 'さん！',
    //     ];
    //     return view('hello.index', $data);
    // }
//     public function index() {
//         return view('hello.index', ['msg'=>'']);
//     }
//     public function post(Request $request) {
//         return view('hello.index', ['msg'=>$request->msg]);
//     }
// }

