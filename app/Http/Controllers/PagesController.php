<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Book;
use App\Models\City;
use App\Models\Country;
class PagesController extends Controller
{
    public function example(){
        return 123;
    }
    public function abc(){
        return view('meem');
    }
    public function babu(){ 
        return view('babu');
    }
    public function mow(){
        return view('mow');
    }
    public function monika(){
        return view('monika');
    }
    public function nishi(){
        return view('nishi');
    }
    public function tanzila(){
        return view('tanzila');
    }
    //Post CRUD start from here
    public function post_index(){
        $posts = Post::all();
        //return $posts;
        return view('post.index')->with('posts', $posts);
    }
    public function book_index(){
        $books = Book::all();
        //return $posts;
        return view('book.index', compact('books'));
    }
    public function book_create(){
        return view('book.create');
    }
    public function book_store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'author' => 'required|max:100',
            'body' => 'required'
        ]);
        //Book::create($request->all());
        //return redirect()->route('book.index');
        $book = new Book;
        $book->name = $request->input('name');
        $book->author = $request->input('author');
        $book->body = $request->input('body');
        $book->save();
        return redirect()->route('book.index')->with('success', 'Successfully Created');
    }
    public function book_show($id){
        $book = Book::find($id);
        return view('book.show', compact('book'));
    }
    public function book_destroy($id){
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('book.index')->with('error', 'Successfully Removed');
    }
    public function book_edit($id){
        $book = Book::find($id);
        return view('book.edit', compact('book'));
    }
    public function book_update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'author' => 'required|max:100',
            'body' => 'required'
        ]);
        //Book::create($request->all());
        //return redirect()->route('book.index');
        $book = Book::find($id);
        $book->name = $request->input('name');
        $book->author = $request->input('author');
        $book->body = $request->input('body');
        $book->save();
        return redirect()->route('book.index')->with('warning', 'Successfully Updated');
    }
    public function city_index(){
        $cities = City::all();
        //return $posts;
        return view('city.index', compact('cities'));
    }
    public function city_create(){
        return view('city.create');
    }
    public function city_store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'number' => 'required',
            'state' => 'required'
        ]);
        $city = new City;
        $city->name = $request->input('name');
        $city->number = $request->input('number');
        $city->state =$request->input('state');
        $city->save();
        return redirect()->route('city.index');


    }
    public function city_show($id){
        $city = City::find($id);
        return view('city.show', compact('city'));
    }
    public function city_destroy($id){
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('book.index')->with('error', 'Successfully Removed');
    }

    public function country_index(){
        $countries = Country::orderBy('created_at', 'asc')->get();
        //return $posts;
        return view('country.index', compact('countries'));
    }
    public function country_create(){
        return view('country.create');
    }
    public function country_store(Request $request){
        //validation
       $this->validate($request, [
           'name' => 'required',
           'population' => 'required',
           'religion' => 'required'
       ]);
       //initiate an object
       $country = new Country;
       //assigning value to several column
       $country->name = $request->input('name');
       $country->population = $request->input('population');
       $country->religion = $request->input('religion');
       //save to db
       $country->save();
       //returning to the index page
       return redirect()->route('country.index');
    }
    public function country_show($id){
        $city = Country::find($id);
        return view('country.show', compact('country'));
    }
    public function country_destroy($id){
        $country = Country::find($id);
        $country->delete();
        return redirect()->route('country.index')->with('error', 'Successfully Removed');
    }
   

    
}
