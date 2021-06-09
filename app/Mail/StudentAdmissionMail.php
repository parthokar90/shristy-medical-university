<?php
  
namespace App\Mail;
  
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
  
class StudentAdmissionMail extends Mailable
{
    use Queueable, SerializesModels;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($details)
    {
        $this->details = $details;
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $subject=$request->subject;
        return $this->subject($subject)->from('shristyultrasound7@gmail.com','Shristy Ultrasound')->
        view('emails.admission_mail')->with(['details' => $this->details]);
        return $this->subject('Online Admission')
                    ->view('emails.admission_mail');
    }
}