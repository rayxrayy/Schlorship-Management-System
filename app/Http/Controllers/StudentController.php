<?php

namespace App\Http\Controllers;
use App\Models\Form; 
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ApprovedStudents;
use App\Models\Post;
use App\Notifications\NewCourseNotification;
use App\Notifications\PostNotification;
use App\Models\Payment;
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
        // Find the student form by ID, or fail if not found
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
        
        // $studentUser = $finalstudent->fullname;
        $user = User::findOrFail($finalstudent->student_id);
        $user->notify(new StudentApprovedNotification($finalstudent));
        
        return redirect()->route('finalstudent')->with('success', 'Student approved successfully.');
        // return view('singlepages.finalapprovedstudent',compact('finalstudent','user','finalstudentcount'));
    }

    public function viewfinalstudent(){
        $user = auth()->user()->name;
        $finalstudentview =  ApprovedStudents::where('approved_by', $user)->paginate(4);

        $payments = Payment::select('student_id', \DB::raw('SUM(amount) as total_amount'))
                        ->groupBy('student_id')
                        ->get();
        $raisedamt = $payments->pluck('total_amount', 'student_id')->toArray();
        // dd($raisedamt);
        
        // dd($finalstudentview);
        // dd($finalstudentview);
        $finalstudentcount = $finalstudentview->count();
        return view('singlepages.finalapprovedstudent',compact('user','finalstudentview','finalstudentcount','raisedamt'));
    }
     
    public function viewsingleselectedstudent($id)  {
        $selectedstudents = Form::find($id);
        // dd($selectedstudents);
        return view('singlepages.selectedstudent', compact('selectedstudents'));
    }

    public function viewscholorstudent(){
        $finalstudents = ApprovedStudents::where('is_raised', 0)->get();
        // dd($finalstudents);
        $user = auth()->user()->name;
        $form = Form::all();
        $studentEmails = $form->pluck('email', 'id');
        $finalstudentcount = $finalstudents->count();
        // Retrieve and group payment amounts by student_id
        $payments = Payment::select('student_id', \DB::raw('SUM(amount) as total_amount'))
                        ->groupBy('student_id')
                        ->get();
        // Update the is_raised column based on the total payments
        foreach ($payments as $payment) {
        $student = ApprovedStudents::find($payment->student_id);
            if ($student) {
                $student->is_raised = ($payment->total_amount >= 100) ? 1 : 0;
                $student->save();
            }
        }

        // Convert the collection to an associative array
        $studentPayments = $payments->pluck('total_amount', 'student_id')->toArray();
        // dd($studentPayments);
        // dd($finalstudents);
        return view('public.scholorstudent',compact('finalstudents','user','studentEmails','finalstudentcount','studentPayments'));
    }

    public function store(Request $request)
    {
        // Create a new Post instance
        $post = new Post();
        $post->description = $request->input('post');
        $post->image = $request->input('username');
        $post->title = $request->input('student_name');
        $post->student_id = $request->input('student_id');
    
        // Save the post to the database
        $post->save();
        $student = User::where('name', $request->input('student_name'))->first();

        if ($student) {
        // Send notification to the student
        $student->notify(new PostNotification($post));
        } else {
        // Handle the case where the student with the given name is not found
        // For example, you can log an error or provide feedback to the user
        }
        // Optionally, you can redirect back or return a response
        return redirect()->back()->with('success', 'Commented!');
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