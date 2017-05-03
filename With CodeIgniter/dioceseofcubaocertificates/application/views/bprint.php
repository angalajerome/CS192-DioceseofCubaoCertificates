<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RPDF extends FPDF
{
	function Header()
	{
		$this->Image(base_url().'assets/images/logo.png',18,18,25,25);
		$this->Ln(17);
	}
}

foreach ($infoBapt->result_array() as $row)
{
	$this->myfpdf = new RPDF();
	$this->myfpdf->AliasNbPages();
	$this->myfpdf->AddPage();
	$this->myfpdf->SetFont('Times','',12);

	$this->myfpdf->SetFont('Arial','B',14);
	$this->myfpdf->Cell(0,10,"ROMAN CATHOLIC DIOCESE OF CUBAO",0,0,'C');
	$this->myfpdf->Ln(9);
	$this->myfpdf->SetFont('Times','B',20);
	$a = qq($row['baptCode']);
	$this->myfpdf->Cell(0,10,strtoupper($a),0,0,'C');
	$this->myfpdf->Ln(6);
	
	//address of parish dapat dito pero meh
	// $pdf->SetFont('Times','',12);
	// $pdf->Cell(0,10,$a,0,0,'C');
	$this->myfpdf->Ln(22);
	
	$this->myfpdf->SetFont('Times','B',24);
	$this->myfpdf->Cell(0,13,"CERTIFICATE OF BAPTISM",0,0,'C');
	$this->myfpdf->SetFont('Times','',12);
	$this->myfpdf->Ln(22);
	
	$this->myfpdf->SetFont('','',19);
	$this->myfpdf->Cell(0,10,"   ".strtoupper($row['firstName'])." ".strtoupper($row['middleName'])." ".strtoupper($row['lastName'])." ".strtoupper($row['suffix'])."    ",0,0,'C');
	$this->myfpdf->SetFont('Times','',12);
	$this->myfpdf->Ln(9);
	
	$this->myfpdf->SetFont('Times','',15);
	$this->myfpdf->Cell(0,10,"Child of ".$row['father']." and ".$row['mother'],0,0,'C');
	$this->myfpdf->Ln(7);
	
	$this->myfpdf->Cell(0,10,"born on the ".$row['bDay']." day of ".$row['bMonth'].", ".$row['bYear'],0,0,'C');
	$this->myfpdf->Ln(7);
	//Parang hindi kailangan??
	//$this->myfpdf->Cell(0,10,"at the ".$d,0,0,'C');
	$this->myfpdf->Ln(9);
	$this->myfpdf->SetFont('Times','',12);
	$this->myfpdf->Cell(0,10,"was",0,0,'C');
	$this->myfpdf->SetFont('Times','',12);
	$this->myfpdf->Ln(15);
	$this->myfpdf->SetFont('','BI',36);
	$this->myfpdf->Cell(0,10,"Baptized",0,0,'C');
	$this->myfpdf->SetFont('Times','',12);
	$this->myfpdf->Ln(15);
	$this->myfpdf->SetFont('Times','',12);
	$this->myfpdf->Cell(0,10,"in the name of the Father, and of the Son, and of the Holy Spirit",0,0,'C');
	$this->myfpdf->Ln(6);
	
	$this->myfpdf->SetFont('Times','',15);
	$this->myfpdf->Cell(0,10,"on the ".$row['baptDay']." day of ".$row['baptMonth'].", ".$row['baptYear'],0,0,'C');
	$this->myfpdf->Ln(7);
	$this->myfpdf->SetFont('Times','',16);
	//What is this
	//$this->myfpdf->Cell(0,10," ".$d,0,0,'C');
	$this->myfpdf->Ln(8);
	
	$this->myfpdf->SetFont('Times','',14);
	$this->myfpdf->Cell(0,10,"SPONSORS ",0,0,'C');
	$this->myfpdf->Ln(5);
	$this->myfpdf->Cell(0,10,$row['bSpA']." & ".$row['bSpB'],0,0,'C');
	$this->myfpdf->Ln(16);
	
	$this->myfpdf->Ln(9);
	$this->myfpdf->SetFont('','B');
	$this->myfpdf->Cell(0,10,$row['bPriestName'],0,0,'C');
	$this->myfpdf->SetFont('Times','',15);
	$this->myfpdf->Ln(5);
	$this->myfpdf->SetFont('Times','',12);
	$this->myfpdf->Cell(0,9,"Parish Priest",0,0,'C');
	
	$this->myfpdf->Ln(8);
	$this->myfpdf->SetFont('Times','',12);
	$this->myfpdf->Ln(5);
	$this->myfpdf->Cell(0,10,"   Purpose: ".$purpose);
	$this->myfpdf->Ln(5);
	$this->myfpdf->Cell(0,10,"   Staff: ".$username);
	$this->myfpdf->Ln(5);
	
	$this->myfpdf->Cell(0,8,"   Book Number: ".$row['bBookNum']);
	$this->myfpdf->Ln(5);
	$this->myfpdf->Cell(0,8,"   Page Number: ".$row['bPageNum']);
	$this->myfpdf->Ln(5);
	$this->myfpdf->Cell(0,8,"   Line Number: ".$row['bLineNum']);
	$this->myfpdf->Ln(5);
	date_default_timezone_set("Asia/Manila");
	$this->myfpdf->Cell(0,10,"   Date Issued: ".date("Y/m/d"));
	$this->myfpdf->Ln(9);
	
	$this->myfpdf->Output();
}
  function qq($q){
      if ($q==1001) {return 'Holy Family Parish (Roxas District)';}
  elseif ($q==1002) {return 'Most Holy Redeemer Parish (Araneta)';}
  elseif ($q==1003) {return 'National Shrine of Our Lady of Mount Carmel';}
  elseif ($q==1004) {return 'Our Lady of Fatima Parish';}
  elseif ($q==1005) {return 'Sacred Heart of Jesus Parish';}
  elseif ($q==1006) {return 'Saint Paul the Apostle Parish';}
  elseif ($q==1007) {return 'Shrine of Jesus the Divine Word Parish';}
  elseif ($q==2001) {return 'Christ the King Parish (Greenmeadows)';}
  elseif ($q==2002) {return 'Nativity of the Lord Parish';}
  elseif ($q==2003) {return 'Our Lady of the Miraculous Medal Parish';}
  elseif ($q==2004) {return 'Our Lady of Perpetual Help Parish – 13th Ave.';}
  elseif ($q==2005) {return 'San Roque Parish';}
  elseif ($q==2006) {return 'Saint John Paul II Parish';}
  elseif ($q==2007) {return 'Transfiguration of our Lord Parish';}
  elseif ($q==3001) {return 'Holy Family Parish (GSIS)';}
  elseif ($q==3002) {return 'Immaculate Conception Parish (Project 8)';}
  elseif ($q==3003) {return 'Our Lady of Hope Parish';}
  elseif ($q==3004) {return 'Our Lady of Mount Carmel Parish (Project 6)';}
  elseif ($q==3005) {return 'Our Lady of Perpetual Help Parish (Project 8)';}
  elseif ($q==3006) {return 'Parish of Mary, the Immaculate Conception';}
  elseif ($q==3007) {return 'San Nicolas de Tolentino Parish';}
  elseif ($q==3008) {return 'Santo Niño Parish Shrine';}
  elseif ($q==4001) {return 'Immaculate Conception Parish (Damar)';}
  elseif ($q==4002) {return 'Most Holy Redeemer Parish (Masambong)';}
  elseif ($q==4003) {return 'National Shrine of Our Lady of Lourdes';}
  elseif ($q==4004) {return 'Saint Joseph the Worker Parish (Balintawak)';}
  elseif ($q==4005) {return 'Santo Domingo Parish (La Naval de Manila Shrine)';}
  elseif ($q==4006) {return 'Santuario de San Pedro Bautista Parish';}
  elseif ($q==4007) {return 'Sta. Perpetua Parish';}
  elseif ($q==4008) {return 'Sta. Teresita del Niño Jesus Parish';}
  elseif ($q==5001) {return 'Christ the King Parish (Project 7)';}
  elseif ($q==5002) {return 'Parish of the Hearts of Jesus and Mary';}
  elseif ($q==5003) {return 'Resurrection of Our Lord Parish';}
  elseif ($q==5004) {return 'San Antonio de Padua Parish';}
  elseif ($q==5005) {return 'Saint Jude Quasi-Parish';}
  elseif ($q==5006) {return 'Sta. Rita de Cascia Parish';}
  elseif ($q==5007) {return 'Sto. Cristo de Bungad Parish';}
  elseif ($q==6001) {return 'Diocesan Shrine of St. Joseph';}
  elseif ($q==6002) {return 'Holy Cross Parish';}
  elseif ($q==6003) {return 'Holy Family Parish (Kamias)';}
  elseif ($q==6004) {return 'Immaculate Heart of Mary Parish';}
  elseif ($q==6005) {return 'Our Lady of Pentecost Parish';}
  elseif ($q==6006) {return 'Parish of the Holy Sacrifice';}
  elseif ($q==6007) {return 'Parish of the Lord of Divine Mercy';}
  elseif ($q==6008) {return 'San Isidro Labrador Quasi-Parish';}
    else  {return 'Santa Maria della Strada Parish';}
    }
?>