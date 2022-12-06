<?php

namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\Review;
use App\Models\Course;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    ///Question
public function userQues(){
    return view('user.ques');
}

public function userQuesSubmit(Request $req){
    
    $ques = new Question();
    $ques->userName = $req->userName;
    $ques->question = $req->question;
    $ques->save();

    return redirect()->route('user.ques.list');
}

public function userQuesList(Request $req){
    $ques = Question::all();
    return view('user.queslist')->with('ques', $ques);
}

public function userQuesEdit(Request $req){
    $ques = Question::where('id', $req->id)->first();
    return view('user.quesedit')->with('ques', $ques);
}

public function userQuesEditSubmit(Request $req){
    $ques = Question::where('id', $req->id)->first();
    $ques->userName = $req->userName;
    $ques->question = $req->question;
    $ques->save();
    return redirect()->route('user.ques.list');
}

public function userQuesDelete(Request $req){
    $id = $req->id;
    $ques = Question::where('id', $id)->delete();
    return redirect ()->route ('user.ques.list');
}

public function userPanel(){
    return view('user.userpanel');
}


//----------------------------------Review-------------------------------
public function userReview(){
    return view('user.review');
}

public function userReviewSubmit(Request $req){
    
    $review = new Review();
    $review->Name = $req->Name;
    $review->Email = $req->Email;
    $review->Subject = $req->Subject;
    $review->Message = $req->Message;
    $review->Rating = $req->Rating; 
    $review->save();

    return redirect()->route('user.review.list');
}

public function userReviewList(Request $req){
    $review = Review::all();
    return view('user.reviewlist')->with('review', $review);
}


///Courses
public function courses(){
    return view('user.courses');
}



//--------------------------------------Course Book----------------------------------
public function courseBook(){
    return view('user.coursebook');
}

public function courseBookSubmit(Request $req){
    
    $course = new Course();
    $course->courseName = $req->courseName;
    $course->Name = $req->Name;
    $course->Email = $req->Email;
    $course->Phone = $req->Phone;
    $course->save();

    return redirect()->route('user.course.book.list');
}

public function courseBookList(Request $req){
    $course = Course::all();
    return view('user.coursebooklist')->with('course', $course);
}

// public function courseBookDelete(Request $req){
//     $id = $req->id;
//     $course = Course::where('id', $id)->delete();
//     return redirect ()->route ('user.course.book.list');
// }

// public function courseBookEdit(Request $req){
//     $course = Course::where('id', $req->id)->first();
//     return view('user.editcoursebook')->with('course', $course);
    
// }

// public function courseBookEditSubmit(Request $req){
//     $course = Course::where('id', $req->id)->first();
//     $course->courseName = $req->courseName;
//     $course->Name = $req->Name;
//     $course->Email = $req->Email;
//     $course->Phone = $req->Phone;
//     $course->save();

//     return redirect ()->route ('user.course.book.list');
// }



}