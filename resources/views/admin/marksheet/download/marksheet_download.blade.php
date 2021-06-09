<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
    

    <style>
  
  .container{
    border: 1px solid #000;
    width: 100%;
    margin: 0 auto;
    padding-left: 32px;
    padding-right: 32px;
    padding-top: 40px;
    border-radius: 12px;
    font-family: Lato;
  }
  
  .header-text{
    text-align: center;
  }
  .header-text p{
      font-size: 20px;
  }
.text{
    display: flow-root;
}
  .text-left{
      font-size: 20px;
     float: left; 
      overflow: hidden;
  }
  .text-right{
    font-size: 20px;
     float: right; 
  }
  table {
    border-collapse: collapse;
    width: 100%;
  }
  th{
  background-color:#dddddd;
  }
  td, th {
    border: 1px solid #000;
    text-align: left;
    padding: 8px;
  }
.gread{
    display: flow-root;
    margin-top: 50px;
}
.left-section{
    float: left;
    overflow: hidden;
}
.left-section h5{
    font-size: 16px;
}
.right-section{
    float: right;
    overflow: hidden;
}
.footer{
    display: flow-root;
    margin-top: 40px;
    margin-bottom: 20px;
}
.footer-left{
    float: left;
    overflow: hidden;
}
.footer-right{
    float: right;
    overflow: hidden;
}
    </style>
</head>
<body>

        <!-- header text start -->
        <div class="header-text">
            <h1>Transcript of Academic Records</h1>
            <p>Diploma in Medical Ultarsonography</p>
        </div>

    <div class="text-left">
         <h5>Reg No :{{$student->registration_no}}</h5>
         <h5>Name :{{$student->name}} </h5>
    </div>
    <div class="text-right">
        <h5>Session : @if(isset($session->name)) {{$session->name}} @endif</h5>
     </div>
     <br><br><br>
     <br><br><br>
<!-- header text end -->

   <!-- semester 1 table start -->
     @php $totalCreadit=0; $totalGradePoint=0; @endphp
     @foreach($semester as $s)
       @php $course=DB::table('semister_courses')
       ->where('semister_id',$s->id) 
       ->leftjoin('courses','courses.id','=','semister_courses.course_id')
       ->select('courses.id as cid','courses.course_name','courses.creditHour','courses.course_code')
       ->get();
       @endphp
           <h2>{{$s->semister_name}}</h2>
            <table>
              <tr>
                <th>Course Code</th>
                <th>Course Title</th>
                <th>Credit Hour</th>
                <th>Grade</th>
                <th>Point</th>
                <th>G.P</th>
              </tr>
             @foreach($course as $c)
               @php $score=DB::table('user_scores')->where('user_id',$student->id)->where('course_id',$c->cid)->sum('score'); @endphp
              <tr>
                <td>{{$c->course_code}}</td>
                <td>{{$c->course_name}}</td>
                <td>{{$c->creditHour}}</td>
                <td>
                    @if($score>=80) 
                     A+
                     @php $totalCreadit+=$credit=$c->creditHour; @endphp
                     @elseif($score>=75 && $score<=79)
                     A
                      @php $totalCreadit+=$credit=$c->creditHour; @endphp
                     @elseif($score>=70 && $score<=74)
                     A-
                      @php $totalCreadit+=$credit=$c->creditHour; @endphp
                     @elseif($score>=65 && $score<=69)
                     B+
                      @php $totalCreadit+=$credit=$c->creditHour; @endphp
                     @elseif($score>=60 && $score<=64)
                     B
                      @php $totalCreadit+=$credit=$c->creditHour; @endphp
                     @elseif($score>=55 && $score<=59)
                     B-
                      @php $totalCreadit+=$credit=$c->creditHour; @endphp
                     @elseif($score>=50 && $score<=54)
                     C+
                      @php $totalCreadit+=$credit=$c->creditHour; @endphp
                     @elseif($score>=45 && $score<=49)
                     C
                      @php $totalCreadit+=$credit=$c->creditHour; @endphp
                     @elseif($score>=40 && $score<=44)
                     D
                      @php $totalCreadit+=$credit=$c->creditHour; @endphp
                    @else
                     	F
                      @php $totalCreadit+=$credit=0.00; @endphp
                  @endif 
                </td>
                <td>
                    @if($score>=80) 
                     4.00
                     @elseif($score>=75 && $score<=79)
                     3.75
                     @elseif($score>=70 && $score<=74)
                     3.50
                     @elseif($score>=65 && $score<=69)
                     3.25
                     @elseif($score>=60 && $score<=64)
                     3.00
                     @elseif($score>=55 && $score<=59)
                     2.75
                     @elseif($score>=50 && $score<=54)
                     2.50
                     @elseif($score>=45 && $score<=49)
                     2.25
                     @elseif($score>=40 && $score<=44)
                     2.00
                    @else
                     0.00 
                  @endif  
                 </td>
                <td>{{$score}} @php $totalGradePoint+=$score; @endphp</td>
              </tr>
             @endforeach 
            </table>
       @endforeach
      <!-- semester 1 table end -->



   <p>NB:Medium of Instruction &  xamlnatlon was in English.</p>
      <br><br><br>
      
     <!-- semester 2 table end -->

     <!-- gread section start -->
     <div class="left-section">
        <h5><u>Summarv of Results</u></h5>
        <p>a).Minimum credits required for<br>
        the degree:52.00</p>
        <p>b).TotalCredits earned: {{$totalCreadit}} </p>
        <p>c).TotalGrade Points: {{$totalGradePoint}}</p>
        <p>d).CGPA:	 {{round($totalGradePoint/52,2)}}</p>
        <p>CGPA= <u>TotalEarned Grade Points</u><br>Iotal Earned credit Aours</p>
    </div>
       <br><br><br>
       <br><br><br>
       <br><br><br>
           <br><br><br>
       <br><br><br>

  <div class="right-section">
    <table>
        <tr >
            <th colspan="3" style="text-align: center;">Grading System</th>
            
          </tr>
        <tr>
          <th>Numerical scores</th>
          <th>Grade Point</th>
          <th>Letter Grade</th>
        </tr>

        @foreach($grading as $g)
        <tr>
          <td>{{$g->maxScore}}</td>
          <td>{{$g->gradePoint}}</td>
          <td>{{$g->letterGrade}}</td>
        </tr>
        @endforeach 
          
      </table>
      <span style="float: right;">GP= Cr. Hr.X Point</span>
  </div>
   <br><br><br>
       <br><br><br>
       <br><br><br>
       <br><br><br>
       <br><br><br>
       <br><br><br>
       <br><br><br>
       <br><br><br>
       <br><br><br>
    
<!-- gread section end -->
<!-- footer section start -->
        <div class="footer-left">
            <span><b>Prepared & Checked by:</b><br>
          Issued at:
          <br>
          4' March, 2020<br>
            Dhaka, Bangladesh
          </span>
        </div>
        <div class="footer-right">
            <span><b> Dr. Mohammad Akhter Hossain</b><br>
          MBBS, ROMS,RVT<br>
                President & CEO
            </span>
        </div>

    <!-- footer section end -->

</body>
</html>