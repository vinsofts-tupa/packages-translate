<?php

namespace Tupa\Translate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tupa\Translate\Translate;
use App;
use DB;
use Storage;

class TranslateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang)
    {
        $data = Translate::all();
        App::setLocale($lang);
        return view('languages::list',compact(['data','lang']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang)
    {
        return view('languages::add',compact('lang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$lang)
    {
        $data = new Translate;
        $data->in_code = $request->txtIncode;
        $data->en = $request->txtEn;
        $data->vn = $request->txtVn;
        $data->page = $request->txtPage;
        $data->save();
        return redirect($lang.'/languages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($lang)
    {
        return view('languages::home',compact('lang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, $id)
    {
        $data = Translate::find($id);
        return view('languages::edit',compact('data','lang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$lang,$id)
    {
        
        $data = Translate::find($id);
        $data->in_code = $request->txtIncode;
        $data->en = $request->txtEn;
        $data->vn = $request->txtVn;
        $data->page = $request->txtPage;
        $data->save();
        return redirect($lang.'/languages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($lang,$id)
    {
        $data = Translate::destroy($id);
        // DB::table('localization') -> delete($id);
        return redirect($lang.'/languages');
    }

    public function capnhat($lang){
        $data = Translate::all();
        $trans_en_string = '<?php return[';
        $trans_vn_string = '<?php return[';
        foreach($data as $trans){
            $trans_en_string .= '"' . $trans->in_code . '"' . ' => ' . '"' . $trans->en .'"' .',';
            $trans_vn_string .= '"' . $trans->in_code . '"' . ' => ' . '"' . $trans->vn .'"' .',';
        }
        $trans_en_string .='];';
        $trans_vn_string .='];';
        Storage::disk('lang')->put('en/thongbao.php',$trans_en_string);
        Storage::disk('lang')->put('vn/thongbao.php',$trans_vn_string);
        return redirect($lang.'/languages');
    }
}
