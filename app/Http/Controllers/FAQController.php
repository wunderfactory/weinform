<?php namespace Wundership\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Wundership\Http\Requests;
use Wundership\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Wundership\Keyword;
use Wundership\Question;

class FAQController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        if (Input::has('search')) {
            $questions = Question::search(Input::get('search'))->get()->sortByDesc(function($model){
                return $model->searchScore;
            });
            return $questions;
        } else {
            $questions = Question::all();
        }
		return view('faq.index')->withQuestions($questions);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('faq.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
	public function store(Request $request)
	{
		$this->validate($request, ['question' => 'required', 'answer' => 'required', 'keywords' => 'required', /*'categories' => 'required'*/]);
        $question = Question::create($request->only('question', 'answer'));
        $keywords = preg_replace('/\s+/', '', $request->get('keywords'));
        foreach(explode(',',$keywords) as $keyword) {
            $keyword = Keyword::findOrCreate($keyword);
            $question->keywords()->save($keyword);
        }
        return redirect('faq/'.$question->id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Question  $question
	 * @return Response
	 */
	public function show($question)
	{
        return $question->load('keywords');
        return view('faq.show')->withQuestion($question);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Question  $question
	 * @return Response
	 */
	public function edit($question)
	{
		return view('faq.edit')->withQuestion($question->with('keyword'));
	}

	/**
	 * Update the specified resource in storage.
	 *
    * @param  Question  $question
	 * @return Response
	 */
	public function update(Request $request, $question)
	{
		$question->keywords()->detach();
        $this->validate($request, ['question' => 'required', 'answer' => 'required', 'keywords' => 'required', /*'categories' => 'required'*/]);
        $question->update($request->only('question', 'answer'));
        $keywords = preg_replace('/\s+/', '', $request->get('keywords'));
        foreach(explode(',',$keywords) as $keyword) {
            $keyword = Keyword::findOrCreate($keyword);
            $question->keywords()->save($keyword);
        }
        return redirect('faq/'.$question->id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 *@param  Question  $question
	 * @return Response
	 */
	public function destroy($question)
	{
		$question->keywords()->detach();
        $question->categories()->detach();
        $question->delete();
        return redirect('faq');
	}

    /**
     * Searches for question
     *
     * @param String $search
     */
    public function search($search)
    {
        return Question::search($search)->get();
    }
}
