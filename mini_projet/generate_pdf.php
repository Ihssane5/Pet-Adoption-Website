<?php
require('fpdf/fpdf.php');
session_start();

// adoption rdv pet information
$nom_ad = $_SESSION ["nom_ad"] ;
$prenom_ad = $_SESSION ["prenom_ad"] ;
$cin_ad = $_SESSION ["cin_ad"];
$date_nai_ad = $_SESSION ["date_nai_ad"];
$num_tele_ad = $_SESSION ["num_tele_ad"];
$email_ad = $_SESSION ["email_ad"];
$addr_ad = $_SESSION ["addr_ad"];
$etat_soc_ad = $_SESSION ["etat_soc_ad"];
$pro_ad = $_SESSION ["pro_ad"];

$date_rdv  = $_SESSION ["date_rdv"] ;
$heure_rdv  = $_SESSION ["heure_rdv"] ;

$code_an = $_SESSION ["code_an"];
$ps_nom_an = $_SESSION ["ps_nom_an"];
$genre_an = $_SESSION ["genre_an"];


$red = hexdec('5b') -50;
$green = hexdec('c1') -50;
$blue = hexdec('ac') -50;

class PDF extends FPDF {

    // En-tête du document PDF
    function Header() {
        // Logo
        $this->Image('images/logo1.png',8,5,22);

        $red = hexdec('5b') -50;
        $green = hexdec('c1') -50;
        $blue = hexdec('ac') -50;

        //phrase next to the logo
        $this->SetTextColor($red, $green, $blue);
        $this->SetFont('Arial', 'B', 22);
        $this->SetXY(31, 9); // Adjust X and Y position as needed
        $this->Cell(0, 10, 'Helpa', 0, 0, 'L');
        $this->SetTextColor(0, 0, 0);

        $this->SetFont('Arial', 'B', 11);
        $this->SetXY(31, 16); // Adjust X and Y position as needed
        $this->Cell(0, 10, 'Pet Adoption Association', 0, 0, 'L');
        // Titre
        $this->SetFont('times','B',22);
        $this->Ln(32); // Move down to leave space for the logo and phrase
        $this->Cell(0,0,'Adoption Demand Accepted',0,0,'C');
        $this->Ln(2);
    }

    // Pied de page du document PDF
    /*function Footer() {
        // Positionnement à 1,5 cm du bas
        $this->SetY(-15);
        // Police Arial italique 8
        $this->SetFont('Arial','I',8);
        // Numéro de page
        $this->Cell(0,10,'Ministre de l\'interieur province de safi / secretariat general',0,0,'C');
    }*/
}


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();





// Pied de page
$pdf->SetFont('times','I',15);
$pdf->SetY(57);
$pdf->SetX(14);
$pdf->MultiCell(0, 10, '" This PDF serves as a helpful tool to streamline the process for your upcoming appointment to take your new pet home. Please remember to bring it with you ."', 0, 'L');
//texte

$pdf->SetTextColor($red, $green, $blue);
$pdf->SetFont('times','B',17);
$pdf->SetY(100);
$pdf->SetX(14);
$pdf->Cell(0,10,'Adopter information',0,'L');// Génération du document PDF
$pdf->SetTextColor(0, 0, 0);
$pdf->Line(14, 110, 125, 110);

$pdf->SetFont('times','B',15);
$pdf->SetY(118);
$pdf->SetX(14);
$pdf->Cell(38,10,'Full name    : ',0,0);
$pdf->SetFont('times','',15);
$pdf->Cell(0,10,$prenom_ad.' '.$nom_ad,0,1);

$pdf->SetFont('times','B',15);
$pdf->SetX(14);
$pdf->Cell(38,10,'CIN              : ',0,0);
$pdf->SetFont('times','',15);
$pdf->Cell(0,10,$cin_ad,0,1);

$pdf->SetFont('times','B',15);
$pdf->SetX(14);
$pdf->Cell(38,10,'Birth date    : ',0,0);
$pdf->SetFont('times','',15);
$pdf->Cell(0,10,$date_nai_ad,0,1);

$pdf->SetFont('times','B',15);
$pdf->SetX(14);
$pdf->Cell(38,10,'Address        : ',0,0);
$pdf->SetFont('times','',15);
$pdf->Cell(0,10,$addr_ad,0,1);

$pdf->SetFont('times','B',15);
$pdf->SetX(14);
$pdf->Cell(38,10,'Profession    : ',0,0);
$pdf->SetFont('times','',15);
$pdf->Cell(0,10,$pro_ad,0,1);

$pdf->SetFont('times','B',15);
$pdf->SetX(14);
$pdf->Cell(38,10,'Social status : ',0,0);
$pdf->SetFont('times','',15);
$pdf->Cell(0,10,$etat_soc_ad,0,1);

$pdf->SetFont('times','B',15);
$pdf->SetX(14);
$pdf->Cell(38,10,'Email            : ',0,0);
$pdf->SetFont('times','',15);
$pdf->Cell(0,10,$email_ad,0,1);

$pdf->SetFont('times','B',15);
$pdf->SetX(14);
$pdf->Cell(40,10,'Phone number : ',0,0);
$pdf->SetFont('times','',15);
$pdf->Cell(0,10,$num_tele_ad,0,1);

$pdf->SetFont('times','B',15);
$pdf->SetX(14);
$pdf->Cell(40,10,'Appointement  : ',0,0);
$pdf->SetFont('times','',15);
$pdf->Cell(0,10,$date_rdv .' at '.$heure_rdv,0,1);



//pet information
$pdf->SetTextColor($red, $green, $blue);
$pdf->SetFont('times','B',17);
$pdf->SetY(217);
$pdf->SetX(14);
$pdf->Cell(0,10,'Pet information',0,'L');// Génération du document PDF
$pdf->SetTextColor(0, 0, 0);
$pdf->Line(14, 227, 65, 227);

$pdf->SetFont('times','B',15);
$pdf->SetY(232);
$pdf->SetX(14);
$pdf->Cell(32,10,'Code         : ',0,0);
$pdf->SetFont('times','',15);
$pdf->Cell(0,10,$code_an,0,1);

$pdf->SetFont('times','B',15);
$pdf->SetX(14);
$pdf->Cell(32,10,'Name        : ',0,0);
$pdf->SetFont('times','',15);
$pdf->Cell(0,10,$ps_nom_an,0,1);

$pdf->SetFont('times','B',15);
$pdf->SetX(14);
$pdf->Cell(32,10,'Gender     : ',0,0);
$pdf->SetFont('times','',15);
$pdf->Cell(0,10,$genre_an,0,1);






$pdf->SetFont('Arial', 'B', 12);
$pdf->SetY(260);
$pdf->SetX(150);
$pdf->Cell(40, 10, 'Helpa\'s admin');

$pdf->Image('images/signature_pandadoc.png', 140, 270, 60,0, 'PNG');




$pdf->Output();

?>