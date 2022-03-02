
<?php  include_once 'connection.php';
 require('fpdf/fpdf.php');
 session_start();
 
class PDF extends FPDF {
   
 
 
  // Page header
  function Header() {
        
      // Add logo to page
      //$this->Image('gfg1.png',10,8,33);
        
      // Set font family to Arial bold 

      $this->SetFont('Arial','B',10);  
      // Header
      $this->Cell(0,0,'NEPAAIR',0,0,'C');
      $this->Ln(0.1);
      $this->SetFont('Arial','',5); 
      $this->Cell(0,0.2,'Libali-7,Bhaktapur',0,0,'C');
      $this->Ln(0.1);
      $this->Cell(0,0.2,'nepairltd@gmail.com',0,0,'C');
      $this->Ln(0.1);
      $this->Cell(0,0.2,'+9779860044082',0,0,'C');
      $this->Ln(0.1);
      $this->SetFont('Arial','B',6); 
      $this->Cell(0,0.4,'Flight Ticket',0,0,'C');
      $this->Ln(0.1);

      $this->Cell(0,0.6,'This E-ticket is not transferable and required at the airport. ',0,0,'C');
      $this->Ln(0.1);
      $this->Cell(0,0.7,'"Please bring ID card and all necessary travel documents." ',0,0,'C');
      $this->Ln(0.4);
      $this->SetFont('Arial','I',6); 

        
  }

  // Page footer
  function Footer() {
        
      // Position at 1.5 cm from bottom
      $this->SetY(-0.5);
        
      // Arial italic 8
      $this->SetFont('Arial','I',5);
        
      
      $this->Cell(0,0,'Thank you for booking a flight with us.',0,0,'C');
  }
}

// Instantiation of FPDF class
$pdf = new PDF('p','in', [4.1,2.9]);

// Define alias for number of pages
$pdf->AliasNbPages();
$pdf->AddPage();
$flightid=$_SESSION['id'];
$user=$_SESSION['username'];
$nop=$_SESSION['nop'];
$bookeddatetime=$_SESSION['bookeddatetime'];
$query="SELECT * FROM availableflights WHERE id='$flightid'";
$result=mysqli_query($conn,$query);
$row=$result->fetch_assoc();
$from=$row['Fro_m'];
$to=$row['T_o'];
$date=$row['Departur_e'];
$departuretime=$row['Departuretime'];
$cabin=$row['cabi_n'];
$ppt=$row['priceperticket'];
$fare=$nop*$ppt;
$id='NA-'.$flightid;
$query2="SELECT * FROM contact WHERE user_name='$user' AND FlightNo='$id' AND Bookeddatetime='$bookeddatetime'";
$result2=mysqli_query($conn,$query2);
$row2=mysqli_fetch_assoc($result2);
$seats=$row2['Seats'];




// $showtime=$conn->query("select * from showorder where showOrderId='$showOrderId';");
// $show=$showtime->fetch_object();
// $theater = $show->theater;
// $movieName=$show->movieName;
// $date=$show->date;
// $time=$show->timeslot;
// $res=$conn->query("select * from hall where showOrderId='$showOrderId'");
//           while ($row=$res->fetch_object()) {
//             $pdf->SetFont('Times','B',7);

            $pdf->Cell(0, 0.2, 'FLIGHTNo :NA' .-$flightid, 0, 0.01,'L');
//             $pdf->Cell(0, 0.1, $row->seat, 0, 0.01,'R');
//             $pdf->SetFont('Times','',7);
           $pdf->Cell(0, 0.2,'From :' .$from,0,0.01,'L');
            $pdf->Cell(0, 0.2, 'To :'.$to, 0, 0.01,'L');
            $pdf->Cell(0, 0.2, 'Departure Date :'.$date, 0, 0.01,'L');
            $pdf->Cell(0, 0.2, 'Departure Time : '.$departuretime, 0, 0.01,'L');
            $pdf->Cell(0, 0.2, 'Cabin : '.$cabin, 0, 0.01,'L');
            $pdf->Cell(0, 0.2, 'Passengers : '.$nop, 0, 0.01,'L');

            $pdf->Cell(0, 0.2, 'Total Fare : Rs.'.$fare, 0, 0.01,'L');
            $pdf->Cell(0, 0.2, 'Seats : '.$seats, 0, 0.01,'L');



//           $pdf->Cell(0, 0.2, 'Date  time :'.$date.' '.$time, 0, 0.01,'L');

  // $pdf->Ln(2);
  //         }


//Dynamic part

// $tim=$_GET['time'];

// $result=$conn->query("select * from esewa where tm='".$tim."';");
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     $name=$row["username"];
//     $seatnumber=$row["t_seat"];
//     $ticketprice=$row["t_amt"];
//     $userId=$row["pid"];
//   }
// echo $userId; 

// $movieId=$_SESSION['movieId'];
// $movieIdentity=$conn->query("select * from movielist where movieId='".$movieId."'");
// $row=$movieIdentity->fetch_object();
// $movieName=$row->Name;

	
// $Identity=$conn->query("select * from showorder where movieName='".$movieName."';");
// $rows=$Identity->fetch_object();	
// $theater=$rows->theater;
// $date=$rows->date;
// $times=$rows->timeslot;

// header("Location:barcode.php?username=".$name."& moviename=".$movieName." & theater=".$theater."  & date=".$date." &
//  time=".$times." & nseat=".$seatnumber." & seatnum=".$_SESSION['seatnum']." & tprice=".$ticketprice." & userId=".$userId."");


$pdf->Output();




?>

