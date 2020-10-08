<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;//classe de autenticação
=======
>>>>>>> origin/master

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD

     //Metodo esponsavel por listar todos os posts
    public function index()
    {
        $posts = Post::where('user_id',Auth::id())->orderBy('created_at','desc')->paginate(3);//asc para do mais velho ao mais novo
=======
    public function index()
    {
        $psts = Post::all();
>>>>>>> origin/master

        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD

     //Metodo responsavel por criar os ports
    public function create()
    {
        return view('posts.create');//redireiona para a view de criação de post
    }


=======
    public function create()
    {
        return view('posts.create');
        //
    }

>>>>>>> origin/master
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    //metodo responsavel por cadastrar no banco
    public function store(Request $request)
    {
        $validatedData = $request->validate([
              'title' =>[ 'required', 'unique;posts' , 'max:255'],
              'body' => ['required'],
              'image' => ['mimes:jpeg,png' , 'dimensions:min_width=200,min_heigth=200']


        ]);

        //Post::create($request->all());
        $post = new Post($validatedData);///criamos

        $post->user_id = Auth::id();//identificamos o autor

        $post->save();//salvamos


        if ($request->hasFile('image') and $request->file('image')->isValid()){
            $sextension = $request->image->extension();
            
            $image_name = now()->toDateTimeString()."_".substr(base64_encode(sha1(mt_rand())),0, 10);
            
            $path = $request->image->storeAs('posts',$image_name.'.'.$sexension,'public');
            
            $image = new Image();
            $image->post_id = $post->id;
            $image->path = $path;
            $image->save();
        }

        return redirect('posts')->with('success', 'Post criado com sucesso');
=======
    public function store(Request $request)
    {
        Post::create($request->all());

        return redirect('posts');
>>>>>>> origin/master
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD

     //metodo responsavel por vi os dados
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
=======
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
>>>>>>> origin/master
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD

     //rota para mostrar em um form, as informações que precisam ser editadas 
    public function edit(Post $post)
    {
        if($post->user_id===Auth::id()){

        return view('posts.edith', compact('post'));
        }
        else{
            return redirect()->route('posts.index')
                                     ->with('error', 'você não autorização para editar esta publicação. por favor, vá dormi')
                                     ->withInput();
        }


=======
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
>>>>>>> origin/master
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD

     //rota para atualizar as informações do form de edição
    public function update(Request $request, Post $post)
    {
        if($post->user_id===Auth::id()){
            $post->update($request->all());
            return redirect()->route('posts.index')->with('success', 'Post atualizado com sucesso');
        }
        else{
            return redirect()->route('posts.index')
                                     ->with('error', 'você não autorização para editar esta publicação. por favor, vá dormi')
                                     ->withInput();
        }

=======
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());

        return redirect()->route('posts.index');
>>>>>>> origin/master
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
<<<<<<< HEAD
        if($post->user_id===Auth::id()){
            $post->delete();
            return redirect()->route('posts.index')->with('success', 'Post deletado com sucesso');
        }
        else{
            return redirect()->route('posts.index')
                                     ->with('error', 'você não autorização para deletar esta publicação. por favor, vá dormi')
                                     ->withInput();
        }


=======
        $post-.delete();

        return redirect->('posts.index');
>>>>>>> origin/master
    }
}
