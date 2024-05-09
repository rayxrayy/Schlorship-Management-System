<?php

namespace App\Http\Controllers;
use App\Models\Form; 
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ApprovedStudents;
use App\Models\Post;
use App\Notifications\NewCourseNotification;
use App\Notifications\StudentApprovedNotification; 
class StudentController extends Controller
{
    public function viewselectedstudents(){
        
        // $selectedstudents = Form::paginate(4);// Fetch the form data by ID
        // dd($selectedstudents); 
        $user = auth()->user()->name; 
        // dd($user);
        $selectedstudents = Form::where('college', $user)->where('is_approved', false)->paginate(2);
        // dd($selectedstudents); 
        $selectedStudentsCount = $selectedstudents->count();
        // $student = Form::find($id); // Assuming $id is the student's ID
        // $photoPath = $selectedstudents->profile_image;
        // $profileImage = $selectedstudents->isEmpty() ? null : $selectedstudents->first()->profile_image;

        // dd($profileImage);
        // if ($form->is_approved = 0) {
        return view('users.viewselectedstudent', compact('selectedstudents','selectedStudentsCount')); // Pass the form data to the view
        // }
    }

    public function finalstudent($id){
        $finalstudent = Form::findOrFail($id); 
        $finalstudentcount = $finalstudent->count();
        $finalstudent->is_approved = true;
        $finalstudent->save();
        // if (!$form->is_approved) {
        // // Update the is_approved column to true
        // $form->is_approved = true;
        // $form->save();
        $user = auth()->user()->name;

        try{ ApprovedStudents::create([
        'student_id' => $finalstudent->id,
        'image' =>$finalstudent-> profile_image,
        'fullname' =>$finalstudent-> fullname,
        'description'=>$finalstudent-> description,
        'fee'=> 100,
        'course'=>$finalstudent-> course,
        'approved_by'=>$user,
        ]);}
        catch (\Exception $e) {
    // Log the database error
            \Log::error('Database error: ' . $e->getMessage());
    // Optionally, handle the error or return a response indicating failure
        }
        // $finalstudent->delete();
        // Send an email to the selected student
        // Mail::to($finalstudent->email)->send(new StudentApproved($finalstudent));
        $finalstudent->notify(new StudentApprovedNotification($finalstudent));
        return redirect()->route('finalstudent')->with('success', 'Student approved successfully.');
        // return view('singlepages.finalapprovedstudent',compact('finalstudent','user','finalstudentcount'));
    }

    public function viewfinalstudent(){
        $user = auth()->user()->name;
        $finalstudentview =  ApprovedStudents::where('approved_by', $user)->paginate(4);
        // dd($finalstudentview);
        // dd($finalstudentview);
        $finalstudentcount = $finalstudentview->count();
        return view('singlepages.finalapprovedstudent',compact('user','finalstudentview','finalstudentcount'));
    }
     
    public function viewsingleselectedstudent($id)  {
        $selectedstudents = Form::find($id);
        // dd($selectedstudents);
        return view('singlepages.selectedstudent', compact('selectedstudents'));
    }

    public function viewscholorstudent(){
        $finalstudents = ApprovedStudents::all();
        $user = auth()->user()->name;
        // dd($user);
        // dd($finalstudents);
        return view('public.scholorstudent',compact('finalstudents','user'));
    }

    public function store(Request $request)
    {

        $studentName = $request->input('student_name');
        $comment = $request->input('post');
        $user_name = $request->input('username');
        $post = new Post();
        $post->description = $comment;
        $post->title = $studentName;
        $post->image = $user_name;
        $post->save();
        // Optionally, you can redirect back or return a response
        return redirect()->back()->with('success', 'Comment submitted successfully!');
    }

    public function studentDashboard()
    {
    // Retrieve notifications for the authenticated student
    $student = User::find(auth()->id());
    $notifications = $student->notifications()->orderBy('created_at', 'desc')->get();

    // Mark notifications as read
    $student->unreadNotifications->markAsRead();

    return view('navigation-menu', ['notifications' => $notifications]);
    }
    
}