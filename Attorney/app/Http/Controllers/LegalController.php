<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Msg;
class LegalController extends Controller
{

    //法律分类列表
    public  function index(){

        $kind_info = DB::table('att_kind')->get();


        return view('Home.Legal.index',['kind'=>$kind_info]);
    }

    //法律文章列表
    public  function legal_list( Request $request ){
        //接收参数
        $k_id = intval($request->input('k_id'))?intval($request->input('k_id')):1;
        $article_info = DB::table('att_k_article')
            ->join('att_kind','att_kind.k_id','=','att_k_article.k_id')
            ->select('att_kind.k_name','att_k_article.*')
            ->where(['att_kind.k_id'=>$k_id])
            ->get();
        foreach($article_info as &$v){
            $v->ctime = date('Y-m-d H:i:s',$v->ctime);
        }
//        dd($article_info);

        return view('Home.Legal.list',['article'=>$article_info]);
    }

    //法律文章内容
    public  function legal_content(Request $request){
        //接收参数
        $a_id = intval($request->input('a_id'))?intval($request->input('a_id')):1;
        $article_info = DB::table('att_k_article')
            ->join('att_kind','att_kind.k_id','=','att_k_article.k_id')
            ->select('att_kind.k_name','att_k_article.*')
            ->where(['att_k_article.id'=>$a_id])
            ->first();

        $article_info->ctime = date('Y-m-d H:i:s',$article_info->ctime);

//        dd($article_info);
        return view('Home.Legal.content',['article'=>$article_info]);
    }



}