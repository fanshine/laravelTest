<?php
class DocsController extends BaseController {
    // protected $fillable = array('title', 'content');

    public function getDocs($param)
    {

        // $docs = $param ? Doc::whereRaw('id < ?', array($param))->get() : Doc::all();
        $docs = Doc::all();
        return View::make('doc.list', array('docs' => $docs));
    }
    public function showEditForm($id=null)
    {
        $doc = $id ? Doc::find($id) : '';
        return View::make('doc.edit', array('doc'=>$doc));
    }
    public function updateForm()
    {
        $param = array(
            // 'title' => Input::get('title'),
            'content' => Input::get('content'),
        );
        // echo $param->content;
        // var_dump($param);
        $doc = Doc::create($param);
        // var_dump($param);
        if ($doc) return View::make('succeed!');
    }
}