<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

//use App\Http\Controllers\Book;

class BookController extends Controller
{
    public function show($id) {
      //  return view('book', ['user' => User::findOrFail($id)]);
       return view('book', ['book' => Book::findOrFail($id)]);
    }

    public function postForm(Request $request) {
      DB::table('books')->insert(array(
          'nom' => $request->input('nom'),
          'auteur' => $request->input('auteur'),
          'description' => $request->input('description'),
          'genre' => $request->input('genre'),

      ));
      return redirect()->back();
    }


    public function recupBook() {
          $book = DB::table('books')->distinct()->paginate(5);
          $links = $book->setPath('')->render();

      return view('book',['books'=>$book,'link'=>$links]);
    }

    public function editBook(Request $request){
        Book::where('id', $request->input('id_edit'))->update(['nom' => $request->input('book_rename')]);
        return redirect()->back();
    }

    public function deleteBook(Request $request) {

        Book::where('id', $request->input('id_supp'))->delete();
        return redirect()->back();
    }
}
