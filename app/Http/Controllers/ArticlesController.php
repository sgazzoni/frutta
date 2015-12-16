<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
	
	public function __construct() {
		//$this->middleware('auth', ['only' => 'index']);
	}
	
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $articles = Article::latest()->get();
		if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($articles);
    	}
		return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ArticleRequest $request)
    {
        $input = $request->all();
        
		$article = Article::create([			
			'title' => $input['title'],				
			'body' => $input['body'],
			'codice_prodotto' => $input['codice_prodotto'],
			'disponibile' => $input['disponibile'],
			'prezzo' => $input['prezzo'],
			'categoria' => $input['categoria']
		]);
		
		$imageName = $article->id . '.' . $request->file('immagine')->getClientOriginalExtension();
		$request->file('immagine')->move(
			base_path() . '/public/images/catalog/', $imageName
		);
		
		$article->update(['immagine' => $imageName]);
		
		if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($article);
    	}
		
		flash()->success('salvato con successo!');
		
		return redirect('articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Article $article)
    {
		return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Article $article)
    {
		return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(ArticleRequest $request, Article $article)
    {
		$input = $request->all();
		$article->update([
				
 			'title' => $input['title'],
			'body' => $input['body'],
			'codice_prodotto' => $input['codice_prodotto'],
			'disponibile' => $input['disponibile'],
  		    'prezzo' => $input['prezzo'],
			'categoria' => $input['categoria'],
			'immagine' => $imageName				
	
		
            
        ]);
		
		
		if ($request->ajax() || $request->wantsJson()) {
    		return new JsonResponse($article);
    	}
		
		flash()->success('aggiornato con successo!');
		
		return redirect('articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, Article $articles)
    {
        $article->delete();
        if ($request->ajax() || $request->wantsJson()) {
        	return new JsonResponse($articles);
        }
        return redirect('articles');
    }
}

