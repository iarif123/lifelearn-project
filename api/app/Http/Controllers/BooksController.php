<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Models\Book as BookModel;
use Illuminate\Support\Facades\Input;

class BooksController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = BookModel::all();
        return view('books.index')
            ->with('title', 'Books')
            ->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newBook()
    {
        return view('books.newBook')
            ->with('title','Add New Book');
    }

    /**
     * Create new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $validation = BookModel::validate(Input::all());

        if ($validation->fails()) {
            return redirect('books/newBook')
                ->withErrors($validation)->withInput();
        }else {
            BookModel::create(array(
                'name'=>Input::get('name'),
                'author'=>Input::get('author')
            ));
            return redirect('books')
                ->with('message', 'The book was created successfully!');
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function read($id)
    {
        return view('books.book')
            ->with('title', 'Book Read Page')
            ->with('book',BookModel::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('books.edit')
            ->with('title', 'Edit Author')
            ->with('book', BookModel::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $id = Input::get('id');
        $validation = BookModel::validate(Input::all());

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation);
        }else {
            $book = BookModel::find($id);
            $book->name=Input::get('name');
            $book->save();
            return redirect()
                ->route('book',$id)
                ->with('message', 'The book was update successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        BookModel::find(Input::get('id'))->delete();
        return redirect('books')
            ->with('message', 'The book was deleted successfully!');
    }
}
