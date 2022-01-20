<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Validator;



class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Review::all();

        return view('admin.reviews.index', ['reviews' => $reviews]);
    }

    public function edit($id)
    {
        $review = Review::find($id);

        return view('admin.reviews.edit', ['review' => $review]);
    }

    public function update(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'rating' => 'required',
//            'Comment' => 'required',
            'name' => 'required',
            'email' => 'email|required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $review = Review::find($request->get('id'));

        $review->rating = $request->get('rating');
        $review->Comment = $request->get('Comment');
        $review->name = $request->get('name');
        $review->email = $request->get('email');


        $review->save();

        return redirect()->route('admin-reviews-index');
    }

    public function show($id)
    {
        $review = Review::find($id);

        return view('admin.reviews.show', ['review' => $review]);
    }

    public function delete($id)
    {
        Review::where('id', $id)->firstorfail()->delete();

        return redirect('/admin/review');
    }
}

