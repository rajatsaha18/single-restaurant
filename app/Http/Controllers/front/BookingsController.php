<?php
namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Mail\TableConfirmationMail;
use App\Models\Bookings;
use App\Models\User;
use App\Helpers\helper;
use App\Models\TableBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Session;

class BookingsController extends Controller
{
    private $tableBooks;
    private $date;
    private $time;
    private $mailBody;

    public function index(Request $request)
    {
        return view('web.reservation');
    }
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'guests' => 'required',
            'reservation_type' => 'required',
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);
        // TableBook::newTableBook($request);
        $this->time = date("h:i A", strtotime($request->time));
        $this->date = date("d-m-Y", strtotime($request->date));
        $this->tableBooks = new TableBook();
        $this->tableBooks->name = $request->name;
        $this->tableBooks->email = $request->email;
        $this->tableBooks->mobile = $request->mobile;
        $this->tableBooks->date = $this->date;
        $this->tableBooks->time = $this->time;
        $this->tableBooks->guests = $request->guests;
        $this->tableBooks->reservation_type = $request->reservation_type;
        $this->tableBooks->save();
        /*=======================Send Mail Code=================*/
        $this->mailBody = [
            'title' => 'Hello This is Table Booking Mail',
            'body' => 'Your Table Booking Successfully',

        ];
        Mail::to($this->tableBooks->email)->send(new TableConfirmationMail($this->mailBody));
        /*=======================Send Mail Code=================*/

        return redirect()->back()->with('success', trans('messages.success'));

        // $booking_number = substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ", 10)), 0, 10);
        // $date = date("d-m-Y", strtotime($request->date));
        // $time = date("h:i A", strtotime($request->time));
        // $getadmindata = User::select('id', 'name', 'email')->where('type', 1)->first();
        //         $data = ['name' => $getadmindata->name, 'adminemail' => $getadmindata->email, 'booking_number' => $booking_number, 'logo' => helper::image_path(helper::appdata()->logo), 'url' => url('/admin/bookings'), 'fullname' => $request->name, 'email' => $request->email, 'mobile' => $request->mobile, 'guests' => $request->guests, 'reservation_type' => $request->reservation_type, 'date' => $date, 'time' => $time, 'special_request' => $request->special_request,];
        //         $toadmin = Mail::send('Email.reservation', $data, function ($message) use ($data) {
        //             $message->from(env('MAIL_USERNAME'))->subject(trans('labels.new_booking'));
        //             $message->to($data['adminemail']);
        //         });
        // $data = ['name' => $request->name, 'email' => $request->email, 'booking_number' => $booking_number, 'logo' => helper::image_path(helper::appdata()->logo), 'url' => url('/admin/bookings'), 'fullname' => $request->name, 'mobile' => $request->mobile, 'guests' => $request->guests, 'reservation_type' => $request->reservation_type, 'date' => $date, 'time' => $time, 'special_request' => $request->special_request,];
        //     $touser = Mail::send('Email.reservation', $data, function ($message) use ($data) {
        //     $message->from(env('MAIL_USERNAME'))->subject(trans('labels.new_booking'));
        //     $message->to($data['email']);
        // });
        // $booking = new Bookings();
        // $booking->booking_number = $booking_number;
        // $booking->date = $date;
        // $booking->time = $time;
        // $booking->guests = $request->guests;
        // $booking->reservation_type = $request->reservation_type;
        // $booking->name = $request->name;
        // $booking->email = $request->email;
        // $booking->mobile = $request->mobile;
        // $booking->special_request = $request->special_request;
        // $booking->status = 1;
        // $booking->save();
        // if($booking->save())
        // {
        //     return redirect()->back()->with('success', trans('messages.success'));
        // }
        // else
        // {
        //     return redirect()->back()->with('error', trans('messages.wrong'));
        // }

        // $validator = Validator::make($request->all(), [
        //     "date" => 'required',
        //     "time" => 'required',
        //     "guests" => 'required',
        //     "reservation_type" => 'required',
        //     "name" => 'required',
        //     "email" => 'required|email',
        //     "mobile" => 'required',
        // ], [
        //         "date.required" => trans('messages.date_required'),
        //         "time.required" => trans('messages.time_required'),
        //         "guests.required" => trans('messages.guest_required'),
        //         "reservation_type.required" => trans('messages.reservation_type_required'),
        //         "name.required" => trans('messages.name_required'),
        //         "email.required" => trans('messages.email_required'),
        //         "email.email" => trans('messages.invalid_email'),
        //         "mobile.required" => trans('messages.mobile_required'),
        //     ]);
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // } else {
        //     try {
        //         $booking_number = substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ", 10)), 0, 10);
        //         $date = date("d-m-Y", strtotime($request->date));
        //         $time = date("h:i A", strtotime($request->time));
        //         // to - Admin
        //         $getadmindata = User::select('id', 'name', 'email')->where('type', 1)->first();
        //         $data = ['name' => $getadmindata->name, 'adminemail' => $getadmindata->email, 'booking_number' => $booking_number, 'logo' => helper::image_path(helper::appdata()->logo), 'url' => url('/admin/bookings'), 'fullname' => $request->name, 'email' => $request->email, 'mobile' => $request->mobile, 'guests' => $request->guests, 'reservation_type' => $request->reservation_type, 'date' => $date, 'time' => $time, 'special_request' => $request->special_request,];
        //         $toadmin = Mail::send('Email.reservation', $data, function ($message) use ($data) {
        //             $message->from(env('MAIL_USERNAME'))->subject(trans('labels.new_booking'));
        //             $message->to($data['adminemail']);
        //         });
        //         // to - User
        //         $data = ['name' => $request->name, 'email' => $request->email, 'booking_number' => $booking_number, 'logo' => helper::image_path(helper::appdata()->logo), 'url' => url('/admin/bookings'), 'fullname' => $request->name, 'mobile' => $request->mobile, 'guests' => $request->guests, 'reservation_type' => $request->reservation_type, 'date' => $date, 'time' => $time, 'special_request' => $request->special_request,];
        //         $touser = Mail::send('Email.reservation', $data, function ($message) use ($data) {
        //             $message->from(env('MAIL_USERNAME'))->subject(trans('labels.new_booking'));
        //             $message->to($data['email']);
        //         });
        //         $booking = new Bookings();
        //         $booking->booking_number = $booking_number;
        //         $booking->date = $date;
        //         $booking->time = $time;
        //         $booking->guests = $request->guests;
        //         $booking->reservation_type = $request->reservation_type;
        //         $booking->name = $request->name;
        //         $booking->email = $request->email;
        //         $booking->mobile = $request->mobile;
        //         $booking->special_request = $request->special_request;
        //         $booking->status = 1;
        //         $booking->save();
        //         return redirect()->back()->with('success', trans('messages.success'));
        //     } catch (\Throwable $th) {
        //         return redirect()->back()->with('error', trans('messages.wrong'));
        //     }
        // }
    }
}
